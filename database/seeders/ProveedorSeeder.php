<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //proveedor de medicamentos
        DB::insert("insert into proveedores 
        (nombre, direccion, telefono, email, NIT) 
        values ('Jose Guzman', 'La Guardia', '63182674', 'joseguzman@gmail.com', '100789')");

        //proveedor de ropa
        DB::insert("insert into proveedores 
        (nombre, direccion, telefono, email, NIT) 
        values ('Juan Salazar', 'Cambodromo', '69125649', 'salazarjuan@gmail,com', '100317')");

        //proveedor de accesorios
        DB::insert("insert into proveedores 
        (nombre, direccion, telefono, email, NIT) 
        values ('Carlos Peres', 'El Bajio', '70040798', 'perescarlos@gmail.com', '100618')");

        //proveedor de comida
        DB::insert("insert into proveedores 
        (nombre, direccion, telefono, email, NIT) 
        values ('Pedro Carvajal', 'Av Radial 27', '60030412', 'carvajalpedro@gmail,com', '100401')");
        
    }
}
