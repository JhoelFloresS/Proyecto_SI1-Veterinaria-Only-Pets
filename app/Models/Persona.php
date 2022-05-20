<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';

    protected $fillable = [
        'nombre', 
        'apellido_paterno', 
        'apellido_materno', 
        'ci', 
        'direccion', 
        'email', 
        'fecha_de_nacimiento', 
        'sexo',
    ];
}
