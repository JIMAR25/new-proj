@extends('layouts.admin')
@section('content')
<div class="mt-4" style="text-align: right;">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <x-primary-button type="submit" class="btn btn-danger">
            {{ __('Déconnexion') }}
        </x-primary-button>
    </form>
</div>
<br>

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        {{ session('success') }}
    </div>
@endif

<style>
    .bg-green-100 {
    background-color: #f0fff4;
}

.border-green-400 {
    border-color: #124e05;
}

.text-green-700 {
    color: #276749;
}

</style>
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card-header">Tableau de bord Admin</div>
                <h1>Liste des clients</h1>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Adresse</th>
                                <th>Code postal</th>
                                <th>Ville</th>
                                <th>Date de naissance</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                            <tr>
                                <td>{{ $client->nom }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->tel }}</td>
                                <td>{{ $client->adresse }}</td>
                                <td>{{ $client->code_postal }}</td>
                                <td>{{ $client->ville }}</td>
                                <td>{{ $client->date_de_naissance }}</td>
                                <td>
                                    <form action="{{ route('admin.clients.destroy', $client->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                <h1>Evenements</h1>

                <a href="{{ route('admin.evenements.create') }}" class="btn btn-primary">Create New Evenement</a>
            
                {{-- @if (count($evenements) > 0) --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Photos</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($evenements as $evenement)
                                <tr>
                                    <td>{{ $evenement->id }}</td>
                                    <td>{{ $evenement->title }}</td>
                                    <td>{{ $evenement->content }}</td>
                                    <td>
                                        @if ($evenement->photos)
                                            <img src="{{ asset('images/' . $evenement->photos) }}" alt="Evenement Photo" width="100">
                                        @else
                                            No Photo
                                        @endif
                                    </td>
                                    <td>
                                        
                                        <a href="{{ route('admin.evenements.edit', $evenement->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('admin.evenements.destroy', $evenement->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            
                    {{-- {{ $evenements->links() }} <!-- Pagination links --> --}}
                {{-- @else
                    <p>No evenements found.</p>
                @endif --}}
                <h1>Donations</h1>

                @if (count($donations) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Type</th>
                                <th>Method</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donations as $donation)
                                <tr>
                                    <td>{{ $donation->id }}</td>
                                    <td>{{ $donation->nom }}</td>
                                    <td>{{ $donation->montant }}</td>
                                    <td>{{ $donation->adresse }}</td>
                                    <td>{{ $donation->email }}</td>
                                    <td>{{ $donation->telephone }}</td>
                                    <td>{{ $donation->type }}</td>
                                    <td>{{ $donation->methode }}</td>
                                    <td>{{ $donation->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No donations found.</p>
                @endif
           

                <h1>Liste des urgences</h1>
                <a href="{{ route('admin.urgences.create') }}" class="btn btn-primary">Create New urgence</a>
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