<?php

namespace App\Http\Controllers;

use App\Models\HistorialClinico;
use Illuminate\Http\Request;

class HistorialClinicoController extends Controller
{
    public function index() {
        $historiales = HistorialClinico::get();
        return view('historiales.index', compact('historiales'));
    }

    public function show(HistorialClinico $historiale) {
        /* $historiale->load('vacuna');
        return $historiale; */
        return view('historiales.show', compact('historiale'));
    }

}
