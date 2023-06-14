@include('layouts.header')
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Liste des urgences</h1>

        @foreach ($urgences as $urgence)
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title">{{ $urgence->titre }}</h3>
                    <p class="card-text">{{ $urgence->description }}</p>

                    <div class="amount-bar">
                        <div class="amount-bar-fill" style="width: {{ ($urgence->montant_actuel / $urgence->montant_demande) * 100 }}%;"></div>
                    </div>

                    <p class="card-text">Montant demandé : {{ $urgence->montant_demande }}</p>
                    <p class="card-text">Montant actuel : {{ $urgence->montant_actuel }}</p>

                    @if ($urgence->montant_actuel < $urgence->montant_demande)
                        <a href="{{ route('urgences.show', $urgence) }}" class="btn btn-primary">Faire un don</a>
                    @else
                        <p class="text-success">Cette urgence est entièrement financée.</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
<div class="footer">
  @include('layouts.footer')
</div>
@endsection
<style>
    .amount-bar {
  height: 20px;
  width: 50%;
  background-color: #c2b9b9;
  margin-bottom: 10px;
  position: relative;
}

.amount-bar-fill {
  height: 100%;
  background-color: #b6301f;
  position: absolute;
  top: 0;
  left: 0;
}

</style>