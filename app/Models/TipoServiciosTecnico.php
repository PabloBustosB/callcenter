<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoServiciosTecnico
 *
 * @property $id
 * @property $nombre_servicio
 * @property $descripcion
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoServiciosTecnico extends Model
{
    
    static $rules = [
		'nombre_servicio' => 'required',
		'descripcion' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_servicio','descripcion','estado'];



}
