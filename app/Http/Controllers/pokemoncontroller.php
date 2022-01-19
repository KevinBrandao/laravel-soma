<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pokemoncontroller extends Controller
{
    public function pokemon()
    {
        return view('pokemon');
    }
}
