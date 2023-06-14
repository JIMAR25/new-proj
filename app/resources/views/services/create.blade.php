@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Service</h1>
    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom du Service</label>
            <select class="form-select" name="nom" id="nom">
                <option value="" selected>Choisir un service</option>
                @foreach($services as $service)
                <option value="{{ $service->nom }}">{{ $service->nom }}</option>
                @endforeach
            </select>
            <p>ou</p>
            <input type="text" class="form-control" id="new_service" name="new_service">
        </div>
        <div class="mb-3">
            <label for="provider-nom" class="form-label">Nom du Prestataire</label>
            <input type="text" class="form-control" id="provider-nom" name="provider_nom" required>
        </div>
        <div class="mb-3">
            <label for="provider-age" class="form-label">Âge du Prestataire</label>
            <input type="number" class="form-control" id="provider-age" name="provider_age" required>
        </div>
        <div class="mb-3">
            <label for="provider-time" class="form-label">Disponibilité du Prestataire</label>
            <input type="datetime-local" class="form-control" id="provider-time" name="provider_time" required>
        </div>
        <div class="mb-3">
            <label for="provider-email" class="form-label">Email du Prestataire</label>
            <input type="email" class="form-control" id="provider-email" name="provider_email" required>
        </div>
        <div class="mb-3">
            <label for="provider-telephone" class="form-label">Telephone du Prestataire</label>
            <input type="tel" class="form-control" id="provider-telephone" name="provider_telephone" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image (optionnel)</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@endsection
