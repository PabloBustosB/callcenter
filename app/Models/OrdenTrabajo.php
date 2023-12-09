<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ordentrabajo
 *
 * @property $id
 * @property $fecha_visita
 * @property $problema
 * @property $resultado
 * @property $estado
 * @property $descripcion
 * @property $fecha_hora_visita_llegada
 * @property $fecha_hora_visita_salida
 * @property $id_tecnico
 * @property $id_interaccion
 * @property $created_at
 * @property $updated_at
 *
 * @property CancelacionOrdentrabajo[] $cancelacionOrdentrabajos
 * @property Interaccion $interaccion
 * @property Tecnico $tecnico
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ordentrabajo extends Model
{
    protected $table = 'ordentrabajo';
    static $rules = [
		'fecha_visita' => 'required',
		'problema' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_visita','problema','resultado','estado','descripcion','fecha_hora_visita_llegada','fecha_hora_visita_salida','id_tecnico','id_interaccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cancelacionOrdentrabajos()
    {
        return $this->hasMany('App\Models\CancelacionOrdentrabajo', 'id_orden_trabajo', 'id');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tecnico()
    {
        return $this->belongsTo(Tecnico::class, 'id_tecnico', 'id');
    }

    public function interaccion()
    {
        return $this->belongsTo(Interaccion::class, 'id_interaccion', 'id');
    }

}
