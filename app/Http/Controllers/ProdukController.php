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
        return view('admin.produk.produk', ['produks' => $produks]);
    }

    // Metode lain seperti create(), edit(), update(), destroy(), dll.

    public function create()
    {
        return view('admin.produk.tambah_produk');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                // Validasi sesuai kebutuhan
                'nama_produk' => 'required',
                'stock' => 'required|numeric',
                'category' => 'required',
                'harga_small' => 'required|numeric',
                'harga_medium' => 'required|numeric',
                'harga_large' => 'required|numeric',
                
                'warna' => 'required',
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
            ]);

            $produk = new Produk();

            // Isi atribut-atribut produk dari data form
            $produk->nama_produk = $validatedData['nama_produk'];
            $produk->stock = $validatedData['stock'];
            $produk->category = $validatedData['category'];
            $produk->harga_small = $validatedData['harga_small'];
            $produk->harga_medium = $validatedData['harga_medium'];
            $produk->harga_large = $validatedData['harga_large'];
            
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
            $history->harga_small = $produk->harga_small;
            $history->harga_medium = $produk->harga_medium;
            $history->harga_large = $produk->harga_large;
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

    // Fungsi untuk menampilkan halaman edit produk
    public function edit($code)
    {
        // Temukan produk berdasarkan code
        $produk = Produk::where('code', $code)->first();

        if (!$produk) {
            return redirect()->route('produk.index')->with('error', 'Produk tidak ditemukan.');
        }

        return view('admin.produk.edit_produk', compact('produk'));
    }

    // Method untuk menyimpan perubahan pada produk ke dalam basis data
    public function update(Request $request, $code)
    {
        // Temukan produk berdasarkan code
        $produk = Produk::where('code', $code)->first();

        if (!$produk) {
            return redirect()->route('produk.index')->with('error', 'Produk tidak ditemukan.');
        }

        // Validasi data yang diinput sebelum disimpan
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'stock' => 'required|numeric',
            'category' => 'required',
            'harga_small' => 'required|numeric',
            'harga_medium' => 'required|numeric',
            'harga_large' => 'required|numeric',
            
            'warna' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // jika ingin validasi untuk gambar
        ]);

        // Menyimpan data harga sebelum diupdate
        $oldHarga = [
            'harga_small' => $produk->harga_small,
            'harga_medium' => $produk->harga_medium,
            'harga_large' => $produk->harga_large
        ];

        $newHarga = [
            'harga_small' => $validatedData['harga_small'],
            'harga_medium' => $validatedData['harga_medium'],
            'harga_large' => $validatedData['harga_large']
        ];

        // Simpan perubahan data
        $produk->update($validatedData);

        // Bandingkan harga sebelum dan sesudah update
        $changesDetected = false;
        $changedHarga = [];

        foreach ($newHarga as $key => $value) {
            if ($oldHarga[$key] != $value) {
                $changedHarga[$key] = [
                    'old' => $oldHarga[$key],
                    'new' => $value
                ];
                $changesDetected = true;
            }
        }

        // Jika ada perubahan harga, simpan riwayat perubahan
        if ($changesDetected) {
            $history = new HistoryProduk();
            $history->code = $produk->code;
            $history->update_time = now()->toDateString();
            
            $history->harga_small = $newHarga['harga_small'];
            $history->harga_medium = $newHarga['harga_medium'];
            $history->harga_large = $newHarga['harga_large'];

            $history->save();
        }

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    // Method untuk menghapus produk dari basis data
    public function destroy($code)
    {
        // Temukan produk berdasarkan code
        $produk = Produk::where('code', $code)->first();

        if (!$produk) {
            return redirect()->route('produk.index')->with('error', 'Produk tidak ditemukan.');
        }
        // Hapus gambar terkait produk

        $gambarPath = public_path('gambar_produk/' . $produk->gambar); // Path ke gambar

        if (file_exists($gambarPath)) {
            unlink($gambarPath); // Hapus gambar dari sistem penyimpanan
        }
        // Hapus produk
        $produk->delete();

        // Hapus riwayat perubahan harga terkait produk yang dihapus
        HistoryProduk::where('code', $code)->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
    }

}
