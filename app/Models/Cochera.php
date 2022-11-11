<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cochera
 *
 * @property $id
 * @property $numero_cochera
 * @property $medida
 * @property $precio
 * @property $tipo_espacio
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Estadia[] $estadias
 * @property Estadia[] $estadias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cochera extends Model
{
    
    static $rules = [
		'numero_cochera' => 'required',
		'medida' => 'required',
		'precio' => 'required',
        'tiempo' => 'required',
		'tipo_espacio' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_cochera','medida','precio','tiempo','tipo_espacio','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estadias()
    {
        return $this->hasMany('App\Models\Estadia', 'cochera_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estadia()
    {
        return $this->hasMany('App\Models\Estadia', 'precio_id', 'id');
    }
    

}
