<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorRegistroLibros;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function inicio(){
        return view('inicio');
    }

    public function Registro_Libro(){
        return view('Registro_Libro');
    }

    public function RegistrarLibro(validadorRegistroLibros $peticionValidada){

        $libro = $peticionValidada->input('txtTitulo');
        session()->flash('libroguardado', $libro);
        return to_route('rutaRegistroLibros');
        
    }

}
