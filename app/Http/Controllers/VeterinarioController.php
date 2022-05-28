<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Veterinario;
use Illuminate\Http\Request;

class VeterinarioController extends Controller
{
    public function index() {
        $admins = Veterinario::get();
        $admins->load('persona');
        return view('veterinario.index', compact('admins'));
    }

    public function create() {
        return view('veterinario.create');
    }
}
