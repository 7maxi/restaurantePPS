<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    // Mostrar todas las mesas
    public function index()
    {
        $mesas = Mesa::all();
        return view('mesas.index', compact('mesas'));
    }

    // Mostrar mesa específica
    public function show($id)
    {
        $mesa = Mesa::findOrFail($id);
        return view('mesas.show', compact('mesa'));
    }
}
