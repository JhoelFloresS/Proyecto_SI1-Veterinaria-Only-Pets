<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurnoAdmin extends Model
{
    use HasFactory;
    protected $table = 'turno_admins';

    protected $fillable  = [ 
        'id_administrativo', 
        'id_turno', 
    ];
}
