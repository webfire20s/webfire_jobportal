@extends('web')

@section('content')
    <div class="container">
        <h1>{{ $news->title }}</h1>
        
        <div class="card mb-3">
            <div class="card-header">
                <h5>{{ $news->title }}</h5>
            </div>
            <div class="card-body">
                @if($news->banner_image)
                    <img src="{{ asset('storage/app/public/latest_news/'.$news->banner_image) }}" class="img-fluid" alt="Banner Image">
                @endif
                <p class="mt-3">{{ $news->content }}</p>
                <p><strong>Published At:</strong> {{ $news->created_at->format('d M, Y') }}</p>

            </div>
        </div>
    </div>
@endsection
