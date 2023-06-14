
<h1>Faire un paiement</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('donations.storeDon') }}" method="POST">
    @csrf
    <div>
        <label for="amount">Montant :</label>
        <input type="number" id="amount" name="amount" step="0.01" required>
    </div>
    <div>
        <label for="card-element">
            Carte de crédit :
        </label>
        <div id="card-element">
            <!-- Stripe Card Element -->
        </div>
    </div>
    <button type="submit">Payer</button>
</form>

<!-- Inclure le script Stripe -->
<script src="https://js.stripe.com/v3/"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Configuration de Stripe
        var stripe = Stripe('{{ env('stripe.key') }}');
        var elements = stripe.elements();
        var cardElement = elements.create('card');

        cardElement.mount('#card-element');

        // Gestion de la soumission du formulaire
        var form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Désactiver le bouton de paiement
            form.querySelector('button').disabled = true;

            // Créer un token de paiement avec Stripe
            stripe.createToken(cardElement).then(function(result) {
                if (result.error) {
                    // Gérer les erreurs de validation de la carte
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;

                    // Réactiver le bouton de paiement
                    form.querySelector('button').disabled = false;
                } else {
                    // Ajouter le token de paiement au formulaire
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', result.token.id);
                    form.appendChild(hiddenInput);

                    // Soumettre le formulaire
                    form.submit();
                }
            });
        });
    });
</script>

