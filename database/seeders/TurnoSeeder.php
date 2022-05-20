<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TurnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into turnos (horario_entrada, horario_salida) 
        values ('7:00', '15:00')");
        DB::insert("insert into turnos (horario_entrada, horario_salida) 
        values ('15:00', '23:00')");
        DB::insert("insert into turnos (horario_entrada, horario_salida) 
        values ('23:00', '3:00')");
        DB::insert("insert into turnos (horario_entrada, horario_salida) 
        values ('3:00', '7:00')");
    }
}
