<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transakasi';
    protected $primaryKey = 'order_id';
    public $timestamps = false;

    // Definisi relasi jika ada
    // ...

    
}
