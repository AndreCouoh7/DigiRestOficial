<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mesas';

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
    protected $fillable = ['idZona', 'numero'];

    public function ordenes()
    {
        return $this->hasMany('App\Orden');
    }
    public function zona()
    {
        return $this->belongsTo('App\Zona','idZona');
    }
    public function asignaciones()
    {
        return $this->hasMany('App\Asignacion');
    }
    
}
