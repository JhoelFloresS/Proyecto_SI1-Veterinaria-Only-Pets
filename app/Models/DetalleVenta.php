<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;
    protected $table = 'detalles_venta';

    protected $fillable  = [ 
        'id_recibo', 
        'id_producto', 
        'cantidad', 
        'precio_total',
    ];
}
