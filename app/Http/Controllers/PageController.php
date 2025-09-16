<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Muestra la página de inicio.
     */
    public function home()
    {
        return view('layouts.inicio');
    }

    /**
     * Muestra la página sobre nosotros.
     */
    public function about()
    {
        return view('layouts.about');
    }

    /**
     * Muestra la página de servicios.
     */
    public function servicios()
    {
        $servicios = [
            [
                'titulo' => 'Desarrollo de sistemas web',
                'descripcion' => 'Creamos sistemas robustos, escalables y personalizados para automatizar procesos y mejorar tu operación digital.',
                'icono' => 'bi bi-window',
            ],
            [
                'titulo' => 'Desarrollo de páginas web',
                'descripcion' => 'Diseñamos sitios modernos, responsivos y alineados con tu branding para captar la atención de tus clientes.',
                'icono' => 'bi bi-globe',
            ],
            [
                'titulo' => 'Administración y mantención web',
                'descripcion' => 'Nos encargamos de la gestión técnica y visual de tus plataformas para que siempre estén optimizadas.',
                'icono' => 'bi bi-tools',
            ],
            [
                'titulo' => 'Alojamiento y dominio',
                'descripcion' => 'Te ayudamos a configurar tu hosting y dominio profesional, asegurando velocidad y seguridad.',
                'icono' => 'bi bi-hdd-network',
            ],
            [
                'titulo' => 'Desarrollo de plantillas',
                'descripcion' => 'Creamos plantillas personalizadas y escalables para distintos rubros, listas para implementar.',
                'icono' => 'bi bi-layout-text-window',
            ],
            [
                'titulo' => 'Branding',
                'descripcion' => 'Creamos identidades visuales únicas y memorables que conectan con tu audiencia.',
                'icono' => 'bi bi-layout-text-window',
            ],
        ];

        return view('layouts.servicios', compact('servicios'));
    }

    /**
     * Muestra la página de contacto.
     */
    public function contacto()
    {
        return view('layouts.contactus');
    }

    /**
     * Muestra la página de proyectos.
     */
    public function proyectos()
    {
        return view('layouts.proyectos');
    }

    /**
     * Muestra la página de afiliados.
     */
    public function afiliados()
    {
        return view('layouts.afiliados');
    }

    /**
     * Muestra la página de plantillas.
     */
    public function templates()
    {
        return view('layouts.templates');
    }

    /**
     * Muestra la página de política de privacidad.
     */
    public function politicaPrivacidad()
    {
        return view('layouts.politica-privacidad');
    }

    /**
     * Muestra la página de términos de servicio.
     */
    public function terminosServicio()
    {
        return view('layouts.terminos-servicio');
    }

    /**
     * Muestra la página de cookies.
     */
    public function cookies()
    {
        return view('layouts.cookies');
    }

    /**
     * Muestra la página de preguntas frecuentes.
     */
    public function faq()
    {
        return view('layouts.faq');
    }

    /**
     * Muestra la página de tecnologías.
     */
    public function tecnologias()
    {
        return view('layouts.tecnologias');
    }
    public function trabajaConNosotros()
{
    return view('layouts.workus');
}
}