<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plan
 *
 * @property $id
 * @property $descripcion
 * @property $cantidad
 * @property $f_inicio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Plan extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
		'cantidad' => 'required',
		'f_inicio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','cantidad','f_inicio'];



}
