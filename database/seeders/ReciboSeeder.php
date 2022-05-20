<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReciboSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //recibo de cirugia  
        DB::insert("insert into recibos 
        (fecha, concepto, monto_cancelado, saldo, monto_total, id_administrativo) 
        values ('2022-03-15', 'Cirugia', 1000, 0, 1000, 4)");
        DB::insert("insert into recibos 
        (fecha, concepto, monto_cancelado, saldo, monto_total, id_administrativo) 
        values ('2022-04-10', 'Cirugia', 1000, 0, 1000, 4)");
        DB::insert("insert into recibos 
        (fecha, concepto, monto_cancelado, saldo, monto_total, id_administrativo) 
        values ('2022-04-30', 'Cirugia', 1000, 0, 1000, 4)");

        //recibos de cirugia con plan de pago
        DB::insert("insert into recibos 
        (fecha, concepto, monto_cancelado, saldo, monto_total, id_administrativo) 
        values ('2022-03-10', 'Cirugia', 250, 750, 250, 4)");
        DB::insert("insert into recibos 
        (fecha, concepto, monto_cancelado, saldo, monto_total, id_administrativo) 
        values ('2022-03-11', 'Pago de plan de pago', 250, 500, 250, 4)");
        DB::insert("insert into recibos 
        (fecha, concepto, monto_cancelado, saldo, monto_total, id_administrativo) 
        values ('2022-03-12', 'Pago de plan de pago', 250, 250, 250, 4)");
        DB::insert("insert into recibos 
        (fecha, concepto, monto_cancelado, saldo, monto_total, id_administrativo) 
        values ('2022-03-13', 'Pago de plan de pago', 250, 0, 250, 4)");

        //recibo de vacunas
        DB::insert("insert into recibos 
        (fecha, concepto, monto_cancelado, saldo, monto_total, id_administrativo) 
        values ('2022-03-10', 'Consulta general - Vacunacion', 20, 0, 20, 3)");
        DB::insert("insert into recibos 
        (fecha, concepto, monto_cancelado, saldo, monto_total, id_administrativo) 
        values ('2022-03-20', 'Consulta general - Vacunacion', 20, 0, 20, 3)");

        DB::insert("insert into recibos 
        (fecha, concepto, monto_cancelado, saldo, monto_total, id_administrativo) 
        values ('2022-03-20', 'Consulta general - Vacunacion', 20, 0, 20, 3)");
        DB::insert("insert into recibos 
        (fecha, concepto, monto_cancelado, saldo, monto_total, id_administrativo) 
        values ('2022-03-30', 'Consulta general - Vacunacion', 20, 0, 20, 5 )");

        DB::insert("insert into recibos 
        (fecha, concepto, monto_cancelado, saldo, monto_total, id_administrativo) 
        values ('2022-03-10', 'Consulta general - Vacunacion', 20, 0, 20, 3)");
        
        //recibo de productos vendidos
        DB::insert("insert into recibos 
        (fecha, concepto, monto_cancelado, saldo, monto_total, id_administrativo) 
        values ('2022-05-01', 'Compra de producto', 120, 0, 120, 3)");
        DB::insert("insert into recibos 
        (fecha, concepto, monto_cancelado, saldo, monto_total, id_administrativo) 
        values ('2022-05-01', 'Compra de producto', 120, 0, 120, 3)");

        DB::insert("insert into recibos 
        (fecha, concepto, monto_cancelado, saldo, monto_total, id_administrativo) 
        values ('2022-05-02', 'Compra de producto', 1000, 0, 1000, 4)");
        DB::insert("insert into recibos 
        (fecha, concepto, monto_cancelado, saldo, monto_total, id_administrativo) 
        values ('2022-05-04', 'Compra de producto', 40, 0, 40, 4)");
    }
}
