<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsuarioRequest;
use App\Models\Cliente;
use App\Models\Persona;
use App\Models\Usuario;
use App\Actions\StoreUsuarioAction;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $usuarios = Usuario::where('nombre_usuario','LIKE','%'.$busqueda.'%')
            ->orWhere('enable','LIKE','%'.$busqueda.'%')
            ->latest('id')
            ->paginate(7);
        $data = [
            'usuario'=>$usuarios,
            'busqueda' => $busqueda,
        ];
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('register');
    }

    public function store(StoreUsuarioRequest $request)
    {
        //creacion de la persona y usuario
        StoreUsuarioAction::execute($request);

        return view('auth.login');
    }
}
