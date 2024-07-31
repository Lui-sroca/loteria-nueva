<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class atencionCiudadano extends Controller
{
    public function vistaAtencionCiudadano(){
        return view('page.atencion-ciudadano');
    }
}
