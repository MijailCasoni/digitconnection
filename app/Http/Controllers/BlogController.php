<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Muestra la lista de todas las entradas del blog.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // En un escenario real, aquí obtendrías las publicaciones desde la base de datos
        // Por ahora, usamos un array de ejemplo.
        $posts = [
            [
                'title' => __('messages.blog_posts.de-la-idea-al-negocio-digital.title'),
                'slug' => 'de-la-idea-al-negocio-digital',
                'excerpt' => __('messages.blog_posts.de-la-idea-al-negocio-digital.excerpt'),
                'date' => '14 de septiembre de 2025',
                'date' => '14 de septiembre de 2025',
                'image' => asset('img/portblog1.png')
            ],
            [
              'title' => __('messages.blog_posts.el-poder-de-la-automatizacion.title'),
                'slug' => 'el-poder-de-la-automatizacion',
                'excerpt' => __('messages.blog_posts.el-poder-de-la-automatizacion.excerpt'),
                'date' => '14 de septiembre de 2025',
                'image' => asset('img/portblog2.png')
            ],
            // Puedes agregar más posts aquí para que se muestren en el blog.
        ];
        

        return view('blog.index', compact('posts'));
    }

    /**
     * Muestra una entrada de blog específica.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        // Aquí simplemente intentamos cargar la vista correspondiente al slug.
        // Si el archivo no existe, Laravel lanzará una excepción.
        // Más adelante, podrías añadir un control para manejar esta excepción
        // y mostrar una página de error 404 si la publicación no existe.
        return view("blog.show.{$slug}");
    }
}