<?php

namespace App\Http\Controllers;

use App\Models\Cirugia;
use Illuminate\Http\Request;

class CirugiaController extends Controller
{
    public function index() {
        $cirugias = Cirugia::get();
        return view('cirugias.index', compact('cirugias'));
    }

    public function store(Request $request){
        Cirugia::create([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo
        ]);
        return redirect(route('cirugias.index'));
    }

    public function datas($id){
        $cirugia = Cirugia::find($id);
        return $cirugia;
    }

    public function update(Request $request, $id) {
        $cirugia = Cirugia::findOrFail($id);
        $data = ([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
        ]);
        $cirugia->update($data);
        return redirect()->route('cirugias.index');
    }
}
