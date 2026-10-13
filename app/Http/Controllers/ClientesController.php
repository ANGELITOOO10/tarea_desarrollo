<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();

        dd($clientes);
    }

    public function alquileres()
    {
        $cliente = Cliente::with('alquileres')->first();

        dd($cliente);
    }
}