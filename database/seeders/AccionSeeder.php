<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into acciones (accion, descripcion, fecha, hora, id_bitacora) 
        values('Registrar', 'Registrar medico veterinario', '2022-04-24', '9:21',  1)");

        DB::insert("insert into acciones (accion, descripcion, fecha, hora, id_bitacora) 
        values('Registrar', 'Registrar medico veterinario', '2022-04-24', '9:24',  1)");

        DB::insert("insert into acciones (accion, descripcion, fecha, hora, id_bitacora) 
        values('Registrar', 'Registrar medico veterinario', '2022-04-24', '9:30',  1)");

        DB::insert("insert into acciones (accion, descripcion, fecha, hora, id_bitacora) 
        values('Registrar', 'Registrar medico veterinario', '2022-04-25', '10:11',  1)");

        DB::insert("insert into acciones (accion, descripcion, fecha, hora, id_bitacora) 
        values('Registrar', 'Registrar medico veterinario', '2022-04-25', '11:01',  1)");

        DB::insert("insert into acciones (accion, descripcion, fecha, hora, id_bitacora) 
        values('Registrar', 'Registrar medico veterinario', '2022-04-25', '12:52',  1)");

        DB::insert("insert into acciones (accion, descripcion, fecha, hora, id_bitacora) 
        values('Modificar', 'Modificiar medico veterinario', '2022-04-24', '9:31',  3)");

        DB::insert("insert into acciones (accion, descripcion, fecha, hora, id_bitacora) 
        values('Modificar', 'Modificar medico veterinario', '2022-04-24', '13:52',  3)");

        DB::insert("insert into acciones (accion, descripcion, fecha, hora, id_bitacora) 
        values('Registrar', 'Registrar administrativo', '2022-04-24', '13:59',  1)");

        DB::insert("insert into acciones (accion, descripcion, fecha, hora, id_bitacora) 
        values('Registrar', 'Registrar administrativo', '2022-04-24', '14:29',  1)");

        DB::insert("insert into acciones (accion, descripcion, fecha, hora, id_bitacora) 
        values('Registrar', 'Registrar administrativo', '2022-04-24', '14:39',  1)");

        DB::insert("insert into acciones (accion, descripcion, fecha, hora, id_bitacora) 
        values('Registrar', 'Registrar cliente', '2022-04-24', '15:10',  1)");

        DB::insert("insert into acciones (accion, descripcion, fecha, hora, id_bitacora) 
        values('Registrar', 'Registrar cliente', '2022-04-24', '15:20',  1)");

        DB::insert("insert into acciones (accion, descripcion, fecha, hora, id_bitacora) 
        values('Registrar', 'Registrar cliente', '2022-04-24', '16:20',  1)");

        DB::insert("insert into acciones (accion, descripcion, fecha, hora, id_bitacora) 
        values('Registrar', 'Registrar cliente', '2022-04-24', '16:28',  1)");

        DB::insert("insert into acciones (accion, descripcion, fecha, hora, id_bitacora) 
        values('Registrar', 'Registrar cliente', '2022-04-24', '18:11',  1)");

    }
}
