<?php

namespace App\Http\Controllers;

use App\Models\Vacuna;
use Illuminate\Http\Request;

class VacunaController extends Controller
{
    
    public function index() {
        $vacunas = Vacuna::get();
        return view('vacunas.index', compact('vacunas'));
    }

}
