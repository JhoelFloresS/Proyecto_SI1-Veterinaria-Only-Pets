<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('1234');
        Usuario::create([
            'nombre_usuario' => 'juan', 
            'password' => $password, 
            'enable' => '1', 
            'id_rol' => '1', 
            'id_persona' => '1', 
        ]);
        Usuario::create([
            'nombre_usuario' => 'maria', 
            'password' => $password, 
            'enable' => '1', 
            'id_rol' => '2', 
            'id_persona' => '2', 
        ]);
        Usuario::create([
            'nombre_usuario' => 'sofia', 
            'password' => $password, 
            'enable' => '1', 
            'id_rol' => '3', 
            'id_persona' => '3', 
        ]);
        Usuario::create([
            'nombre_usuario' => 'gonzales', 
            'password' => $password, 
            'enable' => '1', 
            'id_rol' => '3', 
            'id_persona' => '4', 
        ]);
        Usuario::create([
            'nombre_usuario' => 'josue', 
            'password' => $password, 
            'enable' => '1', 
            'id_rol' => '3', 
            'id_persona' => '5', 
        ]);
        Usuario::create([
            'nombre_usuario' => 'andresF', 
            'password' => $password, 
            'enable' => '1', 
            'id_rol' => '2', 
            'id_persona' => '6', 
        ]);
        Usuario::create([
            'nombre_usuario' => 'luci', 
            'password' => $password, 
            'enable' => '1', 
            'id_rol' => '2', 
            'id_persona' => '7', 
        ]);
        Usuario::create([
            'nombre_usuario' => 'molina', 
            'password' => $password, 
            'enable' => '1', 
            'id_rol' => '2', 
            'id_persona' => '8', 
        ]);
        Usuario::create([
            'nombre_usuario' => 'luis', 
            'password' => $password, 
            'enable' => '1', 
            'id_rol' => '4', 
            'id_persona' => '9', 
        ]);
        Usuario::create([
            'nombre_usuario' => 'enrique', 
            'password' => $password, 
            'enable' => '1', 
            'id_rol' => '4', 
            'id_persona' => '10', 
        ]);
        Usuario::create([
            'nombre_usuario' => 'santiago EB', 
            'password' => $password, 
            'enable' => '1', 
            'id_rol' => '4', 
            'id_persona' => '11', 
        ]);
        Usuario::create([
            'nombre_usuario' => 'guzman pedraza', 
            'password' => $password, 
            'enable' => '1', 
            'id_rol' => '4', 
            'id_persona' => '12', 
        ]);
        Usuario::create([
            'nombre_usuario' => 'marcelo', 
            'password' => $password, 
            'enable' => '1', 
            'id_rol' => '4', 
            'id_persona' => '13', 
        ]);
        Usuario::create([
            'nombre_usuario' => 'felipe', 
            'password' => $password, 
            'enable' => '1', 
            'id_rol' => '2', 
            'id_persona' => '14', 
        ]);
        Usuario::create([
            'nombre_usuario' => 'angela', 
            'password' => $password, 
            'enable' => '1', 
            'id_rol' => '2', 
            'id_persona' => '15', 
        ]);
    }
}
