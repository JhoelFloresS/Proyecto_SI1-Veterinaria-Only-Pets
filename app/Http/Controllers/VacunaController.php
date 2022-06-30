<?php

namespace App\Http\Controllers;

use App\Models\Vacuna;
use App\Http\Requests\StorevacunasRequest;
use App\Actions\VacunaAction;
use Illuminate\Support\Facades\Auth;

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

        BitacoraController::registrar(
            Auth::user()->id,
            'Creación de vacuna',
            'Se creó la vacuna: '.$request->nombre
        );
        return redirect()->route('vacunas.index');
    }
}
