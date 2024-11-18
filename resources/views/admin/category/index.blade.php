@extends('admin.layout.main')

@section('title', 'Poster Categories')

@section('content')
<h2>Poster Categories</h2>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <a href="{{ route('admin.category.create') }}" class="btn btn-success">Add New Category</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->status }}</td>
            
                            <td>
                                <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
            
                                @if ($category->id > 3) <!-- Only allow delete for categories with id greater than 3 -->
                                    <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                @else
                                    <button class="btn btn-danger btn-sm" disabled>Delete</button>
                                    <!-- Disabled button for first 3 categories -->
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            
            </table>
        </div>
    </div>
</div>
@endsection