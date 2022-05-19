<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BitacoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into bitacoras (descripcion, id_usuario) 
                    values('Bitacora de usuario 1', '1')");
        DB::insert("insert into bitacoras (descripcion, id_usuario) 
                    values('Bitacora de usuario 2', '2')");
        DB::insert("insert into bitacoras (descripcion, id_usuario) 
                    values('Bitacora de usuario 3', '3')");
        DB::insert("insert into bitacoras (descripcion, id_usuario) 
                    values('Bitacora de usuario 4', '4')");
        DB::insert("insert into bitacoras (descripcion, id_usuario) 
                    values('Bitacora de usuario 5', '5')");
        DB::insert("insert into bitacoras (descripcion, id_usuario) 
                    values('Bitacora de usuario 6', '6')");
        DB::insert("insert into bitacoras (descripcion, id_usuario) 
                    values('Bitacora de usuario 7', '7')");
        DB::insert("insert into bitacoras (descripcion, id_usuario) 
                    values('Bitacora de usuario 8', '8')");
        DB::insert("insert into bitacoras (descripcion, id_usuario) 
                    values('Bitacora de usuario 9', '9')");
        DB::insert("insert into bitacoras (descripcion, id_usuario) 
                    values('Bitacora de usuario 9', '10')");
        DB::insert("insert into bitacoras (descripcion, id_usuario) 
                    values('Bitacora de usuario 11', '11')");
        DB::insert("insert into bitacoras (descripcion, id_usuario) 
                    values('Bitacora de usuario 12', '12')");
        DB::insert("insert into bitacoras (descripcion, id_usuario) 
                    values('Bitacora de usuario 13', '13')");
        DB::insert("insert into bitacoras (descripcion, id_usuario) 
                    values('Bitacora de usuario 14', '14')");
        DB::insert("insert into bitacoras (descripcion, id_usuario) 
                    values('Bitacora de usuario 15', '15')");
    }
}
