@extends('admin.layout.main')

@section('title', 'Edit Category')

@section('content')
    <h1>Edit Poster Category</h1>

    <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $category->name) }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="1" {{ $category->status == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ $category->status == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>
@endsection
