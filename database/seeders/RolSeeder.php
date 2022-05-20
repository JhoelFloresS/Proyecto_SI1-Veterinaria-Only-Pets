<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into roles (nombre) values ('Administrador')");
        DB::insert("insert into roles (nombre) values ('Medico Veterinario')");
        DB::insert("insert into roles (nombre) values ('Administrativo')");
        DB::insert("insert into roles (nombre) values ('Cliente')");
    }
}
