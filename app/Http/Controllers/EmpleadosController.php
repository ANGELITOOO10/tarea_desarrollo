<?php

namespace App\Http\Controllers;

use App\Models\Empleado;

class EmpleadosController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();

        dd($empleados);
    }

    public function alquileres()
    {
        $empleado = Empleado::with('alquileres')->first();

        dd($empleado);
    }
}