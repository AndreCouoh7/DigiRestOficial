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
    protected $fillable = ['cantidadPago', 'fechaPago', 'idCajero', 'idCliente', 'idTicket'];

    public function cajero()
    {
        return $this->belongsTo('App\Cajero','idCajero');
    }
    public function cliente()
    {
        return $this->belongsTo('App\Cliente','idCliente');
    }
    public function ticket()
    {
        return $this->belongsTo('App\Ticket','idTicket');
    }
    
}
