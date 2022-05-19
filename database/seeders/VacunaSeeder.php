<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VacunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into vacunas (nombre) values ('V. Parvovirus')");
        DB::insert("insert into vacunas (nombre) values ('V. Moquillo')");
        DB::insert("insert into vacunas (nombre) values ('V. Polivalente')");
        DB::insert("insert into vacunas (nombre) values ('V. Rabia')");
        DB::insert("insert into vacunas (nombre) values ('V. Lyme')");
        DB::insert("insert into vacunas (nombre) values ('V. Leptospirosis')");
        DB::insert("insert into vacunas (nombre) values ('V. Leishmaniosis')");
    }
}
