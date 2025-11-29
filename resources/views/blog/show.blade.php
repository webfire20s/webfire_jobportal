@extends('web-layout')

@section('title', $blog->title)

@section('content')
    <main id="main" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <article class="col-lg-10">

                    {{-- Post Title --}}
                    <header class="mb-4">
                        <h1 class="display-5 fw-bold text-dark">{{ $blog->title }}</h1>
                        <div class="text-muted small">
                            Posted by <strong>{{ $blog->author_name }}</strong> on {{ $blog->published_at->format('F d, Y') }}
                        </div>
                    </header>

                    {{-- Featured Image --}}
                    @if ($blog->image_path)
                        <figure class="mb-4">
                            <img src="{{ asset('public/storage/blog_images/' . $blog->image_path) }}" 
                                 class="img-fluid rounded shadow-sm w-100" 
                                 alt="{{ $blog->title }}"
                                 style="max-height: 450px; object-fit: cover;">
                        </figure>
                    @endif

                    {{-- Post Content --}}
                    <section class="lead fs-5 text-dark blog-content">
                        {{-- Laravel does not render raw HTML by default, use {!! !!} if content includes formatting --}}
                        {!! $blog->content !!} 
                    </section>

                    <hr class="my-5">

                    {{-- Back Button --}}
                    <div class="text-center">
                        <a href="{{ route('blog.index') }}" class="btn btn-primary btn-lg">
                            &larr; Back to all posts
                        </a>
                    </div>

                </article>
            </div>
        </div>
    </main>
@endsection
