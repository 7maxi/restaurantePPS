<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Mesa;
use App\Models\Zona;
use App\Models\Reserva;
use Carbon\Carbon;
 
class ReservaTest extends TestCase
{
    /** @test */
    public function crea_reserva_correctamente()
    {
        $zona = Zona::create(['nombre' => 'terraza']);
        $mesa = Mesa::create(['numero_sillas' => 4, 'zona_id' => $zona->id]);

        $data = [
            'mesa_id' => $mesa->id,
            'nombre' => 'Juan Pérez',
            'email' => 'juan@example.com',
            'telefono' => '555123456',
            'numero_comensales' => 4,
            'fecha_inicio' => now()->addHour()->format('Y-m-d H:i:s'),
        ];

        $response = $this->post(route('reservas.store'), $data);

        $this->assertDatabaseHas('reservas', [
            'nombre' => 'Juan Pérez',
            'email' => 'juan@example.com',
            'telefono' => '555123456',
            'numero_comensales' => 4,
            'mesa_id' => $mesa->id,
        ]);

        $response->assertRedirect(route('reservas.index'));
        $response->assertSessionHas('success', 'Reserva realizada con éxito');
    }
}
