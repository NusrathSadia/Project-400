<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtihashController extends Controller
{
    public function LanguageMovement(){

        return view('Etihash.LanguageMovement');
    }

    public function MassUprising(){

        return view('Etihash.MassUprising');
    }

    public function LiberationWar(){

        return view('Etihash.LiberationWar');
    }
}
