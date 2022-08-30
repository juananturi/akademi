<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $duracion
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @property CursosMateria[] $cursosMaterias
 * @property Estudiante[] $estudiantes
 * @package App
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

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','duracion','imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursosMaterias()
    {
        return $this->hasMany('App\Models\CursosMateria', 'id_curso', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudiantes()
    {
        return $this->hasMany('App\Models\Estudiante', 'id_curso', 'id');
    }
    

}
