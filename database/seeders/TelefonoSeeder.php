<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TelefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into telefonos (numero, id_persona) values ('79099429', '1')");
        DB::insert("insert into telefonos (numero, id_persona) values ('79951446', '2')");
        DB::insert("insert into telefonos (numero, id_persona) values ('75573114', '3')");
        DB::insert("insert into telefonos (numero, id_persona) values ('74753311', '4')");
        DB::insert("insert into telefonos (numero, id_persona) values ('67410877', '5')");
        DB::insert("insert into telefonos (numero, id_persona) values ('63818201', '6')");
        DB::insert("insert into telefonos (numero, id_persona) values ('78303567', '7')");
        DB::insert("insert into telefonos (numero, id_persona) values ('74807249', '8')");
        DB::insert("insert into telefonos (numero, id_persona) values ('65975389', '9')");
        DB::insert("insert into telefonos (numero, id_persona) values ('77853813', '10')");
        DB::insert("insert into telefonos (numero, id_persona) values ('72724747', '11')");
        DB::insert("insert into telefonos (numero, id_persona) values ('61285110', '12')");
        DB::insert("insert into telefonos (numero, id_persona) values ('76456430', '13')");
        DB::insert("insert into telefonos (numero, id_persona) values ('74594535', '14')");
        DB::insert("insert into telefonos (numero, id_persona) values ('68365884', '15')");
        DB::insert("insert into telefonos (numero, id_persona) values ('77790115', '16')");
        DB::insert("insert into telefonos (numero, id_persona) values ('77295204', '17')");
        DB::insert("insert into telefonos (numero, id_persona) values ('73608535', '18')");
        DB::insert("insert into telefonos (numero, id_persona) values ('63133800', '19')");
        DB::insert("insert into telefonos (numero, id_persona) values ('75798578', '20')");
        DB::insert("insert into telefonos (numero, id_persona) values ('69648946', '1')");
        DB::insert("insert into telefonos (numero, id_persona) values ('70226743', '2')");
        DB::insert("insert into telefonos (numero, id_persona) values ('79099429', '3')");
        DB::insert("insert into telefonos (numero, id_persona) values ('74861458', '1')");
        DB::insert("insert into telefonos (numero, id_persona) values ('62200362', '10')");

    }
}
