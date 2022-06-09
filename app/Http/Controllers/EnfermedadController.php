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

    public function store(Request $request){
        Enfermedad::create([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo
        ]);
        return redirect(route('enfermedades.index'));
    }

    public function datas($id){
        $enfermedad = Enfermedad::find($id);
        return $enfermedad;
    }

    public function update(Request $request, $id) {
        $enfermedad = Enfermedad::findOrFail($id);
        $data = ([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
        ]);
        $enfermedad->update($data);
        return redirect()->route('enfermedades.index');
    }
}
