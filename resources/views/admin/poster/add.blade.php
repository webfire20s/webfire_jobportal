@extends('admin.layout.main')

@section('title', 'Add Poster')

@section('content')
<form method="POST" action="{{ url('admin/poster/store') }}" enctype="multipart/form-data">
    @csrf
    <div class="card card-primary">
        <div class="card-header">
            <h4>Add Poster</h4>
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

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                    placeholder="Enter title">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="description" value="{{ old('description') }}"
                    placeholder="Enter Description">
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>URL</label>
                <input type="text" class="form-control" name="poster_url" value="{{ old('poster_url') }}"
                    placeholder="Enter Poster Url">
                @error('poster_url')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category_id" required>
                    <option value="">Select a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>PDF</label>
                <input type="file" class="form-control" name="pdf" accept=".pdf">
                @error('pdf')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image" accept="image/*">
                <!-- Changed 'images/*' to 'image/*' -->
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>


@endsection