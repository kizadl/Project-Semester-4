<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Klasifikasi extends Model
{
    protected $connection = 'mongodb';
    protected $fillable = [
        'nama',
        'usia',
        'jenis_kelamin',
        'tipe_nyeri_dada',
        'tekanan_darah_istirahat',
        'kadar_kolesterol',
        'detak_jantung_maksimum',
        'nyeri_dada_olahraga',
        'hasil_klasifikasi',
    ];
}
