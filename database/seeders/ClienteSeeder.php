<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into clientes (id) values ('8')");
        DB::insert("insert into clientes (id) values ('9')");
        DB::insert("insert into clientes (id) values ('10')");
        DB::insert("insert into clientes (id) values ('11')");
        DB::insert("insert into clientes (id) values ('12')");
    }
}
