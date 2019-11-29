<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesero extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meseros';

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

    public function asignaciones()
    {
        return $this->hasMany('App\Asignacion');
    }
    public function usuario()
    {
        return $this->belongsTo('App\Usuario','idUsuario');
    }
    
}
