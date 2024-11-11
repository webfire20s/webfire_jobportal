@extends('admin.layout.main')

@section('content')
    <div class="container">
        <h1>Edit Latest News</h1>

        <form action="{{ route('admin.latest_news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $news->title) }}" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="3" required>{{ old('content', $news->content) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="banner_image" class="form-label">Banner Image</label>
                <input type="file" class="form-control" id="banner_image" name="banner_image" accept="image/*">
            </div>

            @if($news->banner_image)
                <div class="mb-3">
                    <img src="{{ asset('storage/app/public/latest_news/'.$news->banner_image) }}" alt="Banner Image" class="img-fluid" style="max-height: 200px;">
                </div>
            @endif

            <button type="submit" class="btn btn-primary">Update News</button>
        </form>
    </div>
@endsection
