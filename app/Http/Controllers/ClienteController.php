<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Persona;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes=Persona::join('clientes','clientes.id','=','personas.id')->get();

        return view('clientes.index',compact('clientes'));
    }
}
