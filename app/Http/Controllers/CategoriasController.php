<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        dd($categorias);
    }

    public function equipos()
    {
        $categoria = Categoria::with('equipos')->first();

        dd($categoria);
    }
}