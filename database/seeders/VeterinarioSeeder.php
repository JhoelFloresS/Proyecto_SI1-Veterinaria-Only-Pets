<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VeterinarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into veterinarios (id, profesion, id_servicio) 
        values (2, 'Medico general', 1)");
        DB::insert("insert into veterinarios (id, profesion, id_servicio) 
        values (6, 'Medico general', 1)");
        DB::insert("insert into veterinarios (id, profesion, id_servicio) 
        values (7, 'Medico de cirugia', 5)");
        DB::insert("insert into veterinarios (id, profesion, id_servicio) 
        values (8, 'Medico de farmacia', 4)");
        DB::insert("insert into veterinarios (id, profesion, id_servicio) 
        values (14, 'Medico interno', 3)");
        DB::insert("insert into veterinarios (id, profesion, id_servicio) 
        values (15, 'Estetica', 2)");
    }
}
