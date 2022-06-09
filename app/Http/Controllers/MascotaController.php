<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\clienteMascota;
use App\Models\Mascota;
use Illuminate\Http\Request;


class MascotaController extends Controller
{


    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $mascotas = Mascota::where('nombre', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('raza', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('sexo', 'LIKE', '%' . $busqueda . '%')
            ->latest('id')
            ->paginate(7);
        $data = [
            'mascota' => $mascotas,
            'busqueda' => $busqueda,
        ];
        $mascotas->load('propietario');
        return view('mascotas.index', compact('mascotas'));
    }


    public function store(Request $request)
    {
        $mascota = Mascota::create([
            'nombre' => $request->nombre,
            'especie' => $request->especie,
            'fecha_nacimiento' => $request->fecha_de_nacimiento,
            'raza' => $request->raza,
            'sexo' => $request->sexo,
            'descripcion' => $request->descripcion,
        ]);

        foreach ($request->duenhos as $duenho) {
            clienteMascota::create([
                'id_mascota' => $mascota->id,
                'id_cliente' => $duenho,
            ]);
        }

        return redirect()->route('mascotas.index');
    }


    public function update(Request $request, $id){
       // return $request;
        $mascota = Mascota::findOrFail($id);
        $mascota->update([
            'nombre' => $request->nombre,
            'especie' => $request->especie,
            'fecha_nacimiento' => $request->fecha_de_nacimiento,
            'raza' => $request->raza,
            'sexo' => $request->sexo,
            'descripcion' => $request->descripcion,
        ]);

        $propietariosN = $request->duenhos;
        foreach ($mascota->propietario as $propietario) {
            if (!in_array($propietario->id, $request->duenhos)) {
                clienteMascota::where('id_mascota', $mascota->id)
                    ->where('id_cliente', $propietario->id)
                    ->delete();
            } else {
                unset($propietariosN[array_search($propietario->id, $request->duenhos)]);
            }
        }

        foreach ($propietariosN as $propietario) {
            clienteMascota::create([
                'id_cliente' => $propietario->id,
                'id_mascota' => $mascota->id,
            ]);
        }

        return redirect()->route('mascotas.index');
    }

    public function datas($id){
        $mascotas = Mascota::find($id);
        $mascotas->load('propietario');
        return $mascotas;
    }

    public function show(Mascota $mascota)
    {
        return view('mascotas.show', compact('mascota'));
    }
}
