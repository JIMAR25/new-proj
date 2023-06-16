@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des urgences</h1>

        @if (count($urgences) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Montant demandé</th>
                        <th>Montant actuel</th>
                        <th>Date limite</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($urgences as $urgence)
                        <tr>
                            <td>{{ $urgence->id }}</td>
                            <td>{{ $urgence->titre }}</td>
                            <td>{{ $urgence->description }}</td>
                            <td>{{ $urgence->montant_demande }}</td>
                            <td>{{ $urgence->montant_actuel }}</td>
                            <td>{{ $urgence->date_limite }}</td>
                            <td>
                                <a href="{{ route('admin.urgences.edit', $urgence->id) }}" class="btn btn-primary">Modifier</a>
                                <!-- Ajoutez ici d'autres actions spécifiques à l'urgence -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Aucune urgence trouvée.</p>
        @endif
    </div>
@endsection
