<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk'; // Sesuaikan dengan nama tabel di database Anda

    protected $primaryKey = 'code';
    public $timestamps = false;

    public $incrementing = false;
    protected $fillable = [
        'code',
        'stock',
        'category',
        'nama_produk',
        'harga',
        'ukuran',
        'gambar',
        'warna',
    ]; // Kolom-kolom yang dapat diisi secara massal

    public function getRouteKeyName()
    {
        return 'code';
    }

}
