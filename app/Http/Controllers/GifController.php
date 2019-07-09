<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GifController extends Controller
{
    public function random() {
        return view("gifRandom");
    }

    public function buscar() {
        return view("buscarGif");
    }
}
