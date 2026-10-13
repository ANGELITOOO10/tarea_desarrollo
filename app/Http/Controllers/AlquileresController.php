<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;

class AlquileresController extends Controller
{
    public function index()
    {
        $alquileres = Alquiler::all();

        dd($alquileres);
    }

    public function relaciones()
    {
        $alquileres = Alquiler::with([
            'cliente',
            'empleado',
            'detallesAlquiler.equipo'
        ])->get();

        dd($alquileres);
    }
}



