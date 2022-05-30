<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVeterinarioRequest;
use App\Models\Cliente;
use App\Models\Persona;
use App\Models\Telefono;
use App\Models\TurnoVet;
use App\Models\Usuario;
use App\Models\Veterinario;
use Illuminate\Http\Request;

class VeterinarioController extends Controller
{
    public function index(){
        $veterinarios = Veterinario::get();
        $veterinarios->load('persona');
        return view('veterinarios.index', compact('veterinarios'));

    }

    public function store(StoreVeterinarioRequest $request){
       
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
        if($request->telefono){
            Telefono::create([
                'numero' => $request->telefono,
                'id_persona' => $persona->id,
            ]);
        }

        Veterinario::create([
            'id'        => $persona->id,
            'profesion' => $request->profesion,
            'id_servicio' => $request->servicio,
        ]);

        
        if($request->turno){
            TurnoVet::create([
                'id_veterinario' => $persona->id,
                'id_turno' => $request->turno,
            ]);
        }
            
        Usuario::create([
            'nombre_usuario' => $request->email,
            'password'       => bcrypt($request->ci),
            'enable'         => '1',
            'id_rol'         => '2',
            'id_persona'     => $persona->id,
        ]);

        return redirect()->route('veterinarios.index');
    }

    public function show(Veterinario $veterinario) {
        $telefonos = Telefono::whereid_persona($veterinario->id)->get();
        return view('veterinarios.show', compact('veterinario', 'telefonos'));
    }
}
