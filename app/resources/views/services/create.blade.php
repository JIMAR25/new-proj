@extends('layouts.app')
@include('layouts.header')
@section('content')
<div class="container">
    <h1 id="h1">Ajouter un Service</h1>
    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom du Service</label>
            <select class="form-select" name="nom" id="nom">
                <option value="" selected>Choisir un service</option>
                @foreach($services as $service)
                <option value="{{ $service->nom }}">{{ $service->nom }}</option>
                @endforeach
            </select>
            <label>ou</label>
            <input type="text" class="form-control" id="new_service" name="new_service">
        </div>
        <div class="mb-3">
            <label for="provider-nom" class="form-label">Nom du Prestataire</label>
            <input type="text" class="form-control" id="provider-nom" name="provider_nom" required>
        </div>
        <div class="mb-3">
            <label for="provider-age" class="form-label">Âge du Prestataire</label>
            <input type="number" class="form-control" id="provider-age" name="provider_age" required>
        </div>
        <div class="mb-3">
            <label for="provider-time" class="form-label">Disponibilité du Prestataire</label>
            <input type="datetime-local" class="form-control" id="provider-time" name="provider_time" required>
        </div>
        <div class="mb-3">
            <label for="provider-email" class="form-label">Email du Prestataire</label>
            <input type="email" class="form-control" id="provider-email" name="provider_email" required>
        </div>
        <div class="mb-3">
            <label for="provider-telephone" class="form-label">Telephone du Prestataire</label>
            <input type="tel" class="form-control" id="provider-telephone" name="provider_telephone" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image (optionnel)</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
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
  #nom,
  input[type="datetime-local"],
  input[type="number"],
  input[type="email"],
  input[type="text"],
  input[type="password"],
  input[type="tel"],
  input[type="file"],
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
    margin-left: 300px;
    font-size: 16px; /* taille du texte */
    cursor: pointer; /* curseur de souris */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }



</style>