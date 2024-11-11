@extends('admin.layout.main')

@section('title', 'Add Category')

@section('content')
    <h1>Add New Poster Category</h1>

    <form action="{{ route('admin.category.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
@endsection
