<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //public $table = "peliculas"; //Especificar cuando salgo del standard;
    //protected $primaryKey = "id_pelicula"; //Especificar cuando salgo del standard;
    //public $timestamps = false; //Especificar cuando salgo del standard;

    protected $guarded = []; // Los campos que NO se puede escribir masivamente en la db.
    //public $fillable = []; // Los campos que SI se puede escribir masivamente en la db.

    public function genre(){
      return $this->belongsTo('App\Genre', "genre_id"); //Modelo que quiero retornarn (tabla de destino) y columna de FK local
    }

    public function actors(){
      return $this->belongsToMany('App\Actor', 'actor_movie', 'movie_id', 'actor_id');
    }

}
