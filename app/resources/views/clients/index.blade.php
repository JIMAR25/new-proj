@include('layouts.header')
@extends('layouts.app')

@section('content')
    <div class="dashboard">
        <div class="left">
            <div class="logout-btn">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <x-primary-button type="submit" class="buttooo">
                        {{ __('Déconnexion') }}
                    </x-primary-button>
                </form>
            </div>

            <h2>Mon Profil</h2>
            <table class="info-table">
                <tbody>
                    <tr>
                        <td>Nom :</td>
                        <td>{{ $user->nom }}</td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td>Téléphone :</td>
                        <td>{{ $user->tel }}</td>
                    </tr>
                    <tr>
                        <td>Adresse :</td>
                        <td>{{ $user->adresse }}</td>
                    </tr>
                    <tr>
                        <td>Code postal :</td>
                        <td>{{ $user->code_postal }}</td>
                    </tr>
                    <tr>
                        <td>Ville :</td>
                        <td>{{ $user->ville }}</td>
                    </tr>
                    <tr>
                        <td>Date de naissance :</td>
                        <td>{{ $user->date_de_naissance }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="butty">
                <div class="bu1">
                    <a href="{{ route('clients.edit') }}" class="btn btn-primary">
                        {{ __('Modifier le profil') }}
                    </a>
                </div>

                <div class="bu2">
                    <form method="POST" action="{{ route('clients.destroy') }}" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer votre profil? Cette action est irréversible.')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="underline text-sm text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 dark:focus:ring-offset-gray-800">
                            {{ __('Supprimer le profil') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="right">
            <h2>Historique des donations</h2>
            <table class="donation-table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Montant</th>
                        <th>Type</th>
                        <th>Méthode</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($donations as $donation)
                        <tr id="tr">
                            <td id="td">{{ $donation->user->nom }}</td>
                            <td id="td">{{ $donation->montant }}</td>
                            <td id="td">{{ $donation->type }}</td>
                            <td id="td">{{ $donation->methode }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        @include('layouts.footer')
    </div>
@endsection
<style>
    .dashboard {
        display: flex;
    }

    .dashboard .left {
        flex: 1;
        padding-right: 20px;
    }
   
    .dashboard .left h2{
        margin-left:120px;
        color:gray;
        margin-top:50px;
    }
        .dashboard .right h2{
        margin-left:120px;
        color:gray;
        margin-top:60px;
    }
    .dashboard .right {
        flex: 1;
        padding-left: 20px;
    }

    .logout-btn {
        text-align: right;
        margin-bottom: 20px;
    }

    .info-table {
        width: 350px;
        border:solid 2px red;
        height:450px;
        margin-left:20px;
        padding-left:20px;
        background-color:#f0f0f0;
  
    }
     .info-table tbody tr td{
        font-size:18px;
        color:gray;
     }
    .info-table td:first-child {
        font-weight: bold;
    
    }
    .butty{
        display:flex;
        margin-top:20px;
        margin-left:20px;
     
    }
    .butty .bu1{
        background-color:red; /* couleur de fond */
     /* couleur du texte */
        border: none; /* bordure du bouton */
        border-radius: 5px; /* coins arrondis */
        padding: 10 20px; /* espacement interne */
        margin-bottom: 45px;
        font-size: 16px; /* taille du texte */
        cursor: pointer; /* curseur de souris */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
          margin-right: 20px;
 
    }
    .butty .bu1 a{
        text-decoration:none;
        color: white;
        font-size:17px;
    }
        .butty .bu2 form button{
        background-color:red; /* couleur de fond */ /* bordure du bouton */
        border-radius: 5px; /* coins arrondis */
        border:none;
        padding: 10 20px; /* espacement interne */
        margin-bottom: 20px;
        font-size: 16px; /* taille du texte */
        cursor: pointer; /* curseur de souris */
        color:white;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
 
    }

        .buttooo {
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 25px;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            margin-right:530px;
            margin-top:-50px;
            margin-bottom: 20px;
        }



    /* Styles pour .donation-table */
    .donation-table {
        width: 950px;
        border:solid 2px red;
        height:450px;
        margin-left:-300px;
        padding-left:20px;
        background-color:#f0f0f0;
    }
    .donation-table td:first-child {
        font-weight: bold;
    }
    .donation-table thead {
        background-color:white;
        font-weight: bold;
        color:gray;
        height:50px;
        font-size:18px;

    }
      

    .donation-table tbody #tr #td {
        font-size: 18px;
        color: gray;
        padding-left:100px;
        margin-top: -80px; 
    }
    .donation-table tbody #tr  {
        margin-left:100px;
        margin-top:-100px;
    }
    .donation-table #td:first-child {
        font-weight: bold;
    }


</style>
