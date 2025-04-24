<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Mesa;
use Carbon\Carbon;

class ReservaController extends Controller
{
    // Mostrar mesas
    public function index()
    {
        $mesas = Mesa::all();
        return view('reservas.index', compact('mesas'));
    }

    // Crear una reserva
    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'mesa_id' => 'required|exists:mesas,id',
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:15',
            'numero_comensales' => 'required|integer|min:1',
            'fecha_inicio' => 'required|date|after:now',
        ]);

        // Creación
        $reserva = new Reserva();
        $reserva->mesa_id = $request->mesa_id;
        $reserva->nombre = $request->nombre;
        $reserva->email = $request->email;
        $reserva->telefono = $request->telefono;
        $reserva->numero_comensales = $request->numero_comensales;
        $reserva->fecha_inicio = Carbon::parse($request->fecha_inicio);
        $reserva->fecha_fin = Carbon::parse($request->fecha_inicio)->addHour();

        $reserva->save();

        return redirect()->route('reservas.index')->with('success', 'Reserva realizada con éxito');
    }
}
