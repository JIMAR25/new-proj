@extends('layouts.app')
@include('layouts.header')
@section('content')
<div class="contenu">
    <div class="sup">
        <div>
            <img src="./pics/service3.jpg" alt="">
        </div>
        <div>
            <h1>Nos Services</h1>
            <p>Cette partie est dédiée aux professionnels qui offrent leurs services gratuitement aux personnes dans le besoin.</p>
            <div class="mb-3">
        <a href="{{ route('services.create') }}" class="btn btn-primary">Ajouter un Service</a>
        </div> 
    </div>

    </div>
    <form action="{{ route('services.index') }}" method="GET">
        <div class="mb-3">
            <label for="service-filter" class="form-label">Filtrer par service:</label>
            <select class="form-select" name="service" id="service-filter">
                <option value="">Tous les services</option>
                @foreach($services as $service)
                <option value="{{ $service->id }}" {{ request('service') == $service->id ? 'selected' : '' }}>{{ $service->nom }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Filtrer</button>
        </div>
    </form>

    <table class="table">
        {{-- <thead>
            <tr>
                <th>Nom du Service</th>
                <th>Prestataires</th>
            </tr>
        </thead> --}}
        <!-- <tbody>
            @foreach($services as $service)
           
            @if(request('service') == $service->id || !request('service'))
            <tr>
                {{-- <td>{{ $service->name }}</td> --}}
                <td class="card-grid">
                    <ul class="card">
                        @foreach($service->professionals as $provider)
                        @if($provider->image)
                            <img class="card-img-top" src="{{ asset('images/' . $provider->image) }}" alt="{{ $provider->nom }}">
                        @endif
                        <h4> je suis {{$service->nom }} - {{ $provider->nom }} - {{ $provider->age }} ans - disponible à {{ $provider->available_time }} - mon email {{$provider->email}} - Telephone: {{$provider->telephone}}</h4>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table> -->
    <table class="table">
    <tbody>
        @foreach($services as $service)
       
        @if(request('service') == $service->id || !request('service'))
        <tr>
            <td class="card-grid">
                @foreach($service->professionals as $provider)
                <ul class="card">
                    @if($provider->image)
                        <img class="card-img-top" src="{{ asset('images/' . $provider->image) }}" alt="{{ $provider->nom }}">
                    @endif
                    <h4> je suis {{$service->nom }} - {{ $provider->nom }} - {{ $provider->age }} ans - disponible à {{ $provider->available_time }} - mon email {{$provider->email}} - Telephone: {{$provider->telephone}}</h4>
                </ul>
                @endforeach
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>



</div>
<div class="footer">
  @include('layouts.footer')
</div>
@endsection

<style>
  
    /* donner une couleur de fond à la section */
.sup {
    display:flex;
margin-bottom:100px;
  padding: 20px;
}

/* Styler le texte de la section */
.sup h1 {
  font-size: 36px;
  font-family: Arial, sans-serif;
  font-weight: bold;
  color: #333333;
  margin-bottom: 20px;
}

.sup p {
  font-size: 18px;
  font-family: Arial, sans-serif;
  color: #666666;
  margin-bottom: 20px;
}

/* Styler le bouton Ajouter un service */
.sup .btn-primary {
  background-color: #ff0000;
  text-decoration:none;
  border-color: #ff0000;
  font-size: 16px;
  font-weight: bold;
  padding: 10px 20px;
  border-radius: 5px;
  color: #ffffff;
  text-transform: uppercase;
}

/* Ajouter des lignes pour organiser le code */
.sup > div {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  margin-bottom: 20px;
  height:300px;
  padding-top:80px;
  padding-left:50px;
  background-color: #f2f2f2;
}

.sup > div > div {
  flex-basis: 50%;
  margin-bottom: 20px;

}

.sup img {
  width:600px;
  height: 400px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}
form {
  display: flex;
  align-items: center;
  background-color: #f2f2f2;
  padding: 20px;
  border-radius: 10px;
  width: 800px;
  height: 60px;
  margin-left:300px;
}

form label {
    font-size:18px;
    
  margin-left: 50px;
  color: #333333;
}

form select {
  background-color: #ffffff;
  border: 2px solid #ff0000;
  color: #333333;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 5px;
}

form button {
  background-color: #333333;
  color: #ffffff;
  border: 2px solid #333333;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
}
.form-label,
.form-select {
  display: inline-block;
  margin-right: 150px;
}
.card-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* Trois colonnes avec largeur égale */
  grid-gap: 20px; /* Espacement entre les éléments */
}

.card {
  display: flex;
  flex-direction: column;
  background-color: white;
  padding: 10px;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); /* Ombre pour chaque carte */
}

.card img {
  max-width: 100%;
  height: auto;
  margin-bottom: 10px;
}

.card h4 {
  margin: 0;
  font-weight: bold;
  font-size: 16px;
  line-height: 1.2;
}

.card p {
  margin: 5px 0 0;
  font-size: 14px;
  line-height: 1.2;
}


</style>
