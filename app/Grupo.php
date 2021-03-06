<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'grupo';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_grupo', 'nombre_grupo', 'descripcion_grupo'];
}
