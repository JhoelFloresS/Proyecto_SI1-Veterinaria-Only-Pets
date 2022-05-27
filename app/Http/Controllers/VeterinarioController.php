<?php

namespace App\Http\Controllers;

use App\Models\Veterinario;
use Illuminate\Http\Request;

class VeterinarioController extends Controller
{
    public function index(){
        $veterinarios = Veterinario::get();
        $veterinarios->load('persona');
        return view('veterinarios.index', compact('veterinarios'));

    }
}
