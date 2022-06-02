<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Mascota;
use Illuminate\Http\Request;


class MascotaController extends Controller
{


    public function index(){
        $mascotas = Mascota::get();
        $mascotas->load('propietario');
        return view('mascotas.index',compact('mascotas'));
    }

    public function show(Mascota $mascota) {
        return view('mascotas.show', compact('mascota'));
    }


  
}
