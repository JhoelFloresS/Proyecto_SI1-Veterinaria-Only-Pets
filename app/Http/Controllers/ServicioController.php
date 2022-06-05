<?php

namespace App\Http\Controllers;

use App\Model\Servicio;
use App\Models\Servicio as ModelsServicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $servicios = ModelsServicio::where('nombre', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('precio', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('descripcion', 'LIKE', '%' . $busqueda . '%')
            ->paginate(7);
        $data = [
            'servicio' => $servicios,
            'busqueda' => $busqueda,
        ];
        return view('servicios.index', compact('servicios'));
    }

    public function show(ModelsServicio $servicio)
    {
        return view('servicios.show', compact('servicio'));
    }
}