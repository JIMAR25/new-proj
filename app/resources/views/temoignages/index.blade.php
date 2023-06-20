@extends('layouts.app')
@include('layouts.header')

@section('content')
    <div class="contenu">
        <div class="sup">
            <h1>Témoignages</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis veritatis assumenda repellendus ex modi, alias, aspernatur provident, perferendis ratione officiis autem eaque ipsum facere inventore facilis voluptates odit cupiditate illum?</p>
            <a href="{{ route('temoignages.create') }}" class="btn btn-primary">Ajouter témoignage</a>
        </div>

        <div class="r">
            <div class="row">
                @foreach($temoignages->chunk(2) as $chunk)
                    <div class="col-md-6">
                        @foreach($chunk as $temoignage)
                            <div class="card mb-4 shadow-sm">
                                @if($temoignage->image)
                                    <img class="card-img-top" src="{{ asset('images/' . $temoignage->image) }}" alt="{{ $temoignage->nom }}">
                                @endif

                                <div class="card-body">
                                    <h5 class="card-title">{{ $temoignage->nom }}</h5>
                                    <p class="card-text">{{ $temoignage->message }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="footer">
        @include('layouts.footer')
    </div>
@endsection


<style>
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
  margin-bottom:200px;
}

.sup p {
  color: #333;
}

.sup a.btn {
  background-color:red;
  color:white;
  padding:10px 20px;
  text-decoration:none;
  font-size:18px;
  font-weight:bold;
}

.sup a.btn:hover {
  background-color: #d50000;
}

.sup h1, .sup p {

  color: #333;
  padding: 10px;
  border-radius: 5px;
  margin: 0;
}
.r {
  display: flex;
  justify-content: space-between;
   margin-left:250px;

}

.card {
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    border: 1px solid #ddd;
  margin-bottom:50px;
  text-align:center;
  margin-top:10px;
 
}

.card-img-top {
  height: 300px;

  object-fit: cover;
  width: 100%;
}

.card-img-top {
    object-fit: cover;
    height: 400px;
   
}

.card-body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    padding: 15px;
}

.card-title {
    font-size: 24px;
    color:gray;
    font-weight: bold;
    margin-bottom: 30px;
}

.card-text {
    font-size: 16px;
    margin-bottom: 20px;
    margin-left:30px;
    margin-right:30px;
}



</style>
