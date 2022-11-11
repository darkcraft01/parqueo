<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $cliente_id
 * @property $tipo_vehiculo
 * @property $placa_vehiculo
 * @property $modelo
 * @property $marca
 * @property $color
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{
    
    static $rules = [
		'cliente_id' => 'required',
		'tipo_vehiculo' => 'required',
		'placa_vehiculo' => 'required',
		'modelo' => 'required',
		'marca' => 'required',
		'color' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente_id','tipo_vehiculo','placa_vehiculo','modelo','marca','color'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    

}
