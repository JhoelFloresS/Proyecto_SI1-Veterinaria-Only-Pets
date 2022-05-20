<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('1234');
        DB::insert("insert into usuarios 
        (nombre_usuario, password, enable, id_rol, id_persona) 
        values ('juan', '$password', '1', '1', '1')");

        DB::insert("insert into usuarios 
        (nombre_usuario, password, enable, id_rol, id_persona) 
        values ('maria', '$password', '1', '2', '2')");

        DB::insert("insert into usuarios 
        (nombre_usuario, password, enable, id_rol, id_persona) 
        values ('sofia', '$password', '1', '3', '3')");

        DB::insert("insert into usuarios 
        (nombre_usuario, password, enable, id_rol, id_persona) 
        values ('gonzales', '$password', '1', '3', '4')");

        DB::insert("insert into usuarios 
        (nombre_usuario, password, enable, id_rol, id_persona) 
        values ('josue', '$password', '1', '3', '5')");

        DB::insert("insert into usuarios 
        (nombre_usuario, password, enable, id_rol, id_persona) 
        values ('andresF', '$password', '1', '2', '6')");

        DB::insert("insert into usuarios 
        (nombre_usuario, password, enable, id_rol, id_persona) 
        values ('luci', '$password', '1', '2', '7')");

        DB::insert("insert into usuarios 
        (nombre_usuario, password, enable, id_rol, id_persona) 
        values ('molina', '$password', '1', '2', '8')");

        DB::insert("insert into usuarios 
        (nombre_usuario, password, enable, id_rol, id_persona) 
        values ('luis', '$password', '1', '4', '9')");

        DB::insert("insert into usuarios 
        (nombre_usuario, password, enable, id_rol, id_persona) 
        values ('enrrique', '$password', '1', '4', '10')");

        DB::insert("insert into usuarios 
        (nombre_usuario, password, enable, id_rol, id_persona) 
        values ('santiago EB', '$password', '1', '4', '11')");

        DB::insert("insert into usuarios 
        (nombre_usuario, password, enable, id_rol, id_persona) 
        values ('guzman pedraza', '$password', '1', '4', '12')");

        DB::insert("insert into usuarios 
        (nombre_usuario, password, enable, id_rol, id_persona) 
        values ('marcelo', '$password', '1', '4', '13')");

        DB::insert("insert into usuarios 
        (nombre_usuario, password, enable, id_rol, id_persona) 
        values ('felipe', '$password', '1', '2', '14')");

        DB::insert("insert into usuarios 
        (nombre_usuario, password, enable, id_rol, id_persona) 
        values ('angela', '$password', '1', '2', '15')");
    }
}
