@extends('admin.layout.main')

@section('content')
    <div class="container">
        <h1>Create Latest News</h1>

        <form action="{{ route('admin.latest_news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="banner_image" class="form-label">Banner Image</label>
                <input type="file" class="form-control" id="banner_image" name="banner_image" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Save News</button>
        </form>
    </div>
@endsection
