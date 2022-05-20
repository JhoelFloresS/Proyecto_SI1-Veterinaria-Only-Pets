<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleVacunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into detalles_vacunas 
        (id_vacuna, id_historial, dosis, fecha_aplicacion, fecha_prox_aplicacion) 
        values (2, 3, 1, '2022-03-10', null)");//moquillo
        DB::insert("insert into detalles_vacunas 
        (id_vacuna, id_historial, dosis, fecha_aplicacion, fecha_prox_aplicacion) 
        values (4, 3, 1, '2022-03-20', null)");//rabia
        
        DB::insert("insert into detalles_vacunas 
        (id_vacuna, id_historial, dosis, fecha_aplicacion, fecha_prox_aplicacion) 
        values (4, 4, 1, '2022-03-20', null)");//rabia
        DB::insert("insert into detalles_vacunas 
        (id_vacuna, id_historial, dosis, fecha_aplicacion, fecha_prox_aplicacion) 
        values (1, 4, 1, '2022-03-30', null)");//Parvovirus

        DB::insert("insert into detalles_vacunas 
        (id_vacuna, id_historial, dosis, fecha_aplicacion, fecha_prox_aplicacion) 
        values (6, 5, 1, '2022-03-10', null)");//Leptospirosis
    }
}
