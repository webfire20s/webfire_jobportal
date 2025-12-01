@extends('web-layout')

@section('title', 'Our Blog')

@section('content')
<main id="main" class="py-10 bg-gray-50">
    <div class="container mx-auto px-4">

        {{-- Section Heading --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-extrabold text-indigo-600">Latest Insights & News</h1>
            <p class="text-gray-600 mt-2">Stay up-to-date with our company news and industry knowledge.</p>
        </div>

        {{-- Empty State --}}
        @if ($posts->isEmpty())
            <div class="text-center bg-white p-6 rounded-xl shadow-md">
                <p class="text-gray-600">Check back soon! There are no published blog posts yet.</p>
            </div>

        @else
        {{-- Blog Cards Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($posts as $post)
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col">

                {{-- Featured Image --}}
                @if ($post->image_path)
                    <img src="{{ asset('public/storage/blog_images/' . $post->image_path) }}"
                         alt="{{ $post->title }}"
                         class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                        No Image
                    </div>
                @endif

                {{-- Content --}}
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-lg font-bold text-gray-800 mb-2 hover:text-indigo-600 transition">
                        <a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a>
                    </h3>

                    <p class="text-gray-600 text-sm flex-grow">
                        {{ Str::limit(strip_tags($post->content), 120) }}
                    </p>

                    <a href="{{ route('blog.show', $post) }}"
                       class="mt-4 inline-block text-indigo-600 font-semibold hover:text-indigo-800 text-sm">
                        Read More →
                    </a>
                </div>

                {{-- Footer --}}
                <div class="px-6 pb-6 text-xs text-gray-500">
                    By <span class="font-semibold">{{ $post->author_name }}</span>
                    • {{ $post->published_at->format('F d, Y') }}
                </div>

            </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-10 flex justify-center">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
        @endif
    </div>
</main>
@endsection
