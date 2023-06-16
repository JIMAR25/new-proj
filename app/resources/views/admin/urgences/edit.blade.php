@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier l'urgence</h1>

        <form action="{{ route('admin.urgences.update', $urgence->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre" value="{{ $urgence->titre }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $urgence->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="montant_demande">Montant demandé</label>
                <input type="number" class="form-control" id="montant_demande" name="montant_demande" value="{{ $urgence->montant_demande }}" required>
            </div>

            <div class="form-group">
                <label for="date_limite">Date limite</label>
                <input type="date" class="form-control" id="date_limite" name="date_limite" value="{{ $urgence->date_limite }}" required>
            </div>

           

            <!-- Ajoutez ici les autres champs de formulaire selon vos besoins -->

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
@endsection
