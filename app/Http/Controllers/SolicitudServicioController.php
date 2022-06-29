<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Recibo;
use App\Models\Servicio;
use App\Models\SolicitudServicio;
use Illuminate\Http\Request;

class SolicitudServicioController extends Controller
{
    
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $solicitudes = SolicitudServicio::where('id_cliente', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('id_servicio', 'LIKE', '%' . $busqueda . '%')
            ->orWhere('id_recibo', 'LIKE', '%' . $busqueda . '%')
            ->latest('id')
            ->paginate(7);
        $data = [
            'solicitudes' => $solicitudes,
            'busqueda' => $busqueda,
        ];
        $solicitudes->load('cliente');
        $solicitudes->load('servicio');
        $solicitudes->load('recibo');
        return view('solicitudes.index', compact('solicitudes'));
    }

    public function store(Request $request){
        if (is_null($request->servicios)) {
            SolicitudServicio::create([
                'id_cliente' => $request->id_cliente,
                'id_servicio' => null,
                'id_recibo' => $request->id_recibo,
            ]);
        } else {
            foreach ($request->servicios as $servicio) {
                SolicitudServicio::create([
                    'id_cliente' => $request->id_cliente,
                    'id_servicio' => $servicio,
                    'id_recibo' => $request->id_recibo,
                ]);
            }
        }        
           
        return redirect(route('solicitudes.index'));
    }

    public function datas($id){
        $solicitud = SolicitudServicio::find($id);
        $solicitud->load('servicio');
        $solicitud->load('recibo');
        $solicitud->load('cliente');
        $solicitud->cliente->load('persona');
        return $solicitud;
    }

    
    public function update(Request $request, $id) {
        $solicitud = SolicitudServicio::find($id);
        $data = [
            'id_cliente' => $request->id_cliente,
            'id_servicio' => $request->servicios,
            'id_recibo' => $request->id_recibo,
        ];
        $solicitud->update($data);
        return redirect(route('solicitudes.index'));
    }

}
