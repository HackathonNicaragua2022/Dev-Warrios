<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class PrincipalController extends Controller
{
    public function home(){
        return view("secciones.index");
    }

    public function store(Request $request){
    $registro = usuario::create([
        'nombre' = $requests['nombre'],
        'registro' = $request['password'],
    ]);

    $registro->save();

    return view("secciones.index");
    }

    public function login(){
        return view("secciones.galeria");
    }

    public function galeria(){
        return view("secciones.galeria");
    }

    public function mapa(){
        return view("secciones.mapa");
    }

    public function nosotros(){
        return view("secciones.about");
    }

    public function contacto(){
        return view("secciones.contacto");
    }
}
