<?php

// app/Http/Controllers/ClientController.php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(auth()->id());
        $donations = Donation::where('user_id', auth()->id())->get();

        return view('clients.index', compact('user', 'donations'));
    }

    public function edit()
    {
        $user = User::findOrFail(auth()->id());

        return view('clients.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::findOrFail(auth()->id());

        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'tel' => ['nullable', 'string', 'max:255'],
            'adresse' => ['nullable', 'string', 'max:255'],
            'code_postal' => ['nullable', 'string', 'max:255'],
            'ville' => ['nullable', 'string', 'max:255'],
            'date_de_naissance' => ['nullable', 'date'],
        ]);

        $user->update($request->only([
            'nom',
            'email',
            'tel',
            'adresse',
            'code_postal',
            'ville',
            'date_de_naissance',
        ]));

        return redirect()->route('clients.index')->with('success', 'Profil mis à jour avec succès.');
    }

    public function destroy()
    {
        $user = User::findOrFail(auth()->id());
        $user->delete();

        return redirect()->route('home')->with('success', 'Compte supprimé avec succès.');
    }
}
