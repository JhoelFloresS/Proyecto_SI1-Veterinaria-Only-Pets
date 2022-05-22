<?php

namespace App\Actions;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Persona;
use App\Models\Usuario;

class StoreUsuarioAction 
{
    //use DispatchesJobs;

    public static function execute(Request $request): void
    {
        $persona = Persona::create($request->except('nombre_usuario', 'password', 'password_confirmation'));
        Cliente::create(['id' => $persona->id]);
        Usuario::create([
            'nombre_usuario' => $request->nombre_usuario,
            'password'       => bcrypt($request->password),
            'enable'         => '1',
            'id_rol'         => '4',
            'id_persona'     => $persona->id,
        ]);    
    }

}