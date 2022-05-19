<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into categorias (nombre) values ('Medicina')");
        DB::insert("insert into categorias (nombre) values ('Ropa')");
        DB::insert("insert into categorias (nombre) values ('Accesorios')");
        DB::insert("insert into categorias (nombre) values ('Comida')");
        DB::insert("insert into categorias (nombre) values ('Higiene')");
    }
}
