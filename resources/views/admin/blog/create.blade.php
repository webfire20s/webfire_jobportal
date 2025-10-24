@extends('admin.layout.main')

@section('content')
    <div class="container py-4">
        <div class="card shadow-lg mx-auto" style="max-width: 1000px;">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title h3 mb-0">Create New Blog Post</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @include('admin.blog.form', ['post' => new \App\Models\BlogPost()])

                    <div class="mt-4">
                        <button type="submit" class="btn btn-success w-100 py-2 shadow-sm">
                            Save Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
