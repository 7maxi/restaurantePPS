<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservas')->insert([
            [
                'mesa_id' => 1,
                'nombre' => 'Juan Pérez',
                'email' => 'juan@example.com',
                'telefono' => '555123456',
                'fecha_inicio' => now(),
                'fecha_fin' => now()->addHour(),
                'numero_comensales' => 4
            ],
            [
                'mesa_id' => 2,
                'nombre' => 'María López',
                'email' => 'maria@example.com',
                'telefono' => '555987654',
                'fecha_inicio' => now()->addDay(),
                'fecha_fin' => now()->addDay()->addHour(),
                'numero_comensales' => 6
            ]
        ]);
    }
}
