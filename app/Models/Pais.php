<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pais
 *
 * @property $id
 * @property $nombre
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Curso extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'descripcion' => 'required',
		'duracion' => 'required',
		'imagen' => 'required',
    ];

   

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


}