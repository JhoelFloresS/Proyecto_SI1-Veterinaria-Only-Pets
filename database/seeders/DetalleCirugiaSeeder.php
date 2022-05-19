<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleCirugiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1er mascota
        DB::insert("insert into 
        detalles_cirugias (id_cirugia, id_historial, fecha, hora, veterinario_encargado) 
        values (1, 1, '2022-03-15', '17:00', 'Lucia Jimines')");
        DB::insert("insert into 
        detalles_cirugias (id_cirugia, id_historial, fecha, hora, veterinario_encargado) 
        values (1, 1, '2022-04-10', '17:00', 'Lucia Jimines')");
        DB::insert("insert into 
        detalles_cirugias (id_cirugia, id_historial, fecha, hora, veterinario_encargado) 
        values (1, 1, '2022-04-30', '18:00', 'Lucia Jimines')");

        //2do mascota
        DB::insert("insert into 
        detalles_cirugias (id_cirugia, id_historial, fecha, hora, veterinario_encargado) 
        values (2, 2, '2022-03-10', '18:30', 'Lucia Jimines')");

    }
}
