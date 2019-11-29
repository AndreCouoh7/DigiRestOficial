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
    protected $fillable = ['iva', 'total', 'idOrden'];

    public function pago()
    {
        return $this->hasOne('App\Pago');
    }
    public function orden()
    {
        return $this->belongsTo('App\Orden','idOrden');
    }
    
}
