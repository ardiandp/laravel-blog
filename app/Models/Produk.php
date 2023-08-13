<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    
    protected $table = 'produk'; // Nama tabel di database
    protected $fillable = [
        'kodeproduk',
        'nama_produk',
        'nama_produk_seo',
        'kategori_id',
        'keterangan',
        'harga',
        'stok',
        'berat',
        'gambar',
        'status',
    ];
}
