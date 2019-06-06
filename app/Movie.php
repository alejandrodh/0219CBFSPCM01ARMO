<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //public $table = "peliculas"; //Especificar cuando salgo del standard;
    //public $primaryKey = "id_pelicula"; //Especificar cuando salgo del standard;
    //public $timestamps = false; //Especificar cuando salgo del standard;

    public $guarded = []; // Los campos que NO se puede escribir masivamente en la db.
    //public $fillable = []; // Los campos que SI se puede escribir masivamente en la db.
}
