<?php

namespace App\Models;

use MongoDB\Laravel\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Doctor extends Authenticatable
{
    use Notifiable;

    protected $connection = 'mongodb'; 
    protected $collection = 'doctors';
    protected $guard = 'web';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'specialties', // Stocke les spécialités sous forme de tableau
        'working_hours',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'specialties' => 'array', 
        'working_hours' => 'array',
    ];
}