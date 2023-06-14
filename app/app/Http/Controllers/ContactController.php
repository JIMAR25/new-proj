<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Récupérer les données du formulaire
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        // Valider les données du formulaire

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Créer une nouvelle instance du modèle Contact avec les données du formulaire
        $contact = new Contact();
        $contact->name = $name;
        $contact->email = $email;
        $contact->message = $message;

        // Enregistrer le nouveau contact dans la base de données
        $contact->save();

        // Rediriger l'utilisateur vers une page de confirmation avec un message de succès
        return redirect('/contact')->with('success', 'Votre message a été envoyé avec succès.');
    }
}
