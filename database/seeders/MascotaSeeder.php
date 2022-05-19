<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into mascotas 
        (nombre, raza, fecha_nacimiento, especie, descripcion, sexo) 
        values ('Firulais', 'Pitbull', '2021-05-14', 'mamifero', 'color cafe con blanco', 'Macho')");
        DB::insert("insert into mascotas 
        (nombre, raza, fecha_nacimiento, especie, descripcion, sexo) 
        values ('Monchito', 'Bulldog', '2020-01-22', 'mamifero', 'color negro', 'Macho')");
        DB::insert("insert into mascotas 
        (nombre, raza, fecha_nacimiento, especie, descripcion, sexo) 
        values ('Manchas', 'Boxer', '2021-02-11', 'mamifero', 'color blanco con negro', 'Macho')");
        DB::insert("insert into mascotas 
        (nombre, raza, fecha_nacimiento, especie, descripcion, sexo) 
        values ('Boby', 'Husky', '2019-12-30', 'mamifero', 'color cafe', 'Macho')");
        DB::insert("insert into mascotas 
        (nombre, raza, fecha_nacimiento, especie, descripcion, sexo) 
        values ('Luna', 'Doberman', '2019-10-17', 'mamifero', 'color blanco', 'Hembra')");
        DB::insert("insert into mascotas 
        (nombre, raza, fecha_nacimiento, especie, descripcion, sexo) 
        values ('Panquesito', 'Pitbull', '2018-10-10', 'mamifero', 'color cafe con negro', 'Hembra')");
        DB::insert("insert into mascotas 
        (nombre, raza, fecha_nacimiento, especie, descripcion, sexo) 
        values ('Bethoben', 'Mastil', '2019-04-07', 'mamifero', 'color blanco', 'Macho')");
        
    }
}
