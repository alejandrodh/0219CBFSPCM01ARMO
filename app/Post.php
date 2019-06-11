<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //Si queremos agregar borrados lógicos en lugar de eliminar registros de la tabla.

class Post extends Model
{
    protected $guarded = [];
    //use SoftDeletes; //Para aplicar borrados lógicos.
}
