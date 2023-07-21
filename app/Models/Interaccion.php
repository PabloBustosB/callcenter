<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaccion extends Model
{
    use HasFactory;
    protected $table = 'interaccion';

    protected $fillable = ['fecha', 'descripcion', 'id_tipo_servicio_tecnico', 'id_usuario'];

    // static $rules = [
    // 	'fecha' => 'required',
    // 	'descripcion' => 'required',
    //     'id_tipo_servicio_tecnico' => 'required',
    // 	'id_usuario' => 'required',
    // ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'id');
    }

    public function tipo_servicio()
    {
        return $this->belongsTo(TipoServiciosTecnico::class, 'id_tipo_servicio_tecnico', 'id');
    }
}
