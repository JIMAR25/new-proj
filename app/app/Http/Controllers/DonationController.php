<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\Donation;
use Illuminate\Support\Facades\Http;

class DonationController extends Controller
{
    /**
     * Show the donation form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donations.index');
    }

    /**
     * Show the payment form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paiement.create');
    }

    /**
     * Process the donation.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeDon(Request $request)
    {
        $donation = new Donation();
        // Retrieve form data and store it in the Donation object
        $donation->nom = $request->input('nom');
        $donation->montant = $request->input('montant');
        $donation->adresse = $request->input('adresse');
        $donation->ville = $request->input('ville');
        $donation->code_postal = $request->input('code_postal');
        $donation->email = $request->input('email');
        $donation->telephone = $request->input('telephone');
        $donation->type = $request->input('type');
        $donation->methode = $request->input('methode');
        if ($request->input('methode') == 'lui-meme') {
            $donation->prix_livraison = 0;
        } elseif ($request->input('methode') == 'organisation') {
            $donation->prix_livraison = ($request->input('livraison') === 'express') ? 10 : 5;
        }

        $donation->user()->associate(auth()->user());
        $donation->save();
                // Store the Donation object in the session
        $request->session()->put('donation', $donation);

        // Send the data to the email sending microservice
        $response = Http::post('http://localhost:3000/donation', [
            'donorName' => $donation->nom,
            'donorEmail' => $donation->email,
            'donationAmount' => $donation->montant,
        ]);

        if ($response->ok()) {
            // The email was sent successfully
        } else {
            // An error occurred while sending the email
        }

        // Redirect the user to the appropriate page based on the selected donation method
        if ($request->input('type') == 'argent') {
            return redirect()->route('paiement.create');
        } elseif ($request->input('methode') == 'virement') {
            return redirect()->route('paiement.create');
        } elseif ($request->input('methode') == 'lui-meme') {
            return view('methodes.lui-meme')->with('donation', $donation);
        } elseif ($request->input('methode') == 'organisation') {
            return view('methodes.organisation')->with('donation', $donation);
        } else {
            return redirect()->back()->with('error', 'La méthode de donation sélectionnée est invalide.');
        }
    }

    public function storeLivraison(Request $request)
    {
        $donation = $request->session()->get('donation');

        // Check if the donation session exists and if the delivery information is present
        if ($donation) {
            $donation->date_livraison = $request->input('date_livraison');

            // Add the term "express" in the database when the delivery method is "express"
            if ($request->input('livraison') === 'express') {
                $donation->livraison = 'express';
                $donation->prix_livraison = 10;
            }
            if ($request->input('livraison') === 'normal') {
                $donation->livraison = 'normal';
                $donation->prix_livraison = 5;
            }

            $donation->user()->associate(auth()->user());
            $donation->save();
            
            // Redirect the user to the payment page
            return redirect()->route('paiement.create');
        } else {
            // Handle the case where donation information is missing in the session
            return redirect()->back()->with('error', 'Les informations de donation sont manquantes.');
        }
    }

    public function storePayment(Request $request)
    {
        $donation = $request->session()->get('donation');

        // Check if the donation session exists and if the payment information is present
        if ($donation) {
            // Generate transaction and charge IDs automatically
            $transactionId = uniqid('transaction_');
            $chargeId = uniqid('charge_');

            $donation->transaction_id = $transactionId;
            $donation->charge_id = $chargeId;

            $donation->user()->associate(auth()->user());
            $donation->save();
            
            // Redirect the user to the success page or another appropriate page
            return redirect()->route('donations.index')->with('success', 'Donation effectuée avec succès.');
        } else {
            // Handle the case where donation information is missing in the session
            return redirect()->back()->with('error', 'Les informations de donation sont manquantes.');
        }
    }
}
