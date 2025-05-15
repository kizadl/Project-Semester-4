<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Heart extends Model
{
    protected $connection = 'mongodb';
    protected $fillable = [
        'age',
        'sex',
        'cp',
        'trestbps',
        'chol',
        'thalach',
        'exang',
        'target'
    ];
}
