<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contactos';

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

    public function telefono()
    {
        return $this->hasMany('App\Telefono');
    }
    public function direccion()
    {
        return $this->hasMany('App\Direccion');
    }
    public function usuario()
    {
        return $this->hasOne('App\Usuario');
    }
    
}
