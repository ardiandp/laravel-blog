<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai'; // Nama tabel di database
    protected $fillable = ['nip', 'nama', 'email', 'phone', 'gender', 'status']; // Field yang dapat diisi secara massal
}
