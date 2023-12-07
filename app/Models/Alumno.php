<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $id
 * @property $curso_id
 * @property $nombre
 * @property $apellidos
 * @property $dni
 * @property $email
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso $curso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{
    
    static $rules = [
		'curso_id' => 'required',
		'nombre' => 'required',
		'apellidos' => 'required',
		'dni' => 'required',
		'email' => 'required',
		'telefono' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['curso_id','nombre','apellidos','dni','email','telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function curso()
    {
        return $this->hasOne('App\Models\Curso', 'id', 'curso_id');
    }
    

}
