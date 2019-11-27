<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'asignaciones';

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
    protected $fillable = ['fechaAsignacion', 'idMesa', 'idMesero'];

    public function mesero()
    {
        return $this->belongsTo('App\Mesero');
    }
    public function mesa()
    {
        return $this->belongsTo('App\Mesa');
    }
    
}
