<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Alquiler extends Model
{
    protected $table = 'alquileres';

    protected $fillable = [
        'cliente_id',
        'empleado_id',
        'fecha_solicitud',
        'fecha_inicio',
        'fecha_finalizacion',
        'estado',
    ];

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }

    public function empleado(): BelongsTo
    {
        return $this->belongsTo(Empleado::class);
    }

    public function detallesAlquiler(): HasMany
    {
        return $this->hasMany(DetalleAlquiler::class);
    }
}