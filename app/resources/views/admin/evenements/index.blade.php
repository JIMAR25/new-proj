@extends('layouts.app')

@section('content')
    <h1>Evenements</h1>

    <a href="{{ route('admin.evenements.create') }}" class="btn btn-primary">Create New Evenement</a>

    @if (count($evenements) > 0)
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
    @else
        <p>No evenements found.</p>
    @endif

    
@endsection
