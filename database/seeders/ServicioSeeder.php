<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into servicios (nombre, descripcion, precio) 
        values ('Consulta', 'consulta general', 20)");
        DB::insert("insert into servicios (nombre, descripcion, precio) 
        values ('Estetica', 'peluqueria y baño', 60)");
        DB::insert("insert into servicios (nombre, descripcion, precio) 
        values ('Medicina interna', 'medicina interna', 100)");
        DB::insert("insert into servicios (nombre, descripcion, precio) 
        values ('Farmacia', 'medicamentos', 80)");
        DB::insert("insert into servicios (nombre, descripcion, precio) 
        values ('Cirugia', 'cirugia interna', 1000)");
    }
}
