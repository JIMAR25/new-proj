<!-- resources/views/urgences/show.blade.php -->

@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <h1>Détails de l'urgence</h1>

                <form action="{{ route('urgences.pay', $urgence->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="montant_payer">Montant à payer</label>
                        <input type="number" name="montant_payer" class="form-control" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="card-element">Carte de crédit</label>
                        <div id="card-element">
                            <!-- Element Stripe -->
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Payer</button>
                </form>


    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Créer un élément de carte Stripe
        var stripe = Stripe("{{ env('STRIPE_KEY') }}");
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');

        // Gérer la soumission du formulaire de paiement
        var form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(cardElement).then(function(result) {
                if (result.error) {
                    // Afficher les erreurs de validation du formulaire
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Ajouter le jeton (token) au formulaire et soumettre
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', result.token.id);
                    form.appendChild(hiddenInput);
                    form.submit();
                }
            });
        });
    </script>
@endsection
