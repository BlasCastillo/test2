<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compra
 *
 * @property $id
 * @property $correo
 * @property $wallet
 * @property $f_inicio
 * @property $f_fin
 * @property $card_number
 * @property $card_holder
 * @property $mes
 * @property $anio
 * @property $ccv
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compra extends Model
{
    
    static $rules = [
		'correo' => 'required',
		'wallet' => 'required',
		'f_inicio' => 'required',
		'f_fin' => 'required',
		'card_number' => 'required',
		'card_holder' => 'required',
		'mes' => 'required',
		'anio' => 'required',
		'ccv' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['correo','wallet','f_inicio','f_fin','card_number','card_holder','mes','anio','ccv'];



}
