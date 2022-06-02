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
}
