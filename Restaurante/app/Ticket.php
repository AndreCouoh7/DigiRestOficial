<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tickets';

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
    protected $fillable = ['iva', 'total', 'idCuenta'];

    public function cuenta()
    {
        return $this->belongsTo('App\Cuenta');
    }
    public function pago()
    {
        return $this->hasMany('App\Pago');
    }
    
}
