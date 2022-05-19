<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaIngreso extends Model
{
    use HasFactory;
    protected $table = 'notas_ingresos';

    protected $fillable  = [ 
        'id_proveedor', 
        'id_producto', 
        'id_administrativo', 
        'cantidad',
        'fecha',
        'hora',
        'monto_total',
    ];
}
