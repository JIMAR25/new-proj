<!-- resources/views/admin/donations/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
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
    </div>
@endsection
