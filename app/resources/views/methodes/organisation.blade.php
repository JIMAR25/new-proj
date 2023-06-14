@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Organisation de la livraison') }}</div>

                    <div class="card-body">
                        <form action="{{ route('donations.storeLivraison') }}" method="POST">
                            @csrf
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                            <script>
                            $(document).ready(function(){
                                $('#livraison').change(function(){
                                    if($(this).val() == 'express'){
                                        $('#div-express').show();
                                        $('#div-normal').hide();
                                    } else if ($(this).val() == 'normal'){
                                        $('#div-express').hide();
                                        $('#div-normal').show();
                                    } else {
                                        $('#div-express').hide();
                                        $('#div-normal').hide();
                                    }
                                });
                            });
                            </script>
                            
                            <select name="livraison" id="livraison">
                                <option value="">Sélectionnez une option</option>
                                <option value="express">Livraison express</option>
                                <option value="normal">Livraison normale</option>
                            </select>
                            
                            <div id="div-express" style="display:none;">
                                <p>Prix de la livraison express : 10€</p>
                                <p>Temps estimé : 24 heures</p>
                            </div>
                            
                            <div id="div-normal" style="display:none;">
                                <p>Prix de la livraison normale : 5€</p>
                                <p>Temps estimé : 48 heures</p>
                            </div>
                            

                            {{-- <div class="form-group row">
                                <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse de livraison') }}</label>

                                <div class="col-md-6">
                                    <textarea id="adresse" class="form-control @error('adresse') is-invalid @enderror" name="adresse" required></textarea>

                                    @error('adresse')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                <label for="date_livraison" class="col-md-4 col-form-label text-md-right">{{ __('Date de livraison souhaitée') }}</label>

                                <div class="col-md-6">
                                    <input id="date_livraison" type="date" class="form-control @error('date_livraison') is-invalid @enderror" name="date_livraison" required>

                                    @error('date_livraison')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enregistrer') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
