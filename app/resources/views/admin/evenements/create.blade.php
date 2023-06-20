@extends('layouts.admin')

@section('content')
    <h1>Create Evenement</h1>
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

    <form method="POST" action="{{ route('admin.evenements.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="photos">Photos</label>
            <input type="file" class="form-control-file" id="photos" name="photos">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
