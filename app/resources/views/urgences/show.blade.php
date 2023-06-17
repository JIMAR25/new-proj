<!-- resources/views/urgences/show.blade.php -->
@include('layouts.header')
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
                <div class="sup">
                <h1>Détails de l'urgence</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis veritatis assumenda repellendus ex modi, alias, aspernatur provident, perferendis ratione officiis autem eaque ipsum facere inventore facilis voluptates odit cupiditate illum?</p>
                </div>
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
                    <div class="bu">
                        <button type="submit" class="payer">Payer</button>
                        <a href="{{ route('urgences.index', $urgence) }}" class="don">Cancel</a>
                    </div>

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
<div class="footer">
  @include('layouts.footer')
</div>
@endsection
<style>

form{
    background-color:#f0f0f0;
    border:solid 2px gray;
    padding-top:50px;
    padding-bottom:20px;
    margin-left:100px;
    margin-top:40px;
    margin-right:100px;

}
.form-group {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-bottom: 10px;
    margin-left:300px;
    margin-right:300px;


}

.form-group label {
    width: 130px;
    margin-right: 10px;
     margin-top: 15px;
    color:red;
    font-size:19px;
}

.form-group input[type="number"],
.form-group #card-element {
    flex: 1;
    padding-top:15px;
    margin-top: 15px;
}
.payer{
    padding:7px 40px;
    background-color:transparent;
    border: solid 1px red;
    color:gray;
    font-size:18px;
    margin-right:50px;
    margin-top: 25px;
}
.don{
    padding:7px 40px;
    background-color:transparent;
    border: solid 1px red;
    color:gray;
    font-size:18px;
    margin-top: 25px;
    text-decoration:none;
}
.bu{
    display:flex;
    margin-left:500px;
}
    .sup {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
  width: 80%;
  margin: 0 auto;
  border-radius: 10px;
  background-color: #f0f0f0;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  padding: 20px;
  margin-top:50px;
  text-align:center;
}

.sup p {
  color: #333;
  font-size:18px;
  width:1000px;
}
.sup h1{
  color:red;
}
.sup h1, .sup p {
  padding: 10px;
  border-radius: 5px;
  margin: 0;
}
</style>
