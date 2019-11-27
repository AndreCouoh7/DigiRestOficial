<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pagos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cantidadPago', 'fechaPago', 'idCajero', 'idCliente'];

    public function cajero()
    {
        return $this->hasOne('App\Cajero');
    }
    public function cliente()
    {
        return $this->hasMany('App\Cliente');
    }
    
}
