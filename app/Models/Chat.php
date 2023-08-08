<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $table = 'chat';

    protected $fillable = [
        'emisor', 'mensaje', 'fecha',
        'accion','porcentaje', 'id_interaccion'
    ];

    public function interaccion()
    {
        return $this->belongsTo(Interaccion::class, 'id_interaccion', 'id');
    }
}
