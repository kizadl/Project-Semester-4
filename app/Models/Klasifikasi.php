<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasifikasi extends Model
{
    protected $connection = 'mongodb';
    protected $fillable = [
        'name',
        'age',
        'sex',
        'cp',
        'trestbps',
        'chol',
        'thalach',
        'exang',
        'target',
    ];
}
