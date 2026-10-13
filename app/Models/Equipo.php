<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'marca',
        'precio_dia',
        'estado',
        'categoria_id',
    ];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function detallesAlquiler(): HasMany
    {
        return $this->hasMany(DetalleAlquiler::class);
    }
}