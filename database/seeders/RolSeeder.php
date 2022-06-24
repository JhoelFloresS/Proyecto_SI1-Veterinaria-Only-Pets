<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'nombre' => 'Administrador', 
        ]);
        Rol::create([
            'nombre' => 'Medico Veterinario', 
        ]);
        Rol::create([
            'nombre' => 'Administrativo', 
        ]);
        Rol::create([
            'nombre' => 'Cliente', 
        ]);
    }
}
