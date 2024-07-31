<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nosotrosController extends Controller
{
    public function vistaNosotros()
    {
        return view("page/nosotros");
    }

    public function getContent($option)
    {   
        $content = ''; 

        if(request()->ajax()) {
            switch ($option) {
                case 'option1':
                    $content = view('layout.nosotros.historia')->render();
                    break;
                case 'option2':
                    $content = view('layout.nosotros.misionVision')->render();
                    break;
                case 'option3':
                    $content = view('layout.nosotros.objetivos')->render();
                    break;
                case 'option4':
                    $content = view('layout.nosotros.valores')->render();
                    break;
                case 'option5':
                    $content = view('layout.nosotros.principios')->render();
                    break;
                default:
                    $content = 'Opción no encontrada';
                    break;
            }
        } else {
            switch ($option) {
                case 'option1':
                    $content = view('layout.nosotros.historia')->render();
                    break;
                case 'option2':
                    $content = view('layout.nosotros.misionVision')->render();
                    break;
                case 'option3':
                    $content = view('layout.nosotros.objetivos')->render();
                    break;
                case 'option4':
                    $content = view('layout.nosotros.valores')->render();
                    break;
                case 'option5':
                    $content = view('layout.nosotros.principios')->render();
                    break;
                default:
                    $content = 'Opción no encontrada';
                    break;
            }
        }

        return response()->json(['content' => $content]); // Asegúrate de devolver la respuesta en formato JSON
    }
}
