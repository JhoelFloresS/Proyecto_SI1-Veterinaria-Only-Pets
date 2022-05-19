<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table = 'macotas';

    protected $fillable  = [ 
        'nombre', 
        'raza', 
        'fecha_nacimiento', 
        'especie',
        'descripcion',
        'sexo',
    ];
}
