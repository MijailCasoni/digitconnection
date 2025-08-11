<?php
namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('layout.inicio'); // Cambia a la vista que prefieras
    }

    public function blog()
    {
        return view('layout.blog');
    }


    public function servicios()
    {
        return view('layout.servicios');
    }

    public function about()
    {
        return view('layout.about');
    }

    public function contacto()
    {
        return view('layout.contactus');
    }
}
