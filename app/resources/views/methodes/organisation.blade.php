@extends('layouts.app')
@include('layouts.header')
@section('content')
    <div class="c">
        <div class="r justify-content-center">
            <div class="col-md-8">
                <div class="car">
                    <div id="h1">{{ __('Organisation de la livraison') }}</div>

                    <div class="car-body">
                        <form action="{{ route('donations.storeLivraison') }}" method="POST">
                            @csrf
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                            <script>
                            $(document).ready(function(){
                                $('#livraison').change(function(){
                                    if($(this).val() == 'express'){
                                        $('#div-express').show();
                                        $('#div-normal').hide();
                                    } else if ($(this).val() == 'normal'){
                                        $('#div-express').hide();
                                        $('#div-normal').show();
                                    } else {
                                        $('#div-express').hide();
                                        $('#div-normal').hide();
                                    }
                                });
                            });
                            </script>
                            
                            <select class="form-control" id="methode" name="methode">
                                <option value="">Sélectionnez une option</option>
                                <option value="express">Livraison express</option>
                                <option value="normal">Livraison normale</option>
                            </select>
                            
                            <div id="div-express" style="display:none;">
                                <p>Prix de la livraison express : 10€</p>
                                <p>Temps estimé : 24 heures</p>
                            </div>
                            
                            <div id="div-normal" style="display:none;">
                                <p>Prix de la livraison normale : 5€</p>
                                <p>Temps estimé : 48 heures</p>
                            </div>

                            <div class="form-group">
                                <label for="date_livraison" class="col-md-4 col-form-label text-md-right">{{ __('Date de livraison souhaitée') }}</label>

                                <div class="col-md-6">
                                    <input id="date_livraison" type="date" class="form-control @error('date_livraison') is-invalid @enderror" name="date_livraison" required>

                                    @error('date_livraison')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group  mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enregistrer') }}
                                    </button>
                                </div>
                            </div>
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
.c{
    margin-top:100px;
}

#h1{
    text-align:center;
    color:gray;
    font-size:28px;
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
    margin-left: 300px;
    font-size: 16px; /* taille du texte */
    cursor: pointer; /* curseur de souris */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }




</style>