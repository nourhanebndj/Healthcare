<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Listedespatients extends Model
{
    protected $collection = 'listedespatients';
    protected $fillable = [
        'name', 'age', 'phone', 'city', 'temperature', 'heart_rate', 'oxygen_saturation'
    ];
}