<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumuman'; // Nama tabel di database
    protected $fillable = ['judul', 'isi', 'gambar', 'tanggal']; // Kolom yang dapat diisi
}
