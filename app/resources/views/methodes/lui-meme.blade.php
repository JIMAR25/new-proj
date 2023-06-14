@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Donation Information') }}</div>

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
@endsection
