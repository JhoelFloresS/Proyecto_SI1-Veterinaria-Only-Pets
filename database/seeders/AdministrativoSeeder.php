<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministrativoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into administrativos (id, profesion) 
        values (3, 'Recepcionista')");
        DB::insert("insert into administrativos (id, profesion) 
        values (4, 'Recepcionista')");
        DB::insert("insert into administrativos (id, profesion) 
        values (5, 'Recepcionista')");
    }
}
