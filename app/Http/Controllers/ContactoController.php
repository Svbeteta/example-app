<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoRecibido;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactoController extends Controller
{
    public function index()
    {
        return view('mis-views.contacto');
    }

    public function send(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|email',
            'mensaje' => 'required'
        ]);

        $input = $request->input();
        $input['publicidad'] = isset($input['publicidad']); 

        Contact::create($input);

        Mail::send(new ContactoRecibido($input));

        return redirect(route('contactado'))->with('success', 'Tu mensaje ha sido enviado exitosamente.');
    }

    public function contacted()
    {
        return view('mis-views.contactado');
    }

    public function contacts()
    {
    $contactos = Contact::orderBy('created_at', 'desc')->get();  
    return view('mis-views.contactos', compact('contactos'));
    }

}
