@include('layouts.header')
<h1 id="h1">Faire un don de meubles</h1>
<form action="{{ route('meubles.storeDon') }}" method="POST">
    @csrf
    
    <div class="form-group">
        <label for="nom">Nom complet:</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
    </div>

    <div class="form-group">
        <label for="adresse">Adresse:</label>
        <input type="text" class="form-control" id="adresse" name="adresse" required>
    </div>

    <div class="form-group">
        <label for="ville">Ville:</label>
        <input type="text" class="form-control" id="ville" name="ville" required>
    </div>

    <div class="form-group">
        <label for="code_postal">Code postal:</label>
        <input type="text" class="form-control" id="code_postal" name="code_postal" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="telephone">Téléphone:</label>
        <input type="tel" class="form-control" id="telephone" name="telephone" required>
    </div>

    <div class="form-group">
        <label for="methode">Méthode de donation:</label>
        <select class="form-control" id="methode" name="methode" required>
            <option value="virement">Par virement</option>
            <option value="lui-meme">Occupez vous de la livraison</option>
            <option value="organisation">Nous nous occupons!</option>
        </select>
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
        
    </div>

    <button type="submit" class="btn btn-primary">Faire un don</button>
</form>

<div class="footer">
  @include('layouts.footer')
</div>

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
    margin-left: 300px;
    font-size: 16px; /* taille du texte */
    cursor: pointer; /* curseur de souris */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }



</style>
