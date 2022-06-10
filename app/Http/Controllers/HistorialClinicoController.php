<?php

namespace App\Http\Controllers;

use App\Models\HistorialClinico;
use Illuminate\Http\Request;

class HistorialClinicoController extends Controller
{
    public function index() {
        $historiales = HistorialClinico::get();
        return view('historiales.index', compact('historiales'));
    }

    public function show(HistorialClinico $historiale) {
        /* $historiale->load('vacuna');
        return $historiale; */
        return view('historiales.show', compact('historiale'));
    }

    public function store(Request $request){
        /* Vacuna::create([
            'nombre' => $request->nombre,
        ]); */
        return redirect(route('vacunas.index'));
    }

    /* public function datas($id){
        $vacuna = Vacuna::find($id);
        return $vacuna;
    } */

    /* public function update(Request $request, $id) {
        $vacuna = Vacuna::findOrFail($id);
        $data = ([
            'nombre' => $request->nombre,
        ]);
        $vacuna->update($data);
        return redirect()->route('vacunas.index');
    } */

}
