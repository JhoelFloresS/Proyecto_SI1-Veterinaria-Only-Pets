<?php

namespace Database\Seeders;

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
        DB::insert("insert into solicitud_servicios 
        (id_cliente, id_servicio, id_recibo) 
        values (8, 5, 1)");
        DB::insert("insert into solicitud_servicios 
        (id_cliente, id_servicio, id_recibo) 
        values (8, 5, 2)");
        DB::insert("insert into solicitud_servicios 
        (id_cliente, id_servicio, id_recibo) 
        values (8, 5, 3)");

        DB::insert("insert into solicitud_servicios 
        (id_cliente, id_servicio, id_recibo) 
        values (8, 5, 4)");
        DB::insert("insert into solicitud_servicios 
        (id_cliente, id_servicio, id_recibo) 
        values (8, null, 5)");
        DB::insert("insert into solicitud_servicios 
        (id_cliente, id_servicio, id_recibo) 
        values (8, null, 6)");
        DB::insert("insert into solicitud_servicios 
        (id_cliente, id_servicio, id_recibo) 
        values (8, null, 7)");

        //para vacunas
        DB::insert("insert into solicitud_servicios 
        (id_cliente, id_servicio, id_recibo) 
        values (9, 1, 8)");
        DB::insert("insert into solicitud_servicios 
        (id_cliente, id_servicio, id_recibo) 
        values (9, 1, 9)");

        DB::insert("insert into solicitud_servicios 
        (id_cliente, id_servicio, id_recibo) 
        values (10, 1, 10)");
        DB::insert("insert into solicitud_servicios 
        (id_cliente, id_servicio, id_recibo) 
        values (10, 1, 11)");

        DB::insert("insert into solicitud_servicios 
        (id_cliente, id_servicio, id_recibo) 
        values (11, 1, 12)");
        
        //para productos
        DB::insert("insert into solicitud_servicios 
        (id_cliente, id_servicio, id_recibo) 
        values (8, null, 13)");
        DB::insert("insert into solicitud_servicios 
        (id_cliente, id_servicio, id_recibo) 
        values (9, null, 14)");

        DB::insert("insert into solicitud_servicios 
        (id_cliente, id_servicio, id_recibo) 
        values (10, null, 15)");
        DB::insert("insert into solicitud_servicios 
        (id_cliente, id_servicio, id_recibo) 
        values (10, null, 16)");

    }
}
