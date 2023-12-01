<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\HistoryProduk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all(); // Ambil semua produk
        return view('admin.produk', ['produks' => $produks]);
    }

    // Metode lain seperti create(), edit(), update(), destroy(), dll.

    public function create()
    {
        return view('admin.tambah_produk');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                // Validasi sesuai kebutuhan
                'nama_produk' => 'required',
                'stock' => 'required|numeric',
                'category' => 'required',
                'harga' => 'required|numeric',
                'ukuran' => 'required',
                'warna' => 'required',
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
            ]);

            $produk = new Produk();

            // Isi atribut-atribut produk dari data form
            $produk->nama_produk = $validatedData['nama_produk'];
            $produk->stock = $validatedData['stock'];
            $produk->category = $validatedData['category'];
            $produk->harga = $validatedData['harga'];
            $produk->ukuran = $validatedData['ukuran'];
            $produk->warna = $validatedData['warna'];

            // Simpan gambar ke dalam storage
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $fileName = uniqid() . '_' . $file->getClientOriginalName(); // Menggunakan nama unik untuk file gambar
                $file->move(public_path('gambar_produk'), $fileName);

                $produk->gambar = $fileName;
            }

            $produk->code = $this->generateProductCode();

            $produk->save();

            // Update tabel history_produk
            $history = new HistoryProduk();
            $history->code = $produk->code;
            $history->harga = $produk->harga;
            $history->update_time = now()->toDateString();
            $history->save();

            return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
        } catch (\Exception $e) {
            // Tangani kesalahan jika ada
            return redirect()->route('produk.index')->with('error', 'Gagal menambahkan produk: ' . $e->getMessage());
        }
    }

    public function generateProductCode()
    {
        // Mengambil kode produk terakhir dari database
        $lastProduct = Produk::orderBy('code', 'desc')->first();

        // Jika sudah ada kode produk terakhir
        if ($lastProduct) {
            // Mendapatkan angka dari kode produk terakhir
            $lastCode = intval(substr($lastProduct->code, 1));

            // Increment angka kode produk terakhir
            $newCode = 'S' . str_pad($lastCode + 1, 3, '0', STR_PAD_LEFT);
        } else {
            // Jika belum ada kode produk sama sekali, maka generate kode pertama
            $newCode = 'S001';
        }

        return $newCode;
    }


}
