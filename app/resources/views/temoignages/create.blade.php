@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un nouveau témoignage</h1>
    <form action="{{ route('temoignages.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image (optionnel)</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
