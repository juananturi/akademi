<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $nombres
 * @property $apellido1
 * @property $apellido2
 * @property $tipo_doc
 * @property $numero_doc
 * @property $doc_identidad
 * @property $genero
 * @property $estrato
 * @property $id_municipio_nac
 * @property $id_municipio_exp
 * @property $id_curso
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso $curso
 * @property Municipio $municipio
 * @property Municipio $municipio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'apellido1' => 'required',
		'apellido2' => 'required',
		'tipo_doc' => 'required',
		'numero_doc' => 'required',
		'doc_identidad' => 'required',
		'genero' => 'required',
		'estrato' => 'required',
		'id_municipio_nac' => 'required',
		'id_municipio_exp' => 'required',
		'id_curso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellido1','apellido2','tipo_doc','numero_doc','doc_identidad','genero','estrato','id_municipio_nac','id_municipio_exp','id_curso'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function curso()
    {
        return $this->hasOne('App\Models\Curso', 'id', 'id_curso');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id', 'id_municipio_nac','id_municipio_exp');
    }
    
}