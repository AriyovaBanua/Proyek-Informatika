<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'email';
    public $timestamps = false;

    public $incrementing = false;
    protected $fillable = ['email', 'nama_customer', 'no_hp']; // Kolom pada tabel customer
}
