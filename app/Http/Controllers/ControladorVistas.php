<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorFormulario;

class ControladorVistas extends Controller
{
    
    public function vistaFormulario(){
        return view('formulario');
    }

    public function vistaTabla(){
        return view('tabla');
    }

    public function enviarFormulario(ValidadorFormulario $request){
        return redirect()->route('for')->with('confirmar','El formulario llego al controlador');
    }

}