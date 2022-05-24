<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable 
{
    use HasFactory;
    protected $table = 'usuarios';

    protected $fillable  = [ 
        'nombre_usuario', 
        'password', 
        'enable', 
        'id_rol',
        'id_persona'
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol');
    }
}
