<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contatti()
    {
        return view('contatti');
    }

    public function invia(Request $request)
    {
        // Validazione dei dati essenziali
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'oggetto' => 'required',
            'messaggio' => 'required',
            'privacy' => 'required'
        ], [
            'required' => 'Il campo :attribute è obbligatorio',
            'email' => 'Inserisci un indirizzo email valido'
        ]);

        try {
            // Preparazione dati
            $data = [
                'nome' => $request->nome,
                'email' => $request->email,
                'telefono' => $request->telefono,
                'oggetto' => $request->oggetto,
                'messaggio' => $request->messaggio
            ];

            // Invio email
            Mail::to($request->email)->send(new ContactMail($data));

            // Mostra direttamente la pagina di conferma con i dati
            return view('mail.contact-mail', ['data' => $data]);

        } catch (\Exception $e) {
            return redirect()->route('contatti')
                            ->with('error', 'Errore durante l\'invio del messaggio.')
                            ->withInput();
        }
    }
}