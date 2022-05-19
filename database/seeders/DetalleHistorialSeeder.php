<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleHistorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Los de cirugia
        DB::insert("insert into detalles_historial 
        (descripcion, fecha_consulta, fecha_prox_consulta, id_historial) 
        values ('Deteccion de cancer', '2022-03-15', '2022-04-10', 1)");
        DB::insert("insert into detalles_historial 
        (descripcion, fecha_consulta, fecha_prox_consulta, id_historial) 
        values ('1er tratamiento de cancer', '2022-04-10', '2022-04-30', 1)");
        DB::insert("insert into detalles_historial 
        (descripcion, fecha_consulta, fecha_prox_consulta, id_historial) 
        values ('Ultimo Tratamiento de cancer', '2022-04-30', null, 1)");

        DB::insert("insert into detalles_historial 
        (descripcion, fecha_consulta, fecha_prox_consulta, id_historial) 
        values ('Realizacion de cirugia gastrointestinal', '2022-03-10', null, 2)");

        //Los de vacunas
        DB::insert("insert into detalles_historial 
        (descripcion, fecha_consulta, fecha_prox_consulta, id_historial) 
        values ('Deteccion y vacunacion de moquillo', '2022-03-10', null, 3)");
        DB::insert("insert into detalles_historial 
        (descripcion, fecha_consulta, fecha_prox_consulta, id_historial) 
        values ('Deteccion y vacunacion de rabia', '2022-03-20', null, 3)");

        DB::insert("insert into detalles_historial 
        (descripcion, fecha_consulta, fecha_prox_consulta, id_historial) 
        values ('Deteccion y vacunacion de rabia', '2022-03-20', null, 4)");
        DB::insert("insert into detalles_historial 
        (descripcion, fecha_consulta, fecha_prox_consulta, id_historial) 
        values ('Deteccion y vacunacion de parvovirus', '2022-03-30', null, 4)");

        DB::insert("insert into detalles_historial 
        (descripcion, fecha_consulta, fecha_prox_consulta, id_historial) 
        values ('Deteccion y vacunacion de leptospirosis', '2022-03-10', null, 5)");
        
    }
}
