<?php

namespace App\Http\Controllers;

use App\Model\Servicio;
use App\Models\PlanDePago;
use App\Models\Servicio as ModelsServicio;
use App\Models\SolicitudServicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $servicios = ModelsServicio::where('nombre', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('precio', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('descripcion', 'LIKE', '%' . $busqueda . '%')
            ->paginate(7);
        $data = [
            'servicio' => $servicios,
            'busqueda' => $busqueda,
        ];
        $servicios->load('plan_de_pagos');
        return view('servicios.index', compact('servicios'));
    }

    public function show(ModelsServicio $servicio)
    {
        return view('servicios.show', compact('servicio'));
    }

    public function store(Request $request)
    {
        $servicio = ModelsServicio::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio
        ]);

        PlanDePago::create([
            'nro_cuotas' => $request->nro_cuotas,
            'monto_cuota' => $request->monto_cuota,
            'id_servicio' => $servicio->id,
        ]);

        return redirect(route('servicios.index'));
    }

    public function datas($id)
    {
        $servicio = ModelsServicio::find($id);
        $servicio->load('plan_de_pagos');
        return $servicio;
    }

    public function update(Request $request, $id)
    {
        $servicio = ModelsServicio::findOrFail($id);
        $data = ([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
        ]);
        $servicio->update($data);
        return redirect()->route('servicios.index');
    }
}
