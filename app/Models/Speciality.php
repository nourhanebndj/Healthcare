<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Speciality extends Model
{
    protected $connection = 'mongodb'; 
    protected $collection = 'specialities'; 
    protected $fillable = ['name']; 
}