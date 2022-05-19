<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleEnfermedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //para los de cirugia 
        DB::insert("insert into 
        detalle_enfermedades (id_enfermedad, id_historial, fecha_deteccion, inicio_tratamiento, fin_tratamiento) 
        values (18, 1, '2022-03-15', '2022-03-15', null)");
        DB::insert("insert into 
        detalle_enfermedades (id_enfermedad, id_historial, fecha_deteccion, inicio_tratamiento, fin_tratamiento) 
        values (18, 1, '2022-03-15', '2022-03-15', null)");
        DB::insert("insert into 
        detalle_enfermedades (id_enfermedad, id_historial, fecha_deteccion, inicio_tratamiento, fin_tratamiento) 
        values (18, 1, '2022-03-15', '2022-03-15', '2022-04-30')");

        DB::insert("insert into 
        detalle_enfermedades (id_enfermedad, id_historial, fecha_deteccion, inicio_tratamiento, fin_tratamiento) 
        values (13, 2, '2022-03-15', '2022-03-15', '2022-03-30')");
        
        //para los de vacunas
        DB::insert("insert into 
        detalle_enfermedades (id_enfermedad, id_historial, fecha_deteccion, inicio_tratamiento, fin_tratamiento) 
        values (3, 3, '2022-03-10', '2022-03-10', '2022-03-10')");//moquillo
        DB::insert("insert into 
        detalle_enfermedades (id_enfermedad, id_historial, fecha_deteccion, inicio_tratamiento, fin_tratamiento) 
        values (1, 3, '2022-03-20', '2022-03-20', '2022-03-20')");//rabia

        DB::insert("insert into 
        detalle_enfermedades (id_enfermedad, id_historial, fecha_deteccion, inicio_tratamiento, fin_tratamiento) 
        values (1, 4, '2022-03-20', '2022-03-20', '2022-03-20')");
        DB::insert("insert into 
        detalle_enfermedades (id_enfermedad, id_historial, fecha_deteccion, inicio_tratamiento, fin_tratamiento) 
        values (5, 4, '2022-03-30', '2022-03-30', '2022-03-30')");

        DB::insert("insert into 
        detalle_enfermedades (id_enfermedad, id_historial, fecha_deteccion, inicio_tratamiento, fin_tratamiento) 
        values (4, 5, '2022-03-10', '2022-03-10', '2022-03-10')");


    }
}
