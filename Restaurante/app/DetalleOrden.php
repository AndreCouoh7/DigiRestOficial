<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleOrden extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detalle_ordenes';

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
    protected $fillable = ['idOrden', 'idProducto', 'cantidad', 'precio'];

    public function orden()
    {
        return $this->belongsTo('App\Orden');
    }
    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }
    
}
