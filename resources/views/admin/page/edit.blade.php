@extends('admin.layout.main')

@section('content')
<div class="container">
    <h1>Edit Page: {{ $page->title }}</h1>

    <form action="{{ route('pages.update', $page) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $page->title }}" required>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $page->slug }}" required>
        </div>
        <div class="mb-3">
            <label for="feature_image" class="form-label">Feature Image</label>
            <input type="file" class="form-control" id="feature_image" name="feature_image">
            @if ($page->feature_image)
                <img src="{{ Storage::url($page->feature_image) }}" width="100">
            @endif
        </div>
        <div class="mb-3">
            <label for="meta_title" class="form-label">Meta Title</label>
            <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $page->meta_title }}">
        </div>
        <div class="mb-3">
            <label for="meta_description" class="form-label">Meta Description</label>
            <textarea class="form-control" id="meta_description" name="meta_description">{{ $page->meta_description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="meta_tags" class="form-label">Meta Tags</label>
            <input type="text" class="form-control" id="meta_tags" name="meta_tags[]" value="{{ implode(',', json_decode($page->meta_tags ?? '[]')) }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content">{{ $page->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection
