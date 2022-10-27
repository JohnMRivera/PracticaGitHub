<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    
    public function vistaFormulario(){
        return view('formulario');
    }

    public function vistaTabla(){
        return view('tabla');
    }

}