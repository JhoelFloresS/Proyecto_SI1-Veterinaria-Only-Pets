<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
    use HasFactory;
    protected $table = 'veterinarios';

    protected $fillable  = [ 
        'id_recibo', 
        'id_producto', 
        'cantidad', 
        'precio_total',
    ];
}
