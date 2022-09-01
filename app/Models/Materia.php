<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $id
 * @property $nombre
 * @property $intensidad_horaria
 * @property $created_at
 * @property $updated_at
 *
 * @property CursosMateria[] $cursosMaterias
 * @property Docente[] $docentes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'intensidad_horaria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','intensidad_horaria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursosMaterias()
    {
        return $this->hasMany('App\Models\CursosMateria', 'id_materias', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docentes()
    {
        return $this->hasMany('App\Models\Docente', 'id_materia', 'id');
    }
    

}
