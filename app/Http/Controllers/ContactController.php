<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('layout.contactus');
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

        Mail::send('emails.contacto', $data, function ($message) use ($data) {
            $message->to('mijailcasoni@gmail.com')
                    ->subject('Nuevo mensaje de contacto');
        });

        return redirect()->route('contact.form')->with('success', 'Tu mensaje ha sido enviado correctamente.');
    }
}
