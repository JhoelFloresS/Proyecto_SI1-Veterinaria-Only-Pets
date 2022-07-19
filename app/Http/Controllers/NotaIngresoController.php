<?php

namespace App\Http\Controllers;

use App\Models\NotaIngreso;
use Illuminate\Http\Request;

class NotaIngresoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:ingresos.index')->only('index', 'show');
        $this->middleware('can:ingresos.create')->only('create', 'store');
        $this->middleware('can:ingresos.edit')->only('edit', 'update', 'datas');
        $this->middleware('can:ingresos.destroy')->only('destroy');
    }

    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $ingresos = NotaIngreso::where('id', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('cantidad', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('monto_total', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('fecha', 'LIKE', '%' . $busqueda . '%')
            ->paginate(7);
        $data = [
            'servicio' => $ingresos,
            'busqueda' => $busqueda,
        ];
        return view('ingresos.index', compact('ingresos'));
    }

    public function show($id)
    {
        //return view('enfermedades.show', compact('enfermedad'));
        $ingresos = NotaIngreso::findOrFail($id);
        return view('ingresos.show', compact('ingresos'));
    }
}
