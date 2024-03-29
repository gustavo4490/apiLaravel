<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres',
        'apellidos',
        'correo_electronico',
        'password',
        'rol'
    ];

    protected $hidden =[
        'updated_at',
        'created_at'
    ];
}
