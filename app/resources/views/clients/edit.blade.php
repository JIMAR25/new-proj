@extends('layouts.app')
@include('layouts.header')
@section('content')
    <div>
        <h2 id="h1">Modifier le profil</h2>
        <form method="POST" action="{{ route('clients.update') }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nom">Nom :</label>
                <input id="nom" type="text" name="nom" value="{{ $user->nom }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input id="email" type="email" name="email" value="{{ $user->email }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tel">Téléphone :</label>
                <input id="tel" type="text" name="tel" value="{{ $user->tel }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="adresse">Adresse :</label>
                <input id="adresse" type="text" name="adresse" value="{{ $user->adresse }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="code_postal">Code postal :</label>
                <input id="code_postal" type="text" name="code_postal" value="{{ $user->code_postal }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="ville">Ville :</label>
                <input id="ville" type="text" name="ville" value="{{ $user->ville }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="date_de_naissance">Date de naissance :</label>
                <input id="date_de_naissance" type="date" name="date_de_naissance" value="{{ $user->date_de_naissance }}" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
            </div>
        </form>
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
    margin-top: 25px;
    margin-bottom: 20px;
    margin-left: 250px;
    font-size: 16px; /* taille du texte */
    cursor: pointer; /* curseur de souris */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }
  </style>