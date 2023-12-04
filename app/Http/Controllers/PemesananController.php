<?php

// app/Http/Controllers/PemesananController.php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $transactions = Transaksi::all();
        return view('admin.pemesanan.pemesanan', compact('transactions'));
    }

    // Metode untuk menampilkan transaksi berdasarkan status tertentu
    public function show($status)
    {
        $transactions = Transaksi::where('status_pesanan', $status)->get();
        return view('pemesanan', compact('transactions'));
    }

    // Metode untuk menangani konfirmasi dan penghapusan
    public function konfirmasi($orderId)
    {
        // Logika untuk konfirmasi transaksi
    }

    public function hapus($orderId)
    {
        // Logika untuk menghapus transaksi
    }
}

