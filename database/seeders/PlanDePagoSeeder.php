<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanDePagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into plan_de_pagos (nro_cuotas, monto_cuota, id_servicio) 
        values (4, 250, 5)");
        /*DB::insert("insert into plan_de_pagos (nro_cuotas, monto_cuota, id_servicio) 
        values (2, 500, 5)");*/
    }
}
