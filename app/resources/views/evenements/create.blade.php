<!-- resources/views/evenements/create.blade.php -->
@include('layouts.header')
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div id="h1" class="card-header">Ajouter un Événement</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('evenements.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="title">Titre</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="content">Contenu</label>
                                <textarea name="content" id="content" class="form-control" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="photos">Image</label>
                                <input type="file" name="photos" id="photos" class="form-control-file" multiple>
                            </div>

                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
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
     margin-top:150px;
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
  input[type="file"],
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
    margin-left: 300px;
    font-size: 16px; /* taille du texte */
    cursor: pointer; /* curseur de souris */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }



</style>