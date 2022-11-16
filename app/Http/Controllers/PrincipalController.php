<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Usuario;

class PrincipalController extends Controller
{
    public function home(){
        return view("secciones.index");
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

    public function ingresar(){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];

        return "datos ingresados" . $nombre . " " . $email;
    }

    public function contacto(){
        return view("secciones.contacto");
    }
}
