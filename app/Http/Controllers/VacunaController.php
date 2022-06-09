<?php

namespace App\Http\Controllers;

use App\Models\Vacuna;
use Illuminate\Http\Request;

class VacunaController extends Controller
{
    
    public function index() {
        $vacunas = Vacuna::get();
        return view('vacunas.index', compact('vacunas'));
    }

    public function store(Request $request){
        Vacuna::create([
            'nombre' => $request->nombre,
        ]);
        return redirect(route('vacunas.index'));
    }

    public function datas($id){
        $vacuna = Vacuna::find($id);
        return $vacuna;
    }

    public function update(Request $request, $id) {
        $vacuna = Vacuna::findOrFail($id);
        $data = ([
            'nombre' => $request->nombre,
        ]);
        $vacuna->update($data);
        return redirect()->route('vacunas.index');
    }

}
