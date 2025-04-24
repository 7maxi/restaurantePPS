<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Mesa;
use App\Models\Zona;

class MesaControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function muestra_las_mesas_correctamente()
    {
         $zona = Zona::create(['nombre' => 'terraza']);
         $mesa1 = Mesa::create(['numero_sillas' => 4, 'zona_id' => $zona->id]);
         $mesa2 = Mesa::create(['numero_sillas' => 2, 'zona_id' => $zona->id]);
         $response = $this->get('/reservas');
         $response->assertStatus(200);
         $response->assertSeeText('4');
         $response->assertSeeText('2');
    }
}
