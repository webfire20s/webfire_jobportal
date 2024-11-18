<!-- resources/views/admin/page/index.blade.php -->
@extends('admin.layout.main')

@section('content')
    <div class="container">
        <h1>Pages</h1>
        

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="card card-primary">
            <div class="card-header">
                <a href="{{ route('pages.create') }}" class="btn btn-success mb-3">Create New Page</a>
            </div>
            <div class="card-body">
                        <table class="table table-bordered datatable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{{ $page->title }}</td>
                        <td>{{ $page->slug }}</td>
                        <td>{{ $page->status ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pages.destroy', $page->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
            </div>
        </div>

    </div>
@endsection
