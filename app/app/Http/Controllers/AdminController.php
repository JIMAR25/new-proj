<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Temoignage;
use App\Models\Service;
use App\Models\Urgence;
use App\Models\Donation;
use App\Models\Evenement;

// ...

class AdminController extends Controller
{
    //All
    public function index()
    {
        $donations = Donation::all();
        $evenements = Evenement::all();
        $urgences = Urgence::all();
        return view('admin.index',compact('evenements','donations','urgences'));
    }
    //Donation
    public function indexDonations()
{
    $donations = Donation::all();
    return view('admin.donations.index', compact('donations'));
}


    //eVENEMENT

    public function indexEvenements()
    {
        $evenements = Evenement::all();
        return view('admin.evenements.index', compact('evenements'));
    }
    

public function createEvenement()
{
    return view('admin.evenements.create');
}

public function storeEvenement(Request $request)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
        'photos' => 'image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $evenement = new Evenement();
    $evenement->title = $request->title;
    $evenement->content = $request->content;

    if ($request->hasFile('photos')) {
        $image = $request->file('photos');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename);
        $evenement->photos = $filename;
    }

    $evenement->save();

    return redirect()->route('admin.index')->with('success', 'Evenement created successfully.');
}

public function editEvenement($id)
{
    $evenement = Evenement::findOrFail($id);
    return view('admin.evenements.edit', compact('evenement'));
}

public function updateEvenement(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
        'photos' => 'image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $evenement = Evenement::findOrFail($id);
    $evenement->title = $request->title;
    $evenement->content = $request->content;

    if ($request->hasFile('photos')) {
        $image = $request->file('photos');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename);
        $evenement->photos = $filename;
    }

    $evenement->save();

    return redirect()->route('admin.index')->with('success', 'Evenement updated successfully.');
}

public function destroyEvenement($id)
{
    $evenement = Evenement::findOrFail($id);
    $evenement->delete();

    return redirect()->route('admin.index')->with('success', 'Evenement deleted successfully.');
}

    //Urgences
    public function createUrgences()
    {
        return view('admin.urgences.create');
    }

    public function storeUrgences(Request $request)
{
    $request->validate([
        'titre' => 'required',
        'description' => 'required',
        'montant_demande' => 'required',
        'date_limite' => 'required|date',
        
    ]);

    $urgence = new Urgence();
    $urgence->titre = $request->titre;
    $urgence->description = $request->description;
    $urgence->montant_demande = $request->montant_demande;
    $urgence->montant_actuel = 0; // Initialisez à 0
    $urgence->date_limite = $request->date_limite;
 
    // Assignez les autres attributs de l'urgence à partir de la requête

    $urgence->save();

    return redirect()->route('admin.index')->with('success', 'Urgence créée avec succès.');
}


    public function editUrgences($id)
    {
        $urgence = Urgence::findOrFail($id);
        return view('admin.urgences.edit', compact('urgence'));
    }

    public function updateUrgences(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required',
        'description' => 'required',
        'montant_demande' => 'required',
        'date_limite' => 'required|date',
            // Ajoutez ici les autres règles de validation selon vos besoins
        ]);

        $urgence = Urgence::findOrFail($id);
        $urgence->titre = $request->titre;
        $urgence->description = $request->description;
        $urgence->montant_demande = $request->montant_demande;
        $urgence->date_limite = $request->date_limite;
        // Mettez à jour les autres attributs de l'urgence à partir de la requête

        $urgence->save();

        return redirect()->route('admin.index')->with('success', 'Urgence mise à jour avec succès.');
    }

    public function destroyUrgences($id)
    {
        $urgence = Urgence::findOrFail($id);
        $urgence->delete();

        return redirect()->route('admin.index')->with('success', 'Urgence supprimée avec succès.');
    }

}