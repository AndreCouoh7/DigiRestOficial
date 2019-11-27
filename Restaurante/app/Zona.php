<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'zonas';

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
    protected $fillable = ['nombre'];

    public function mesa()
    {
        return $this->hasMany('App\Mesa');
    }
    
}
