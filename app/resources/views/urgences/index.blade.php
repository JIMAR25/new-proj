@include('layouts.header')
@extends('layouts.app')
@section('content')
    <div class="co">
        <div class="partie1">
            <h1>Liste des urgences</h1>
            <p>
                Une liste d'urgence est établie pour prioriser les situations critiques et garantir une réponse rapide et efficace.
                Elle permet d'organiser les ressources et de prendre les mesures nécessaires en cas de situations d'urgence.
            </p>
        </div>
        @foreach ($urgences as $urgence)
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title">{{ $urgence->titre }}</h3>
                    <p class="card-text">{{ $urgence->description }}</p>

                    <div class="amount-bar">
                        <div class="amount-bar-fill" style="width: {{ ($urgence->montant_actuel / $urgence->montant_demande) * 100 }}%;"></div>
                    </div>
                    <div class="mont">
                    <p class="card-text">Montant demandé : <span>{{ $urgence->montant_demande }}</span></p>
                    <p class="card-text">Montant actuel :<span> {{ $urgence->montant_actuel }}</span> </p>
                    </div>

                    @if ($urgence->montant_actuel < $urgence->montant_demande)
                        <a href="{{ route('urgences.show', $urgence) }}" class="don">Faire un don</a>
                    @else
                        <p class="text-success">Cette urgence est entièrement financée.</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
<div class="footer">
  @include('layouts.footer')
</div>
@endsection
<style>
.amount-bar {
  height: 20px;
  width: 50%;
  background-color: #c2b9b9;
  margin-bottom: 10px;
  margin-top:30px;
  position: relative;
  margin-left:300px;
}

.amount-bar-fill {
  height: 100%;
  background-color: #b6301f;
  position: absolute;
  top: 0;
  left: 0;
}
.mont{
    display:flex;
    margin-left:380px;
    margin-top:20px;
    margin-bottom:25px;
}
.mont p{
    font-size:22px;
    margin-right:80px;
    color:red;
}

.mont p span{
    color:gray;
    line-height:32px;
    font-size:20px;
    height:250px;
}
.co {
  margin-top: 20px;
}
.partie1{
    text-align:center;
    margin-left:150px;
    margin-right:150px;
}
.partie1 h1{
    color:red;
    margin-bottom:30px;
}
.partie1 p{
    color:gray;
    line-height:32px;
    font-size:18px;
}

.card {
  margin-bottom: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin-left:100px;
  margin-right:100px;
  background-color:#F8F8FF;
}

.card-body {
  padding: 20px;
  text-align:center;
 
}
.card-body h3{
  color:gray;
}
.card-body p{
  font-size:17px;
}

.card-title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

.card-text {
  margin-bottom: 10px;
}

.amount-bar {
  height: 20px;
  background-color: #c2b9b9;
  margin-bottom: 10px;
  position: relative;
}

.amount-bar-fill {
  height: 100%;
  background-color: #b6301f;
  position: absolute;
  top: 0;
  left: 0;
}
.don {
  text-decoration:none;
  padding:10px 30px;
  border:1px solid red;
  color:#708090;
  margin-left:30px;
  font-size:20px;
  margin-left:30px;

}

.text-success {
  color: green;
  font-weight: bold;
}

</style>