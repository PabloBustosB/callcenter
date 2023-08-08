<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;
    protected $table = 'contrato';

    protected $fillable = [
        'fecha_inicio', 'fecha_fin', 'estado',
        'nombre_facturacion','nit', 'id_servicio_contratado',
        'id_usuario'
    ];

    public function servicio_contratado()
    {
        return $this->belongsTo(ServicioContratado::class, 'id_servicio_contratado', 'id');
    }

    public function Usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'id');
    }
}
