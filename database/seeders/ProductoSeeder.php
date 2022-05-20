<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Medicamentos
        DB::insert("insert into productos 
        (nombre, descripcion, foto, costo, precio, marca, cantidad, id_categoria) 
        values ('Vitamina C', '80mg 32 comprimidos', null, 30, 40, 'Elanco', 20, 1 )");
        DB::insert("insert into productos 
        (nombre, descripcion, foto, costo, precio, marca, cantidad, id_categoria) 
        values ('Cimalgex', '30mg 32 comprimidos', null, 40, 50, 'Bayer', 20, 1)");
        DB::insert("insert into productos 
        (nombre, descripcion, foto, costo, precio, marca, cantidad, id_categoria) 
        values ('Cimalgex', '80mg 144 comprimidos', null, 60, 70, 'Bayer', 20, 1)");
        DB::insert("insert into productos 
        (nombre, descripcion, foto, costo, precio, marca, cantidad, id_categoria) 
        values ('Firodyl', '250mg 6 comprimidos', null, 90, 100, 'Basic', 20, 1)");
        DB::insert("insert into productos 
        (nombre, descripcion, foto, costo, precio, marca, cantidad, id_categoria) 
        values ('Firodyl', '62.5mg 12 comprimidos', null, 90, 100, 'Basic', 20, 1 )");
        DB::insert("insert into productos 
        (nombre, descripcion, foto, costo, precio, marca, cantidad, id_categoria) 
        values ('Galliprant', '30 comprimidos', null, 40, 50, 'Vetnil', 20, 1)");
        DB::insert("insert into productos 
        (nombre, descripcion, foto, costo, precio, marca, cantidad, id_categoria) 
        values ('Meloxidyl', '100ml', null, 40, 50, 'Lloyd', 20, 1)");

        //Ropa
        DB::insert("insert into productos 
        (nombre, descripcion, foto, costo, precio, marca, cantidad, id_categoria) 
        values ('Abrigo', 'abrigo de algodon', null, 150, 200, 'Adidog', 10, 2 )");
        DB::insert("insert into productos 
        (nombre, descripcion, foto, costo, precio, marca, cantidad, id_categoria) 
        values ('Bufanda', 'bufanda importada', null, 80, 100, 'Petements', 10, 2)");
        DB::insert("insert into productos 
        (nombre, descripcion, foto, costo, precio, marca, cantidad, id_categoria) 
        values ('Chaleco', 'chaleco color verde', null, 80, 100, 'Harmon&Blaide', 10, 2)");
        DB::insert("insert into productos 
        (nombre, descripcion, foto, costo, precio, marca, cantidad, id_categoria) 
        values ('Impermeable', 'implermeable color amarillo', null, 300, 350, 'Adidog', 10, 2)");

        //Accesorios
        DB::insert("insert into productos 
        (nombre, descripcion, foto, costo, precio, marca, cantidad, id_categoria) 
        values ('Collar', 'collar anti pulgas', null, 100, 150, 'Petements', 10, 3)");
        DB::insert("insert into productos 
        (nombre, descripcion, foto, costo, precio, marca, cantidad, id_categoria) 
        values ('Cama', 'cama de dormir', null, 400, 450, 'Harmon&Blaide', 10, 3)");
        DB::insert("insert into productos 
        (nombre, descripcion, foto, costo, precio, marca, cantidad, id_categoria) 
        values ('Dispensador', 'dispensador de comida', null, 900, 1000, 'Harmon&Blaine', 10, 3)");

        //Comida
        DB::insert("insert into productos 
        (nombre, descripcion, foto, costo, precio, marca, cantidad, id_categoria) 
        values ('Croqueta', 'comida para perros', null, 100, 120, 'Petements', 10, 4)");
        
    }
}
