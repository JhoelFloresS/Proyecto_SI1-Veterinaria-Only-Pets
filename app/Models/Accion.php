<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    use HasFactory;
    protected $table = 'acciones';

    protected $fillable = [
        'accion', 
        'descripcion', 
        'fecha', 
        'hora', 
    ];
}
