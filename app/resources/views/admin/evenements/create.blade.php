@extends('layouts.app')

@section('content')
    <h1>Create Evenement</h1>

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
