<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'telefonos';

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
    protected $fillable = ['idContacto', 'numero'];

    public function contacto()
    {
        return $this->hasMany('App\Contacto');
    }
    
}
