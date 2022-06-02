<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Models\Cliente;
use App\Models\Persona;
use App\Models\Telefono;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes=Persona::join('clientes','clientes.id','=','personas.id')->get();

        return view('clientes.index',compact('clientes'));
    }

    //store cliente
    public function store(StoreClienteRequest $request){
        $persona=Persona::create([
            'nombre'=>$request->nombre,
            'apellido_paterno'=>$request->apellido_paterno,
            'apellido_materno'=>$request->apellido_materno,
            'email'=>$request->email,
            'direccion'=>$request->direccion,
            'fecha_de_nacimiento'=>$request->fecha_de_nacimiento,
            'sexo'=>$request->sexo,
            'ci'=>$request->ci,
        ]);
        if($request->telefono){
            Telefono::create([
                'numero'=>$request->telefono,
                'id_persona'=>$persona->id,
            ]);
        }
        Cliente::create([
            'id'=>$persona->id,
        ]);

        //create Usuario
        Usuario::create([
            'nombre_usuario'=>$request->email,
            'password'=>bcrypt($request->ci),
            'enable'=>'1',
            'id_rol'=>'4',
            'id_persona'     => $persona->id,
        ]);


        return redirect()->route('clientes.index');
    }


    public function datas($id)
    {
        $cliente = Cliente::find($id);
        $cliente->load('persona');
        $cliente->persona->load('telefonos');
        return $cliente;
    }
}
