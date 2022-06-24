<?php

namespace Database\Seeders;

use App\Models\SolicitudServicio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolicitudServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //para cirugias
        SolicitudServicio::create([
            'id_cliente' => '8', 
            'id_servicio' => '5', 
            'id_recibo' => '1', 
        ]);
        SolicitudServicio::create([
            'id_cliente' => '8', 
            'id_servicio' => '5', 
            'id_recibo' => '2', 
        ]);
        SolicitudServicio::create([
            'id_cliente' => '8', 
            'id_servicio' => '5', 
            'id_recibo' => '3', 
        ]);

        SolicitudServicio::create([
            'id_cliente' => '8', 
            'id_servicio' => '5', 
            'id_recibo' => '4', 
        ]);
        SolicitudServicio::create([
            'id_cliente' => '8', 
            'id_servicio' => null, 
            'id_recibo' => '5', 
        ]);
        SolicitudServicio::create([
            'id_cliente' => '8', 
            'id_servicio' => null, 
            'id_recibo' => '6', 
        ]);
        SolicitudServicio::create([
            'id_cliente' => '8', 
            'id_servicio' => null, 
            'id_recibo' => '7', 
        ]);


        //para vacunas
        SolicitudServicio::create([
            'id_cliente' => '9', 
            'id_servicio' => '1', 
            'id_recibo' => '8', 
        ]);
        SolicitudServicio::create([
            'id_cliente' => '9', 
            'id_servicio' => '1', 
            'id_recibo' => '9', 
        ]);


        SolicitudServicio::create([
            'id_cliente' => '10', 
            'id_servicio' => '1', 
            'id_recibo' => '10', 
        ]);
        SolicitudServicio::create([
            'id_cliente' => '10', 
            'id_servicio' => '1', 
            'id_recibo' => '11', 
        ]);


        SolicitudServicio::create([
            'id_cliente' => '11', 
            'id_servicio' => '1', 
            'id_recibo' => '12', 
        ]);

        
        //para productos
        SolicitudServicio::create([
            'id_cliente' => '8', 
            'id_servicio' => null, 
            'id_recibo' => '13', 
        ]);
        SolicitudServicio::create([
            'id_cliente' => '9', 
            'id_servicio' => null, 
            'id_recibo' => '14', 
        ]);

        SolicitudServicio::create([
            'id_cliente' => '10', 
            'id_servicio' => null, 
            'id_recibo' => '15', 
        ]);
        SolicitudServicio::create([
            'id_cliente' => '10', 
            'id_servicio' => null, 
            'id_recibo' => '16', 
        ]);


    }
}
