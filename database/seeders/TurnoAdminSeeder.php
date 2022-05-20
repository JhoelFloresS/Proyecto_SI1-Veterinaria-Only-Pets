<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TurnoAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into turno_admins (id_administrativo, id_turno) 
        values (3, 1)");
        DB::insert("insert into turno_admins (id_administrativo, id_turno) 
        values (4, 2)");
        DB::insert("insert into turno_admins (id_administrativo, id_turno) 
        values (5, 3)");

    }
}
