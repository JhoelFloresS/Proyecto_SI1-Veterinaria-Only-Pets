<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    use HasFactory;
    protected $table = 'acciones';
    public $timestamps = false;

    protected $fillable = [
        'accion', 
        'descripcion', 
        'fecha', 
        'hora',
        'id_bitacora', 
    ];



    public function bitacora()
    {
        return $this->belongsTo(Bitacora::class, 'id_bitacora');
    }
}
