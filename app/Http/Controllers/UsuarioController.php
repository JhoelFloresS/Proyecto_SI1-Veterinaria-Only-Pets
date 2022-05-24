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

    public function create() {
        return view('register');
    }

    public function store(StoreUsuarioRequest $request) {
        //creacion de la persona y usuario
        StoreUsuarioAction::execute($request); 

        return view('auth.login');
    }
}
