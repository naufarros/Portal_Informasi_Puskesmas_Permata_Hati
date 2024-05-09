<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel'; // Nama tabel dalam database

    protected $fillable = [
        'gambar', 'kategori', 'judul', 'deskripsi', 'tanggal_upload'
    ];

    protected $dateFormat = 'Y-m-d';
}
