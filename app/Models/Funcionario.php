<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Funcionario
 *
 * @property $id
 * @property $cargo_id
 * @property $nombre
 * @property $apellido
 * @property $ci
 * @property $fecha_nac
 * @property $telefono
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Funcionario extends Model
{
    
    static $rules = [
		'cargo_id' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'ci' => 'required',
		'fecha_nac' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
    'horario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cargo_id','nombre','apellido','ci','fecha_nac','telefono','direccion','horario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'cargo_id');
    }
    

}
