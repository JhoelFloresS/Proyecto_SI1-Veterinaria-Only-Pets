<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistorialClinicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into historiales_clinicos (id_mascota, peso, talla) 
        values (1, 15.4, 5)");
        DB::insert("insert into historiales_clinicos (id_mascota, peso, talla) 
        values (2, 20.2, 7)");
        DB::insert("insert into historiales_clinicos (id_mascota, peso, talla) 
        values (3, 17.7, 6)");
        DB::insert("insert into historiales_clinicos (id_mascota, peso, talla) 
        values (4, 15.4, 5)");
        DB::insert("insert into historiales_clinicos (id_mascota, peso, talla) 
        values (5, 13.9, 4)");
        DB::insert("insert into historiales_clinicos (id_mascota, peso, talla) 
        values (6, 21.0, 8)");
        DB::insert("insert into historiales_clinicos (id_mascota, peso, talla) 
        values (7, 14.9, 5)");
    }
}
