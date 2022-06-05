<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Enfermedad;
use Illuminate\Http\Request;

class EnfermedadController extends Controller
{
    public function index(Request $request)
    {
        $enfermedades = Enfermedad::get();
        $busqueda = $request->busqueda;
        $enfermedades = Enfermedad::where('nombre', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('id', 'LIKE', '%' . $busqueda . '%')
            ->paginate(7);
        $data = [
            'enfermedad' => $enfermedades,
            'busqueda' => $busqueda,
        ];
        return view('enfermedades.index', compact('enfermedades'));
    }

    public function show($id)
    {
        //return view('enfermedades.show', compact('enfermedad'));
        $enfermedad = Enfermedad::findOrFail($id);
        return view('enfermedades.show', compact('enfermedad'));
    }
}
