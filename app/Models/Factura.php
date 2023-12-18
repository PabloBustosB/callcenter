<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $table = 'factura';

    protected $fillable = [
        'fecha', 'monto','id_servicio_contratado'
    ];

    public function servicio_contratado()
    {
        return $this->belongsTo(ServicioContratado::class, 'id_servicio_contratado', 'id');
    }
}
