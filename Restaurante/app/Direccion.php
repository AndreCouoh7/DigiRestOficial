<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'direcciones';

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
    protected $fillable = ['idContacto', 'cp', 'municipio', 'estado', 'localidad', 'calle', 'numeroInterior', 'numeroExterior', 'cruzamiento'];

    public function contacto()
    {
        return $this->belongsTo('App\Contacto','idContacto');
    }
    
}
