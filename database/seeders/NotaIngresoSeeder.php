<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaIngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Productos de medicina
        DB::insert("insert into notas_ingresos 
        (id_proveedor, id_producto, id_administrativo, cantidad, fecha, hora, monto_total) 
        values ( 1, 1, 3, 21, '2022-01-05', '9:00', 630)");
        DB::insert("insert into notas_ingresos 
        (id_proveedor, id_producto, id_administrativo, cantidad, fecha, hora, monto_total) 
        values ( 1, 2, 3, 20, '2022-01-05', '9:50', 800)");
        DB::insert("insert into notas_ingresos 
        (id_proveedor, id_producto, id_administrativo, cantidad, fecha, hora, monto_total) 
        values ( 1, 3, 3, 20, '2022-01-06', '10:00', 1200)");
        DB::insert("insert into notas_ingresos 
        (id_proveedor, id_producto, id_administrativo, cantidad, fecha, hora, monto_total) 
        values ( 1, 4, 3, 20, '2022-01-10', '10:15', 1800)");
        DB::insert("insert into notas_ingresos 
        (id_proveedor, id_producto, id_administrativo, cantidad, fecha, hora, monto_total) 
        values ( 1, 5, 3, 20, '2022-01-11', '9:30', 1800)");
        DB::insert("insert into notas_ingresos 
        (id_proveedor, id_producto, id_administrativo, cantidad, fecha, hora, monto_total) 
        values ( 1, 6, 3, 20, '2022-01-11', '11:00', 1200)");
        DB::insert("insert into notas_ingresos 
        (id_proveedor, id_producto, id_administrativo, cantidad, fecha, hora, monto_total) 
        values ( 1, 7, 3, 20, '2022-01-12', '9:55', 1200)");

        //Productos de ropa
        DB::insert("insert into notas_ingresos 
        (id_proveedor, id_producto, id_administrativo, cantidad, fecha, hora, monto_total) 
        values ( 2, 8, 4, 10, '2022-01-05', '16:00', 1500)");
        DB::insert("insert into notas_ingresos 
        (id_proveedor, id_producto, id_administrativo, cantidad, fecha, hora, monto_total) 
        values ( 2, 9, 4, 10, '2022-01-07', '17:00', 800)");
        DB::insert("insert into notas_ingresos 
        (id_proveedor, id_producto, id_administrativo, cantidad, fecha, hora, monto_total) 
        values ( 2, 10, 4, 10, '2022-01-07', '19:00', 800)");
        DB::insert("insert into notas_ingresos 
        (id_proveedor, id_producto, id_administrativo, cantidad, fecha, hora, monto_total) 
        values ( 2, 11, 4, 10, '2022-01-08', '18:00', 3000)");

        //Productos de accesorios
        DB::insert("insert into notas_ingresos 
        (id_proveedor, id_producto, id_administrativo, cantidad, fecha, hora, monto_total) 
        values ( 3, 12, 3, 10, '2022-01-06', '9:00', 1000)");
        DB::insert("insert into notas_ingresos 
        (id_proveedor, id_producto, id_administrativo, cantidad, fecha, hora, monto_total) 
        values ( 3, 13, 3, 10, '2022-01-06', '9:30', 4000)");
        DB::insert("insert into notas_ingresos 
        (id_proveedor, id_producto, id_administrativo, cantidad, fecha, hora, monto_total) 
        values ( 3, 14, 3, 11, '2022-01-07', '10:00', 9900)");

        //Productos de comida
        DB::insert("insert into notas_ingresos 
        (id_proveedor, id_producto, id_administrativo, cantidad, fecha, hora, monto_total) 
        values ( 4, 15, 4, 11, '2022-01-06', '10:35', 1100)");

        

    }
}
