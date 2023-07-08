<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Planinternet
 *
 * @property $id
 * @property $nombre
 * @property $velocidad
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Planinternet extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'velocidad' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','velocidad','precio'];



}
