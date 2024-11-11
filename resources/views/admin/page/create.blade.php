<!-- resources/views/admin/page/create.blade.php -->
@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            Create New Page
        </div>
        <div class="card-body">
            <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

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
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                </div>

                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}" required>
                </div>

                <div class="form-group">
                    <label for="feature_image">Feature Image</label>
                    <input type="file" name="feature_image" id="feature_image" class="form-control">
                </div>

                <div class="form-group">
                    <label for="meta_title">Meta Title</label>
                    <input type="text" name="meta_title" id="meta_title" class="form-control"
                        value="{{ old('meta_title') }}">
                </div>

                <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <textarea name="meta_description" id="meta_description"
                        class="form-control">{{ old('meta_description') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="meta_tags">Meta Tags (comma-separated)</label>
                    <input type="text" name="meta_tags" id="meta_tags" class="form-control"
                        value="{{ old('meta_tags') }}">
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control ckeditor">{{ old('content') }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Create Page</button>
            </form>
        </div>
    </div>
</div>
@endsection