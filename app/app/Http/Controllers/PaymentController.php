<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Stripe;

class PaymentController extends Controller
{
    /**
     * Affiche le formulaire de paiement
     */
    public function showPaymentForm()
    {
        $donation = session('donation');
    
        return view('paiement.create', compact('donation'));
    }
    

    /**
     * Traite le paiement
     */
    public function processPayment(Request $request)
    {
        // Valider les données du formulaire de paiement
        $request->validate([
            'amount' => 'required|numeric',
            'stripeToken' => 'required',
        ]);

        // Effectuer le paiement avec Stripe
        try {
            
            $token = $request->input('stripeToken');
            $amount = $request->input('amount');
            $charge = Stripe\Charge::create([
                'amount' => $amount,
                'currency' => 'usd',
                'source' => $token,
            ]);
            Stripe\Stripe::setApiKey(config('stripe.secret_key'));

          

            // Enregistrement du paiement dans la base de données
            $donation = new Donation();
            $donation->nom = $request->input('nom');
            $donation->email = $request->input('email');
            $donation->montant = $request->input('amount');
            $donation->transaction_id = $charge->id;
            $donation->charge_id = $charge->id;
            $donation->adresse = $request->input('adresse');
            $donation->code_postal = $request->input('code_postal');
            $donation->ville = $request->input('ville');
            $donation->telephone = $request->input('telephone');
            $donation->type = $request->input('type');
            $donation->methode = $request->input('methode');
            $donation->livraison = $request->input('livraison');
            $donation->prix_livraison = $request->input('prix_livraison');
            $donation->stripeToken = $request->input('stripeToken');
            $donation->save();

            // Envoyer une notification par e-mail au donateur
            // ...

            // Redirection vers une page de confirmation de paiement
            return redirect()->route('paiement.confirmation');
        } catch (Stripe\Exception\CardException $e) {
            // Gérer les erreurs de carte
            $error = $e->getError();
            $errorMessage = $error['message'];

            return back()->with('error', $errorMessage);
        } catch (Stripe\Exception\InvalidRequestException $e) {
            // Gérer les erreurs de requête invalides
            $errorMessage = $e->getMessage();

            return back()->with('error', $errorMessage);
        } catch (Stripe\Exception\ApiErrorException $e) {
            // Gérer les erreurs d'API Stripe
            $errorMessage = $e->getMessage();

            return back()->with('error', $errorMessage);
        }
    }

    /**
     * Affiche la page de confirmation de paiement
     */
    public function showConfirmation()
    {
        return view('paiement.confirmation');
    }
}
