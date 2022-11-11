<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estadia
 *
 * @property $id
 * @property $cochera_id
 * @property $vehiculo_id
 * @property $usuario_id
 * @property $precio_id
 * @property $estado
 * @property $fecha_ingreso
 * @property $hora_ingreso
 * @property $fecha_salida
 * @property $hora_salida
 * @property $created_at
 * @property $updated_at
 *
 * @property Cochera $cochera
 * @property Cochera $cochera
 * @property User $user
 * @property Vehiculo $vehiculo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estadia extends Model
{
    
    static $rules = [
        'cochera_id',
        'vehiculo_id',
        'usuario_id',
        'precio_id',
        'estado',
        'fecha_ingreso',
        'hora_ingreso',
        'fecha_salida',
        'hora_salida',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cochera_id','vehiculo_id','usuario_id','precio_id','estado','fecha_ingreso','hora_ingreso','fecha_salida','hora_salida'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cochera()
    {
        return $this->hasOne('App\Models\Cochera', 'id', 'cochera_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cocheras()
    {
        return $this->hasOne('App\Models\Cochera', 'id', 'precio_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'usuario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehiculo()
    {
        return $this->hasOne('App\Models\Vehiculo', 'id', 'vehiculo_id');
    }
    

}
