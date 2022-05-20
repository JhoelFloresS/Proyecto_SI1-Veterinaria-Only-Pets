<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Persona::create([
            'nombre' => "Jose", 
            'apellido_paterno' => "Torrez", 
            'apellido_materno' => "Carvajal", 
            'ci' => "13745010", 
            'direccion' => "La Guardia", 
            'email'=> "jose1394@gmail.com", 
            'fecha_de_nacimiento' => "1991-10-23", 
            'sexo' => "M",
        ]);*/
        DB::insert(
            'insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ("Juan", "Perez", "Perez", "13945614", "La Guardia", "torrez.juan@gmail.com", "1990-05-23", "M")'
        );  
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Maria', 'Salvatierra', 'Molina', '17115563', 'La Pampa De La Isla', 'maria.molina@gmail.com', '1989-12-25', 'F')"
        );       
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Sofia', 'Martines', 'Perez', '13836993', 'Los Lotes', 'Martines.sofia11@gmail.com', '1998-04-03', 'F')"
        ); 
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Carlos Luis', 'Gonzales', 'Gonzales', '12544790', 'Las Palmas', 'luisgg24@gmail.com', '1999-07-19', 'M')"
        ); 
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Josue', 'Gomez', 'Torrez', '17056651', 'El Bajio', 'gomes-josue@gmail.com', '2000-01-08', 'M')"
        ); 
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Andres', 'Fernandez', 'Sanchez', '18367486', 'Cambodromo', 'andres_andres@gmail.com', '1997-07-08', 'M')"
        ); 
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Lucia', 'Jimenes', 'Garcia', '12203665', 'Villa 1ero de Mayp', 'garcia_luci@gmail.com', '1994-04-29', 'F')"
        ); 
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Jhon', 'Molina', 'Gomez', '18530070', 'Av Radial 27', 'molinajhom@gmail.com', '2001-08-11', 'M')"
            
        );        
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Luis Alberto', 'Garcia', 'Rodrigues', '16259286', 'Av Roca y Coronado', 'luis_gp@gmail.com', '1991-09-25', 'M')"
        ); 
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Enrrique', 'Lopez', 'Sanchez', '11880015', 'Av Bush', 'lopez_enriquee@gmail.com', '1989-01-10', 'M')"
        );      
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Santiago', 'Esquivel', 'Burguoa', '10129143', 'Av Landivar', 'burguoa-esquivel@gmail.com', '2002-02-02', 'M')"
        );  
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Ricardo', 'Guzman', 'Pedraza', '17178978', 'Barrio Urbani', 'guzman.pedraza@gmail.com', '1999-09-09', 'M')"
        );  
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Marcelo', 'Mamani', 'Perez', '17030586', 'La Guardia', 'marcelo_perez24@gmail.com', '1994-04-17', 'M')"
        );  
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Felipe', 'Condo', 'Mamani', '19478422', 'Barrio 27 de Mayo', 'felize.1514@gmail.com', '1995-11-11', 'M')"
        );  
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Angela', 'Salvatierra', 'Escobar', '14879423', 'Doble Via La Guardia', 'escobar_angela@gmail.com', '1992-03-05', 'F')"
        ); 
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Pamela', 'Roque', 'Salas', '13335886', 'Av Roque y Aguilera', 'roque_pam@gmail.com', '1995-07-08', 'F')"
        ); 
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Holly', 'Smith', 'Gallardo', '13491874', 'Av Moscu', 'superholly@gmail.com', '1999-12-30', 'F')"
        ); 
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Gustavo', 'Garcia', 'Mamani', '13422874', 'Av Busch', 'gus_garcia@gmail.com', '1995-05-05', 'M')"
        ); 
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Patrick', 'Mamani', 'Condo', '11691859', 'Av Roca y Coronado', 'patrick-mc@gmail.com', '1991-12-18', 'M')"
        ); 
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Maria', 'Gallardo', 'Lopez', '13791821', 'Doble via la guardia', 'gallardo_lopezmaria@gmail.com', '1990-01-01', 'F')"
        ); 
        DB::insert(
            "insert into personas (nombre, apellido_paterno, apellido_materno, ci, direccion, email, fecha_de_nacimiento, sexo) values ('Crithian', 'Paredes', 'Paz', '1828737', 'Plan 3000', 'Crithian_Paz@gmail.com', '1990-05-22', 'M')"
        ); 
        
    }
    
    /*function fecha_aleatoria($formato = "Y-m-d", $limiteInferior = "1980-01-01", $limiteSuperior = "2004-12-30"){
        $milisegundosLimiteInferior = strtotime($limiteInferior);
        $milisegundosLimiteSuperior = strtotime($limiteSuperior);
    
        $milisegundosAleatorios = mt_rand($milisegundosLimiteInferior, $milisegundosLimiteSuperior);
    
        return date($formato, $milisegundosAleatorios);
    }*/
}
