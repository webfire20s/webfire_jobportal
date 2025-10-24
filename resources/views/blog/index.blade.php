@extends('web-layout')

@section('title', 'Our Blog')

@section('content')
    <main id="main" class="py-5">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h1 class="display-4 fw-bold text-primary">Latest Insights & News</h1>
                <p class="text-muted">Stay up-to-date with our company news and industry knowledge.</p>
            </div>

            @if ($posts->isEmpty())
                <div class="alert alert-info text-center">
                    Check back soon! There are no published blog posts yet.
                </div>
            @else
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    {{-- Loop through blog posts --}}
                    @foreach ($posts as $post)
                        <div class="col d-flex align-items-stretch">
                            <div class="card h-100 shadow-sm border-0 transition-3d-hover">
                                
                                {{-- Featured Image --}}
                                @if ($post->image_path)
                                    <img src="{{ Storage::url($post->image_path) }}" 
                                         class="card-img-top" 
                                         alt="{{ $post->title }}" 
                                         style="height: 200px; object-fit: cover;">
                                @else
                                    {{-- Placeholder for posts without an image --}}
                                    <div class="card-img-top bg-light d-flex align-items-center justify-content-center text-muted" style="height: 200px;">
                                        
                                    </div>
                                @endif

                                <div class="card-body d-flex flex-column">
                                    {{-- Post Title --}}
                                    <h5 class="card-title fw-bold">
                                        <a href="{{ route('blog.show', $post) }}" class="text-decoration-none text-dark hover-primary">{{ $post->title }}</a>
                                    </h5>
                                    
                                    {{-- Post Summary (using excerpt or truncated content) --}}
                                    <p class="card-text text-muted small flex-grow-1">
                                        {{ Str::limit(strip_tags($post->content), 120) }}
                                    </p>

                                    {{-- Read More Link --}}
                                    <div class="mt-3">
                                        <a href="{{ route('blog.show', $post) }}" class="btn btn-sm btn-outline-primary">
                                            Read More &rarr;
                                        </a>
                                    </div>
                                </div>
                                
                                {{-- Card Footer for Metadata --}}
                                <div class="card-footer bg-white border-0 pt-0 pb-3">
                                    <small class="text-muted">
                                        By <strong>{{ $post->author_name }}</strong> on {{ $post->published_at->format('F d, Y') }}
                                    </small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Pagination Links --}}
                <div class="d-flex justify-content-center mt-5">
                    {{ $posts->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </main>
@endsection
