<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnregistrerController extends Controller
{
    public function enregistrer()
        {
            return view('front/enregistrer');
        }
}
