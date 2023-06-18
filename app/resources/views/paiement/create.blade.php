@extends('layouts.app')
@include('layouts.header')
@section('content')
    <div class="sup">
         <h1>Paiement de la commande</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis veritatis assumenda repellendus ex modi, alias, aspernatur provident, perferendis ratione officiis autem eaque ipsum facere inventore facilis voluptates odit cupiditate illum?</p>
    </div>
    <form action="{{ route('paiement.storePayment') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="card-element">Informations de paiement</label>
            <div id="card-element"></div>
        </div>

        <button type="submit" class="payer">Payer</button>
    </form>
    <div class="footer">
        @include('layouts.footer')
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');

        var elements = stripe.elements();
        var cardElement = elements.create('card');

        cardElement.mount('#card-element');

        var form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(cardElement).then(function(result) {
                if (result.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    var tokenInput = document.createElement('input');
                    tokenInput.setAttribute('type', 'hidden');
                    tokenInput.setAttribute('name', 'stripeToken');
                    tokenInput.setAttribute('value', result.token.id);
                    form.appendChild(tokenInput);
                    form.submit();
                }
            });
        });
    </script>

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
    margin-left:200px;
    margin-right:200px;


}

.form-group label {
    width: 230px;
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
    margin-left:600px;
    margin-top: 45px;
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
