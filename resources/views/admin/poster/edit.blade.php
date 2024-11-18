

@extends('admin.layout.main')

@section('title', 'Home Page')

@section('content')

<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3>Edit Poster</h3>
        </div>
        <div class="card-body">
            
                        <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Error Message -->
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('admin.poster.update', $poster->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $poster->title) }}" required>
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control ckeditor" id="description" name="description" required>{{ old('description', $poster->description) }}</textarea>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="poster_url">Poster URL</label>
        <input type="text" class="form-control" id="poster_url" name="poster_url" value="{{ old('poster_url', $poster->poster_url) }}" required>
        @error('poster_url')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="pdf">Upload PDF</label>
        <input type="file" class="form-control" id="pdf" name="pdf">
        @error('pdf')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="image">Upload Image</label>
        <input type="file" class="form-control" id="image" name="image">
        @error('image')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update Poster</button>
</form>

        </div>
    </div>
</div>

@endsection
