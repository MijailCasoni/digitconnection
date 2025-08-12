<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'contenido',
        'imagen',
        'fuentes', // si decides agregarlo
        'user_id', // para asociar el autor
    ];

    /**
     * Accesor para obtener la URL pública de la imagen.
     */
    public function getImagenUrlAttribute()
    {
        return $this->imagen ? Storage::url($this->imagen) : null;
    }

    /**
     * Relación con el autor del post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

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
}