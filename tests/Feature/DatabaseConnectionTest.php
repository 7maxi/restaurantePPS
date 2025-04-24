<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseConnectionTest extends TestCase
{
     /** @test */
     public function hay_conexion_a_la_bd()
     {
         try {
             DB::connection()->getPdo();
             $this->assertTrue(true);
         } catch (\Exception $e) {
             $this->fail('No se pudo conectar a la base de datos: ' . $e->getMessage());
         }
     }
}
