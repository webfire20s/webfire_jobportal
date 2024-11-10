@extends('admin.layout.main')

@section('content')
<div class="container">
    <h1>Pages</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pageModal">
        Create New Page
    </button>

    <div class="table-responsive mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                    <tr>
                        <td>{{ $page->title }}</td>
                        <td>{{ $page->slug }}</td>
                        <td>
                            <a href="{{ route('pages.edit', $page) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pages.destroy', $page) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
