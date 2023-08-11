<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa'; // Nama tabel di database
    protected $fillable = ['nis', 'nama', 'tempat_lahir', 'tanggal_lahir', 'phone', 'email', 'gender']; // Field yang dapat diisi secara massal
}
