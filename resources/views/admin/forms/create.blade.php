@extends('admin.layout.main')

@section('content')
<div class="container">
    <h1>Add New Form</h1>

    <form action="{{ route('forms.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="form_description">Form Description</label>
            <input type="text" name="form_description" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="document">Upload Document</label>
            <input type="file" name="document" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Save</button>
    </form>
</div>
@endsection
