<?php

namespace App\Http\Controllers;

use App\Models\Vacuna;
use Illuminate\Http\Request;
use App\Http\Requests\StorevacunasRequest;
use App\Actions\VacunaAction;

class VacunaController extends Controller
{
    
    public function index() {
        $vacunas = Vacuna::get();
        return view('vacunas.index', compact('vacunas'));
    }
    
    public function create() {
        return view('vacunas.create');
    }

    public function store(StorevacunasRequest $request) {
        
        VacunaAction::executeStore($request);

        return redirect()->route('vacunas.index');
    }
}
