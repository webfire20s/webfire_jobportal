@extends('web-layout')

@section('title', $blog->title)

@section('content')
<main id="main" class="py-10 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4">

        <article class="bg-white p-8 rounded-2xl shadow-sm">

            {{-- Post Title --}}
            <header class="mb-6">
                <h1 class="text-4xl font-extrabold text-gray-900 mb-2">
                    {{ $blog->title }}
                </h1>

                <div class="text-gray-500 text-sm">
                    Posted by 
                    <span class="font-semibold text-gray-700">{{ $blog->author_name }}</span> 
                    on {{ $blog->published_at->format('F d, Y') }}
                </div>
            </header>

            {{-- Featured Image --}}
            @if ($blog->image_path)
                <figure class="mb-8">
                    <img src="{{ asset('public/storage/blog_images/' . $blog->image_path) }}" 
                         alt="{{ $blog->title }}"
                         class="w-full h-[420px] object-cover rounded-xl shadow-md">
                </figure>
            @endif

            {{-- Post Content --}}
            <section class="prose max-w-none prose-lg text-gray-800 leading-relaxed">
                {!! $blog->content !!}
            </section>

            <hr class="my-10 border-gray-200">

            {{-- Back Button --}}
            <div class="text-center">
                <a href="{{ route('blog.index') }}" 
                   class="inline-block px-6 py-3 text-lg font-semibold bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition">
                    ← Back to all posts
                </a>
            </div>

        </article>

    </div>
</main>
@endsection
