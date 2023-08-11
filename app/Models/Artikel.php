<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $factory = PegawaiFactory::class;
    protected $table = 'artikel'; // Nama tabel di database
    protected $fillable = ['judul', 'judul_seo', 'artikel', 'publish']; // Field yang dapat diisi secara massal
}
