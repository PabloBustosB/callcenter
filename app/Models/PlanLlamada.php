<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PlanLlamada
 *
 * @property $id
 * @property $nombre
 * @property $minutos
 * @property $credito
 * @property $cantidadmb
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @property CombosPromo[] $combosPromos
 * @property ServicioContratado[] $servicioContratados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PlanLlamada extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'minutos' => 'required',
		'credito' => 'required',
		'cantidadmb' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','minutos','credito','cantidadmb','precio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function combosPromos()
    {
        return $this->hasMany('App\Models\CombosPromo', 'id_plan_llamada', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicioContratados()
    {
        return $this->hasMany('App\Models\ServicioContratado', 'id_plan_llamada', 'id');
    }
    

}
