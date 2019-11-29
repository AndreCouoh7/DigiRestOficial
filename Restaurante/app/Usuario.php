<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuarios';

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
    protected $fillable = ['nombre', 'apellido', 'direccion', 'telefono', 'fechaNacimiento', 'correo', 'tipo'];

    public function contactos()
    {
        return $this->hasMany('App\Contacto');
    }
    public function mesero()
    {
        return $this->belongsTo('App\Mesero');
    }
    public function cajero()
    {
        return $this->belongsTo('App\Cajero');
    }
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
    
}
