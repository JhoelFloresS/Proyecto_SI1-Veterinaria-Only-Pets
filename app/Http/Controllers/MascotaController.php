<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
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

    public function show(Mascota $mascota)
    {
        return view('mascotas.show', compact('mascota'));
    }
}
