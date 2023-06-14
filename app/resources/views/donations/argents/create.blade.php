@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">{{ __('Faire un don d\'argent') }}</div>
            <div class="panel-body">
                <form method="POST" action="{{ route('paiement.storeDon') }}">
                    @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    @csrf

                    <div class="form-group row">
                        <label for="montant" class="col-md-4 col-form-label text-md-right">{{ __('Montant du don') }}</label>
    
                        <div class="col-md-6">
                            <input id="montant" type="text" class="form-control" name="montant" required autofocus>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom complet') }}</label>
    
                        <div class="col-md-6">
                            <input id="nom" type="text" class="form-control" name="nom" required>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse email') }}</label>
    
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" required>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>
    
                        <div class="col-md-6">
                            <input id="adresse" type="text" class="form-control" name="adresse" required>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="code_postal" class="col-md-4 col-form-label text-md-right">{{ __('Code postal') }}</label>
    
                        <div class="col-md-6">
                            <input id="code_postal" type="text" class="form-control" name="code_postal">
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>
    
                        <div class="col-md-6">
                            <input id="ville" type="text" class="form-control" name="ville" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telephone" class="col-md-4 col-form-label text-md-right">Téléphone:</label>
                        <div class="col-md-6">
                        <input type="tel" class="form-control" id="telephone" name="telephone" required>
                        </div>
                    </div>
                    {{-- <div class="form-group row">
                        <label for="date_de_naissance" class="col-md-4 col-form-label text-md-right">{{ __('Date de naissance') }}</label>
    
                        <div class="col-md-6">
                            <input id="date_de_naissance" type="date" class="form-control" name="date_de_naissance" required>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="type">Type de donation:</label>
                        <select class="form-control" id="type" name="type">
                            <option value="argent">Don d'argent</option>
                            <option value="vetements">Don de vêtements</option>
                            <option value="meubles">Don de meubles</option>
                            <option value="fourniturescolaire">Don de fourniture scolaire</option>
                            <option value="alimentation">Don d'alimentation</option>
                            <option value="autre">Autres</option>                
                        </select>
                    </div>
    
                 

                    <div class="form-group row mb-0">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Faire un don') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

