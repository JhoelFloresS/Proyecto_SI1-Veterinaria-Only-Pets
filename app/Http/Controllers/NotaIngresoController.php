<?php

namespace App\Http\Controllers;

use App\Models\NotaIngreso;
use Illuminate\Http\Request;

class NotaIngresoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:compras.index')->only('index', 'show');
        $this->middleware('can:compras.create')->only('create', 'store');
        $this->middleware('can:compras.edit')->only('edit', 'update', 'datas');
        $this->middleware('can:compras.destroy')->only('destroy');
    }

    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $compras = NotaIngreso::where('id', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('cantidad', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('monto_total', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('fecha', 'LIKE', '%' . $busqueda . '%')
            ->paginate(7);
        $data = [
            'servicio' => $compras,
            'busqueda' => $busqueda,
        ];
        return view('compras.index', compact('compras'));
    }

    public function show($id)
    {
        //return view('enfermedades.show', compact('enfermedad'));
        $compras = NotaIngreso::findOrFail($id);
        return view('compras.show', compact('compras'));
    }
}
