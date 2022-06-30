<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Recibo;
use App\Models\Servicio;
use App\Models\SolicitudServicio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $solicitudes->load('mascota');
        return view('solicitudes.index', compact('solicitudes'));
    }

    public function store(Request $request){
        //NOTA: esta accion solo la puede realizar el administrativo
        //Auth::user()->id  es el id de la persona que esta 
        //registrando la solicitud de servicio
        $fecha = Carbon::now();
        $recibo = Recibo::create([
            'fecha' => $fecha->toDateString(), 
            'concepto' => $request->concepto, 
            'monto_cancelado' => $request->monto_cancelado, 
            'saldo' => $request->saldo,
            'monto_total' => $request->monto_total,
            'id_administrativo' => Auth::user()->id,
        ]);
        if (is_null($request->servicios)) {
            SolicitudServicio::create([
                'id_cliente' => $request->id_cliente,
                'id_servicio' => null,
                'id_recibo' => $recibo->id,
                'id_mascota' => $request->id_mascota,
            ]);
        } else {
            foreach ($request->servicios as $servicio) {
                SolicitudServicio::create([
                    'id_cliente' => $request->id_cliente,
                    'id_servicio' => $servicio,
                    'id_recibo' => $recibo->id,
                    'id_mascota' => $request->id_mascota,
                ]);
            }
        }        
           
        return redirect(route('solicitudes.index'));
    }

    public function datas($id){
        $solicitud = SolicitudServicio::find($id);
        $solicitud->load('servicio');
        $solicitud->load('recibo');
        $solicitud->load('mascota');
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
            'id_mascota' => $request->id_mascota,
        ];
        $solicitud->update($data);
        return redirect(route('solicitudes.index'));
    }

}
