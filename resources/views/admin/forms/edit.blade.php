@extends('admin.layout.main')

@section('content')
<div class="container">
    <h1>Edit Form</h1>

    <form action="{{ route('forms.update', $form) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="form_description">Form Description</label>
            <input type="text" name="form_description" class="form-control" value="{{ $form->form_description }}" required>
        </div>

        <div class="form-group">
            <label for="document">Upload Document (Optional)</label>
            <input type="file" name="document" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection
