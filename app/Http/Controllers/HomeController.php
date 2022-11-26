<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('secciones.index');
    }

    public function lugares()
    {
        return view('secciones.galeria');
    }

    public function mapa()
    {
        return view('secciones.mapa');
    }

    public function nosotros()
    {
        return view('secciones.about');
    }

    public function contacto()
    {
        return view('secciones.contacto');
    }

}
