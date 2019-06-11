<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function getNombreCompleto()
    {
      $nombreCompleto = $this->first_name . ", ". $this->last_name;
      return $nombreCompleto;
    }

    public function movies(){
      return $this->belongsToMany('App\Movie', 'actor_movie', 'actor_id', 'movie_id');
    }
}
