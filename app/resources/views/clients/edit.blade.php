@extends('layouts.app')

@section('content')
    <div>
        <h2>Modifier le profil</h2>
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
@endsection
