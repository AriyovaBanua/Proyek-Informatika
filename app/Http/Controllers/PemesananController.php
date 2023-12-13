<?php

// app/Http/Controllers/PemesananController.php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::where('status_pesanan', 'Menunggu konfirmasi')->get();
        return view('admin.pemesanan.menunggu_konfirmasi', compact('transaksis'));
    }

    public function halamanProses()
    {
        $transaksis = Transaksi::where('status_pesanan', 'Proses')->get();
        return view('admin.pemesanan.proses', compact('transaksis'));
    }

    public function halamanDikirim()
    {
        $transaksis = Transaksi::where('status_pesanan', 'Dikirim')->get();
        return view('admin.pemesanan.dikirim', compact('transaksis'));
    }

    public function halamanSelesai()
    {
        $transaksis = Transaksi::where('status_pesanan', 'Selesai')->get();
        return view('admin.pemesanan.selesai', compact('transaksis'));
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

