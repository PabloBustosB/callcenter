<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenTrabajo extends Model
{
    use HasFactory;
    protected $table = 'ordentrabajo';
    protected $fillable = [
        'fecha_visita', 'problema', 'resultado', 'estado',
        'descripcion', 'fecha_hora_visita_llegada', 'fecha_hora_visita_salida',
        'longitud','latitud','id_tecnico', 'id_interaccion'
    ];

    public function tecnico()
    {
        return $this->belongsTo(Tecnico::class, 'id_tecnico', 'id');
    }

    public function interaccion()
    {
        return $this->belongsTo(Interaccion::class, 'id_interaccion', 'id');
    }
}
