<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetalleAlquiler extends Model
{
    protected $table = 'detalle_alquileres';

    protected $fillable = [
        'alquiler_id',
        'equipo_id',
        'cantidad',
        'precio_dia',
    ];

    public function alquiler(): BelongsTo
    {
        return $this->belongsTo(Alquiler::class);
    }

    public function equipo(): BelongsTo
    {
        return $this->belongsTo(Equipo::class);
    }
}