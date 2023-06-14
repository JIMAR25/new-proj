<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Argent;

class ArgentController extends Controller
{
    public function index()
    {
        return view('donations.argents.index');
    }
    /**
     * Affiche le formulaire de dons d'argent
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('argents.create');
    }

   /**
 * Enregistre le don d'argent dans la base de données et traite le paiement Stripe
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $request->validate([
        'nom' => 'required',
        'email' => 'required|email',
        'montant' => 'required|numeric',
        'stripeToken' => 'required'
    ]);

    $nom = $request->input('nom');
    $email = $request->input('email');
    $montant = $request->input('montant');
    $stripeToken = $request->input('stripeToken');

    Stripe::setApiKey(env('STRIPE_SECRET'));

    try {
        Charge::create([
            'amount' => $montant * 100,
            'currency' => 'eur',
            'source' => $stripeToken,
            'description' => 'Donation',
        ]);

        $argent = new Argent();
        $argent->nom = $nom;
        $argent->email = $email;
        $argent->montant = $montant;
        $argent->save();

        return redirect()->route('donations')->with('success', 'Merci pour votre don d\'argent !');
    } catch (\Stripe\Exception\CardException $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}
}
