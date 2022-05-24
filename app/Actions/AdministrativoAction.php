<?php

namespace App\Actions;

use App\Models\Administrativo;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Persona;
use App\Models\Usuario;

class AdministrativoAction 
{
    //use DispatchesJobs;

    public static function executeStore(Request $request): void
    {
        $persona = Persona::create([
            'nombre'           => $request->nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'email'            => $request->email,
        ]);
        Administrativo::create([
            'id'        => $persona->id,
            'profesion' => $request->profesion, 
        ]);
        Usuario::create([
            'nombre_usuario' => $request->nombre_usuario,
            'password'       => bcrypt($request->password),
            'enable'         => '1',
            'id_rol'         => '3',
            'id_persona'     => $persona->id,
        ]);
    }

    public static function executeUpdate(Request $request, $id): void
    {
        $persona = Persona::findOrFail($id);
        $administrativo = Administrativo::findOrFail($id);

        $administrativo->profesion = $request->profesion;
        $data = ([
            'nombre'              => $request->nombre,
            'apellido_paterno'    => $request->apellido_paterno,
            'apellido_materno'    => $request->apellido_materno,
            'email'               => $request->email,
            'ci'                  => $request->ci,
            'direccion'           => $request->direccion,
            'fecha_de_nacimiento' => $request->fecha_de_nacimiento,
            'sexo'                => $request->sexo,
        ]);
        
        $persona->update($data);
        $administrativo->update();
        
    }

}