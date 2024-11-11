@extends('admin.layout.main')

@section('content')
    <div class="container">
        <h1>Latest News</h1>

        <a href="{{ route('admin.latest_news.create') }}" class="btn btn-primary mb-3">Create New News</a>

        <div class="row">
            @foreach($latestNews as $news)
                <div class="col-md-4">
                    <div class="card mb-3">
                        @if($news->banner_image)
                            <img src="{{ asset('storage/app/public/latest_news/'.$news->banner_image) }}" class="card-img-top" alt="Banner Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $news->title }}</h5><br>
                            <p class="card-text">{{ Str::limit($news->content, 100) }}</p>
                            <a href="{{ route('admin.latest_news.edit', $news->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('admin.latest_news.destroy', $news->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this news?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination links -->
        <div class="d-flex justify-content-center">
            {{ $latestNews->links() }}
        </div>
    </div>
@endsection
