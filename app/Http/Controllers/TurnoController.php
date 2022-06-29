<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use Illuminate\Http\Request;

class TurnoController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $turnos = Turno::where('horario_entrada', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('horario_salida', 'LIKE', '%' . $busqueda . '%')
            ->latest('id')
            ->paginate(7);
        $data = [
            'turnos' => $turnos,
            'busqueda' => $busqueda,
        ];
        return view('turnos.index', compact('turnos'));
    }
}
