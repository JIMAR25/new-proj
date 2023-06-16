@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

@section('content')
    <div class="mt-4">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <x-primary-button type="submit">
                {{ __('Déconnexion') }}
            </x-primary-button>
        </form>
    </div>
    <div>
        <h2>Historique des donations</h2>
        <table class="table">
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
                <tr>
                    <td>{{ $donation->user->nom }}</td>
                    <td>{{ $donation->montant }}</td>
                    <td>{{ $donation->type }}</td>
                    <td>{{ $donation->methode }}</td>
                </tr>
            @endforeach
            
            </tbody>
        </table>

        <h2>Profil</h2>
        <table class="table">
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

        

        <div class="mt-4">
            <a href="{{ route('clients.edit') }}" class="btn btn-primary">
                {{ __('Modifier le profil') }}
            </a>
        </div>
        <div class="mt-4">
            <form method="POST" action="{{ route('clients.destroy') }}" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer votre profil? Cette action est irréversible.')">
                @csrf
                @method('DELETE')
                <button type="submit" class="underline text-sm text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 dark:focus:ring-offset-gray-800">
                    {{ __('Supprimer le profil') }}
                </button>
            </form>
        </div>
        
        
    </div>
@endsection
