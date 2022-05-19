<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CirugiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into cirugias (nombre, tipo) 
        values ('Cirugía oncológica', 'Cancer')");
        DB::insert("insert into cirugias (nombre, tipo) 
        values ('Cirugía digestiva.', 'Gastrointestinal')");
        DB::insert("insert into cirugias (nombre, tipo) 
        values ('Cirugía del aparato urinario.', 'Via urinaria')");
        //Hernia = Desplazamiento de uno de los discos intervertebrales
        DB::insert("insert into cirugias (nombre, tipo) 
        values ('Operación de hernias.', 'Huesos')"); 
    }
}
