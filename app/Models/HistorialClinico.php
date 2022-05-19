<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialClinico extends Model
{
    use HasFactory;
    protected $table = 'historiales_clinicos';

    protected $fillable  = [ 
        'id_mascota', 
        'peso', 
        'talla', 
    ];
}
