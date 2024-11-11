<!-- resources/views/admin/page/edit.blade.php -->
@extends('admin.layout.main')

@section('content')
    <div class="container">
        <h1>Edit Page</h1>

        <form action="{{ route('pages.update', $page->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Display Validation Errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $page->title) }}" required>
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $page->slug) }}" required>
            </div>

            <div class="form-group">
                <label for="feature_image">Feature Image</label>
                @if ($page->feature_image)
                    <div>
                        <img src="{{ asset('storage/app/public/' . $page->feature_image) }}" alt="Feature Image" style="width: 150px; height: auto;">
                    </div>
                @endif
                <input type="file" name="feature_image" id="feature_image" class="form-control">
            </div>

            <div class="form-group">
                <label for="meta_title">Meta Title</label>
                <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ old('meta_title', $page->meta_title) }}">
            </div>

            <div class="form-group">
                <label for="meta_description">Meta Description</label>
                <textarea name="meta_description" id="meta_description" class="form-control">{{ old('meta_description', $page->meta_description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="meta_tags">Meta Tags (comma-separated)</label>
                <input type="text" name="meta_tags" id="meta_tags" class="form-control" value="{{ old('meta_tags', $page->meta_tags) }}">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control ckeditor">{{ old('content', $page->content) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Page</button>
        </form>
    </div>
@endsection
