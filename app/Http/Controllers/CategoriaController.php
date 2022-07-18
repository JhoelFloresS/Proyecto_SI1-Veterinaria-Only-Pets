<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria as ModelsCategoria;

class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:categoria.index')->only('index');
    }
    public function index(Request $request)
    
    {   $busqueda = $request->busqueda;
        $categoria = ModelsCategoria::where('nombre', 'LIKE', '%' . $busqueda . '%')
            ->paginate(7);
        $data = [
            'servicio' => $categoria,
            'busqueda' => $busqueda,
        ];
        return view('categoria.index', compact('categoria'));}
    
}
