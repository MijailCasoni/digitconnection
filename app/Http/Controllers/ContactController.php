<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('layout.contactus'); // Cambiar según la ubicación de tu vista
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Procesar y enviar el correo
        $data = $request->only('name', 'email', 'message');

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('admin@tudominio.com') // Reemplaza con tu correo de administrador
                    ->subject('Nuevo mensaje de contacto');
        });

        return redirect()->route('contact.form')->with('success', 'Tu mensaje ha sido enviado correctamente.');
    }
}
