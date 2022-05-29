<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdministrativoRequest;
use App\Models\Administrativo;
use App\Models\Persona;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Actions\AdministrativoAction;
use App\Http\Requests\UpdateAdministrativoRequest;

class AdministrativoController extends Controller
{
    
    public function index() {
        $admins = Administrativo::get();
        $admins->load('persona');
        return view('administrativo.index', compact('admins'));
    }

    public function create() {
        return view('administrativo.create');
    }

    public function store(StoreAdministrativoRequest $request) {

        //creacion de persona, administrativo y usuario
        AdministrativoAction::executeStore($request);
        //$admins = Administrativo::get();
        //$admins->load('persona');
        //return view('administrativo.index', compact('admins'));
        return redirect()->route('administrativos.index');
    }

    public function edit(Administrativo $administrativo) {
        return view('administrativo.edit', compact('administrativo'));
    }

    public function update(UpdateAdministrativoRequest $request, $id) {
        //return $request;
        AdministrativoAction::executeUpdate($request, $id);
        return redirect()->route('administrativos.index');
    }


}
