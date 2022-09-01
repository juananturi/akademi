<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docente
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $diploma
 * @property $edad
 * @property $fecha_contrato
 * @property $imagen
 * @property $documento
 * @property $id_materia
 * @property $created_at
 * @property $updated_at
 *
 * @property Materia $materia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docente extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'apellidos' => 'required',
		'diploma' => 'required',
		'edad' => 'required',
		'fecha_contrato' => 'required',
		'imagen' => 'required',
		'documento' => 'required',
		'id_materia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos','diploma','edad','fecha_contrato','imagen','documento','id_materia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materia()
    {
        return $this->hasOne('App\Models\Materia', 'id', 'id_materia');
    }
    

}
