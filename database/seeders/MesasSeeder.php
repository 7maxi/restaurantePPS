<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MesasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mesas')->insert([
            ['numero_sillas' => 4, 'zona_id' => 1],
            ['numero_sillas' => 6, 'zona_id' => 1]
        ]);
    }
}
