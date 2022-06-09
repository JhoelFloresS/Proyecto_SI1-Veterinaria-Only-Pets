<?php

namespace App\Actions;

use App\Models\Administrativo;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Persona;
use App\Models\Telefono;
use App\Models\Turno;
use App\Models\TurnoAdmin;
use App\Models\Usuario;
use Mockery\Undefined;

use function PHPUnit\Framework\isNull;

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
            'direccion'        => $request->direccion,
            'fecha_de_nacimiento' => $request->fecha_de_nacimiento,
            'sexo'             => $request->sexo,
            'ci'               => $request->ci,
        ]);
        foreach ($request->telefonos as $telefono) {
            Telefono::create([
                'numero' => $telefono,
                'id_persona' => $persona->id,
            ]);
        }

        Administrativo::create([
            'id'        => $persona->id,
            'profesion' => $request->profesion,
        ]);


        if ($request->turno) {
            TurnoAdmin::create([
                'id_administrativo' => $persona->id,
                'id_turno' => $request->turno,
            ]);
        }

        Usuario::create([
            'nombre_usuario' => $request->email,
            'password'       => bcrypt($request->ci),
            'enable'         => '1',
            'id_rol'         => '3',
            'id_persona'     => $persona->id,
        ]);
        
    }

    public static function executeUpdate(Request $request, $id):void
    {
        $persona = Persona::findOrFail($id);
        $administrativo = Administrativo::findOrFail($id);
        $administrativo->load('turno');
        $persona->load('telefonos');

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

        //ACTUALIZANDO TELEFONOS
        $telefonos_nuevos = $request->telefonos;
        foreach ($persona->telefonos as $telefono) {
            if (!in_array($telefono->numero, $request->telefonos)) {
                $telefono->delete();
            } else {
                unset($telefonos_nuevos[array_search($telefono->numero, $request->telefonos)]);
            }
        }
        foreach ($telefonos_nuevos as $numero) {
            Telefono::create([
                'numero' => $numero,
                'id_persona' => $persona->id,
            ]);
        }

        //ACTUALIzANDO TURNOS
        if ($request->turno!="Ninguno") {
            if (isset($administrativo->turno[0])) {
                $administrativo->turno[0]->id_turno = $request->turno;
                $administrativo->turno[0]->save();
            } else {
                TurnoAdmin::create([
                    'id_administrativo' => $persona->id,
                    'id_turno' => $request->turno,
                ]);
            }
        } else {
            if (!empty($administrativo->turno)) {
                $id_A = $administrativo->turno[0]->id_administrativo;
                $id_T = $administrativo->turno[0]->id_turno;
                TurnoAdmin::where('id_administrativo', $id_A)->where('id_turno', $id_T)->delete();
            }
        }


        $persona->update($data);
        $administrativo->update();
    }
}
