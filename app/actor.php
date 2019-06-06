<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    public function getNombreCompleto()
    {
      $nombreCompleto = $this->first_name . ", ". $this->last_name;
      return $nombreCompleto;
    }
}
