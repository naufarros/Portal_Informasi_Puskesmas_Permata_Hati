<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien_ugdinap';

    protected $primaryKey = 'nik';

    protected $fillable = [
        'nik',
        'nama_lengkap',
        'umur',
        'jenis_kelamin',
        'alamat',
        'nomor_telepon',
        'instalasi',
        'penyakit',
    ];

    public $timestamps = true;
}
