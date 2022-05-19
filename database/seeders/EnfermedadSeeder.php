<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnfermedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Rabia', 'bacteria')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Sarna demodectica', 'Acaro')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Moquillo', 'virus')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Leptospirosis', 'bacteria')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Parvovirus', 'virus')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Brucelosis', 'bacteria')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Hepatitis canina', 'virus')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Borreliosis canina', 'bacteria')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Traqueobronquitis', 'virus')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Otitis', 'infeccion')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Conjuntivitis', 'inflam.')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Alergias cutaneas', 'alegia')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Gastritis', 'inflam.')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Diarrea', 'varios')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Leishmaniosis', 'Parasit.')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Mastitis', 'infeccion')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Torsion gastrica', 'dilat. g.')");
        DB::insert("insert into enfermedades (nombre, tipo) 
        values ('Cancer', 'afeccion')");
    }
}
