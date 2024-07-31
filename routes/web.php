<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\nosotrosController;
use App\Http\Controllers\pqrsdController;
use App\Http\Controllers\nuestrosProductos;
use App\Http\Controllers\AtencionCiudadano;
use App\Http\Controllers\transparencia;
use App\Http\Controllers\participa;


Route::get('/', [homeController::class, 'vistaInicio' ])->name('inicio');

Route::get('Nosotros/', [nosotrosController::class, 'vistaNosotros' ])->name('Nosotros') ;

Route::get('Nosotrosget/{option}', [nosotrosController::class, 'getContent'])->name('Nosotrosget');

Route::get('pqrsd/',[pqrsdController::class, 'vistaPqrsd'])->name('pqrsd');

Route::get('NuestrosProductos/',[nuestrosProductos::class, 'vistaNuestrosProductos'])->name('NuestrosProductos');

Route::get('AtencionCiudadano/',[atencionCiudadano::class, 'vistaAtencionCiudadano'])->name('AtencionCiudadano');

Route::get('Transparencia/',[transparencia::class, 'vistaTransparencia'])->name('Transparencia');

Route::get('Participa/',[participa::class, 'vistaParticipa'])->name('Participa');