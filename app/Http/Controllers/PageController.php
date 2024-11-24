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
        return view('layout.blog'); // Muestra la vista layout/blog.blade.php
    }


    public function servicios()
    {
        return view('layout.servicios'); // Muestra la vista layout/contact.blade.php
    }

    public function about()
    {
        return view('layout.about'); // Muestra la vista layout/contact.blade.php
    }

    public function contact()
    {
        return view('layout.contactus'); // Muestra la vista layout/contact.blade.php
    }
}
