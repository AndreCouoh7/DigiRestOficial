<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ordenes';

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
    protected $fillable = ['Numero', 'idMesa'];

    public function mesa()
    {
        return $this->belongsTo('App\Mesa','idMesa');
    }
    public function detalleordenes()
    {
        return $this->hasMany('App\DetalleOrden', 'idOrden');
    }
    public function ticket()
    {
        return $this->hasOne('App\Ticket');
    }
    
}
