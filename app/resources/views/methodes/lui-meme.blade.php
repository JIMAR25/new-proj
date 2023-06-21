@extends('layouts.app')
@include('layouts.header')
@section('content')
<div class="c">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="h1">{{ __('Donation Information') }}</div>
            <div class="card">
        
                <div class="card-body">
                    <p><strong>Nom:</strong> {{ $donation->nom }}</p>
                    <p><strong>Adresse:</strong> {{ $donation->adresse }}</p>
                    <p><strong>Ville:</strong> {{ $donation->ville }}</p>
                    <p><strong>Code postal:</strong> {{ $donation->code_postal }}</p>
                    <p><strong>Email:</strong> {{ $donation->email }}</p>
                    <p><strong>Téléphone:</strong> {{ $donation->telephone }}</p>
                    <p><strong>Méthode:</strong> {{ $donation->methode }}</p>
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
#h1{
    text-align:center;
    color:gray;
    font-size:28px;
    margin-bottom:50px;
     margin-top:50px;
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
    margin-left:300px;
    margin-right:300px;
}
.card-body p strong{
    color:red;
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
