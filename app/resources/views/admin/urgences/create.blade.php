@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Urgence</h1>

        <form action="{{ route('admin.urgences.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="montant_demande">Montant demandé</label>
                <input type="number" class="form-control" id="montant_demande" name="montant_demande" required>
            </div>

            <div class="form-group">
                <label for="date_limite">Date limite</label>
                <input type="date" class="form-control" id="date_limite" name="date_limite" required>
            </div>



            <!-- Ajoutez ici les autres champs de formulaire selon vos besoins -->

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
