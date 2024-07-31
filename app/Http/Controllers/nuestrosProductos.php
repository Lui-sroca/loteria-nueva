<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nuestrosProductos extends Controller
{
    public function vistaNuestrosProductos(){
        return view('page.productos');
    }
}
