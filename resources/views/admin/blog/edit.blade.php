@extends('admin.layout.main')

@section('content')
    <div class="container py-4">
        <div class="card shadow-lg mx-auto" style="max-width: 1000px;">
            <div class="card-header bg-info text-white">
                <h1 class="card-title h3 mb-0">Edit Blog Post: {{ $post->title }}</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.blog.update', $post) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @include('admin.blog.form', ['post' => $post])

                    <div class="mt-4">
                        <button type="submit" class="btn btn-info text-white w-100 py-2 shadow-sm">
                            Update Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
