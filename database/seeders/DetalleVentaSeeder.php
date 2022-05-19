<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleVentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into detalles_ventas 
        (id_recibo, id_producto, cantidad, precio_total) 
        values (13, 15, 1, 120)");

        DB::insert("insert into detalles_ventas 
        (id_recibo, id_producto, cantidad, precio_total) 
        values (14, 15, 1, 120)");

        DB::insert("insert into detalles_ventas 
        (id_recibo, id_producto, cantidad, precio_total) 
        values (15, 14, 1, 1000)");

        DB::insert("insert into detalles_ventas 
        (id_recibo, id_producto, cantidad, precio_total) 
        values (16, 1, 1, 40)");

    }
}
