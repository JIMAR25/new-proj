@extends('layouts.app')
@include('layouts.header')
@section('content')
<div class="r">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<h1 id="h1">Faire un don d'argent</h1>
            <div class="panel-body">
                <form method="POST" action="{{ route('paiement.storeDon') }}">
                    @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    @csrf

                    <div class="form-group r">
                        <label for="montant" class="col-md-4 col-form-label text-md-right">{{ __('Montant du don') }}</label>
    
                        <div class="col-md-6">
                            <input id="montant" type="text" class="form-control" name="montant" required autofocus>
                        </div>
                    </div>
    
                    <div class="form-group r">
                        <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom complet') }}</label>
    
                        <div class="col-md-6">
                            <input id="nom" type="text" class="form-control" name="nom" required>
                        </div>
                    </div>
    
                    <div class="form-group r">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse email') }}</label>
    
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" required>
                        </div>
                    </div>
    
                    <div class="form-group r">
                        <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>
    
                        <div class="col-md-6">
                            <input id="adresse" type="text" class="form-control" name="adresse" required>
                        </div>
                    </div>
    
                    <div class="form-group r">
                        <label for="code_postal" class="col-md-4 col-form-label text-md-right">{{ __('Code postal') }}</label>
    
                        <div class="col-md-6">
                            <input id="code_postal" type="text" class="form-control" name="code_postal">
                        </div>
                    </div>
    
                    <div class="form-group r">
                        <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>
    
                        <div class="col-md-6">
                            <input id="ville" type="text" class="form-control" name="ville" required>
                        </div>
                    </div>
                    <div class="form-group r">
                        <label for="telephone" class="col-md-4 col-form-label text-md-right">Téléphone:</label>
                        <div class="col-md-6">
                        <input type="tel" class="form-control" id="telephone" name="telephone" required>
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label for="date_de_naissance" class="col-md-4 col-form-label text-md-right">{{ __('Date de naissance') }}</label>
    
                        <div class="col-md-6">
                            <input id="date_de_naissance" type="date" class="form-control" name="date_de_naissance" required>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="type">Type de donation:</label>
                        <select class="form-control" id="type" name="type">
                            <option value="argent">Don d'argent</option>
                            <option value="vetements">Don de vêtements</option>
                            <option value="meubles">Don de meubles</option>
                            <option value="fourniturescolaire">Don de fourniture scolaire</option>
                            <option value="alimentation">Don d'alimentation</option>
                            <option value="autre">Autres</option>                
                        </select>
                    </div>
    
                 

                    <div class="form-group row mb-0">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Faire un don') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
    <div class="footer">
        @include('layouts.footer')
    </div>
@endsection

<style>
#h1{
    text-align:center;
    color:gray;
    margin-bottom:50px;
     margin-top:50px;
}
/* Style pour le formulaire de réservation */
form{
    border: 1px solid #ccc; /* Ajouter une bordure de 1 pixel de largeur, solide et grise */
  padding: 20px; /* Ajouter un espace de remplissage de 20 pixels à l'intérieur de la bordure */

  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      margin-right: 350px;
    margin-left: 350px;
}


  
  .form-group {
    flex-basis: calc(25% - 20px);
    margin-right: 20px;
    margin-bottom: 20px;
 
  }
  
  .form-group:last-child {
    margin-right: 0;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
    font-size: 18px;
    color:red;
      margin-left: 15px;
  }
  #type,
  input[type="date"],
  input[type="number"],
  input[type="email"],
  input[type="text"],
  input[type="password"],
  input[type="tel"],
  #methode {
    width: 100%;
    padding: 10px;
    margin-top:10px;
     margin-bottom:10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }
 

  

  
   .butt{
    margin-right: 20px;
   }
   .btn {
    background-color:gray; /* couleur de fond */
    color: white; /* couleur du texte */
    border: none; /* bordure du bouton */
    border-radius: 5px; /* coins arrondis */
    padding: 10 20px; /* espacement interne */
    margin-top: 95px;
    margin-bottom: 20px;
    margin-left: 300px;
    font-size: 16px; /* taille du texte */
    cursor: pointer; /* curseur de souris */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }



</style>