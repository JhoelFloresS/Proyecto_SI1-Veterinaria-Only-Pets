<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TurnoVetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into turno_vets (id_veterinario, id_turno) 
        values(2, 1)");
        DB::insert("insert into turno_vets (id_veterinario, id_turno) 
        values(6, 2)");
        DB::insert("insert into turno_vets (id_veterinario, id_turno) 
        values(7, 2)");
        DB::insert("insert into turno_vets (id_veterinario, id_turno) 
        values(8, 4)");
        DB::insert("insert into turno_vets (id_veterinario, id_turno) 
        values(14, 4)");
        DB::insert("insert into turno_vets (id_veterinario, id_turno) 
        values(15, 3)");
        DB::insert("insert into turno_vets (id_veterinario, id_turno) 
        values(14, 3)");
    }
}
