<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Urgence;
use Stripe\Stripe;
use Stripe\Charge;

class UrgenceController extends Controller
{
    public function index()
    {
        $urgences = Urgence::all();
        return view('urgences.index', compact('urgences'));
    }

    public function show($id)
    {
        $urgence = Urgence::findOrFail($id);
        return view('urgences.show', compact('urgence'));
    }

    public function pay(Request $request, $id)
    {
        $urgence = Urgence::findOrFail($id);

        // Récupérer le montant à payer depuis la requête
        $montantPayer = $request->input('montant_payer');

        // Effectuer le paiement avec Stripe
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            Charge::create([
                'amount' => $montantPayer * 100,  // Convertir le montant en cents
                'currency' => 'USD',  // Modifier en fonction de votre devise
                'source' => $request->stripeToken,
            ]);

            // Mettre à jour le montant actuel de l'urgence
            $urgence->montant_actuel += $montantPayer;
            $urgence->save();

            return redirect()->route('urgences.index')->with('success', 'Paiement effectué avec succès.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
