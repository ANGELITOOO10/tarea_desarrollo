<?php

namespace App\Http\Controllers;

use App\Models\Equipo;

class EquiposController extends Controller
{
    public function index()
    {
        $equipos = Equipo::all();

        dd($equipos);
    }

    public function categoria()
    {
        $equipo = Equipo::with('categoria')->first();

        dd($equipo);
    }

    public function detallesAlquiler()
    {
        $equipo = Equipo::with('detallesAlquiler')->first();

        dd($equipo);
    }
}