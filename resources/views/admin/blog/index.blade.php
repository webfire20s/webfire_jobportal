@extends('admin.layout.main')

@section('content')
    <div class="container py-4">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h2 text-dark fw-bold">Blog Post Management</h1>
            <a href="{{ route('admin.blog.create') }}" class="btn btn-primary shadow-sm">
                Add New Post
            </a>
        </div>

        <div class="card shadow-lg">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" style="width: 5%;">Status</th>
                                <th scope="col" style="width: 35%;">Title</th>
                                <th scope="col" style="width: 20%;">Author</th>
                                <th scope="col" style="width: 15%;">Published Date</th>
                                <th scope="col" style="width: 25%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                                <tr>
                                    <td>
                                        @if ($post->is_published)
                                            <span class="badge bg-success">Published</span>
                                        @else
                                            <span class="badge bg-warning text-dark">Draft</span>
                                        @endif
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->author_name }}</td>
                                    <td>
                                        {{ $post->published_at ? $post->published_at->format('M d, Y') : 'N/A' }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.blog.edit', $post) }}" class="btn btn-sm btn-info text-white me-2">Edit</a>

                                        <form action="{{ route('admin.blog.destroy', $post) }}" method="POST" class="d-inline"
                                            onsubmit="return confirm('WARNING: Deleting this post is irreversible. Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">No blog posts found. Time to create your first one!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
