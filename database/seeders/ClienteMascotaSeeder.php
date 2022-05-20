<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteMascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into clientes_mascotas (id_cliente, id_mascota) 
        values(8, 1)");
        DB::insert("insert into clientes_mascotas (id_cliente, id_mascota) 
        values(8, 2)");
        DB::insert("insert into clientes_mascotas (id_cliente, id_mascota) 
        values(9, 3)");
        DB::insert("insert into clientes_mascotas (id_cliente, id_mascota) 
        values(10, 4)");
        DB::insert("insert into clientes_mascotas (id_cliente, id_mascota) 
        values(11, 5)");
        DB::insert("insert into clientes_mascotas (id_cliente, id_mascota) 
        values(11, 6)");
        DB::insert("insert into clientes_mascotas (id_cliente, id_mascota) 
        values(12, 7)");
    }
}
