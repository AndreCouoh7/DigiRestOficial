<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cajero extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cajeros';

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
    protected $fillable = ['idUsuario'];

    public function pago()
    {
        return $this->hasMany('App\Pago');
    }
    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }
    
}
