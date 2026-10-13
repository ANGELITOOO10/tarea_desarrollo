<?php

namespace App\Http\Controllers;

use App\Models\DetalleAlquiler;

class DetalleAlquileresController extends Controller
{
    public function index()
    {
        $detalles = DetalleAlquiler::all();

        dd($detalles);
    }

    public function relaciones()
    {
        $detalles = DetalleAlquiler::with([
            'alquiler',
            'equipo'
        ])->get();

        dd($detalles);
    }
}