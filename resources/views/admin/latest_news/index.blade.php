@extends('admin.layout.main')

@section('content')
    <div class="container">
        <h1>Latest News</h1>

        <div class="card card-primary">
            <div class="card-header">
                <a href="{{ route('admin.latest_news.create') }}" class="btn btn-success mb-3">Create New News</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Banner Image</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($latestNews as $index => $news)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                @if($news->banner_image)
                                    <img src="{{ asset('storage/app/public/latest_news/'.$news->banner_image) }}" alt="Banner Image" style="width: 100px;">
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>{{ $news->title }}</td>
                            <td>{{ Str::limit($news->content, 100) }}</td>
                            <td>
                                <a href="{{ route('admin.latest_news.edit', $news->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.latest_news.destroy', $news->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this news?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination links -->
        <div class="d-flex justify-content-center">
            {{ $latestNews->links() }}
        </div>
    </div>
@endsection
