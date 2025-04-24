<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'email' => 'admin@example.com',
                'password' => Hash::make('admin123'),
                'telefono' => '123456789',
                'rol_id' => 1 // Admin
            ],
            [
                'email' => 'user@example.com',
                'password' => Hash::make('user123'),
                'telefono' => '987654321',
                'rol_id' => 2 // User
            ]
        ]);
    }
}
