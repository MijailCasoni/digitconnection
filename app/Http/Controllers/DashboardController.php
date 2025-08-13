<?php

/*namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Servicio;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Muestra el panel principal del dashboard.
     */
    public function index()
    {
        $stats = [
            'posts' => Post::count(),
            'users' => User::count(),
           
        ];

        $posts = Post::with('user')->latest()->get();

        return view('dashboard.dashboard', compact('stats', 'posts'));
    }

    /**
     * Guarda un nuevo post en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'imagen' => 'nullable|image|max:2048',
            'fuentes' => 'nullable|string|max:255',
        ]);

        $path = $request->hasFile('imagen')
            ? $request->file('imagen')->store('posts', 'public')
            : null;

        Post::create([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
            'imagen' => $path,
            'fuentes' => $request->fuentes,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('dashboard')->with('success', 'Post creado con éxito.');
    }

    /**
     * Muestra un post específico.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('dashboard.show', compact('post'));
    }

    /**
     * Muestra el formulario para editar un post.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('dashboard.edit', compact('post'));
    }

    /**
     * Actualiza un post existente.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'imagen' => 'nullable|image|max:2048',
            'fuentes' => 'nullable|string|max:255',
        ]);

        $post = Post::findOrFail($id);

        // Si hay nueva imagen, reemplazar
        if ($request->hasFile('imagen')) {
            if ($post->imagen) {
                Storage::disk('public')->delete($post->imagen);
            }
            $post->imagen = $request->file('imagen')->store('posts', 'public');
        }

        $post->update([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
            'fuentes' => $request->fuentes,
            'imagen' => $post->imagen,
        ]);

        return redirect()->route('dashboard')->with('success', 'Post actualizado correctamente.');
    }

    /**
     * Elimina un post.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        if ($post->imagen) {
            Storage::disk('public')->delete($post->imagen);
        }

        $post->delete();

        return redirect()->route('dashboard')->with('success', 'Post eliminado correctamente.');
    }
}