@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Demande d'aides</h1>
        <div class="row">
            @foreach($requests as $request)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ $request->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $request->title }}</h5>
                            <p class="card-text">{{ $request->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-outline-secondary">En savoir plus</a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary">Aider</a>
                                </div>
                                <small class="text-muted">{{ $request->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
