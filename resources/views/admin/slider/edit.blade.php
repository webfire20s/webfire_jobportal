@extends('admin.layout.main')

@section('content')
<div class="container">
    <h1>Edit Slider</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $slider->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $slider->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control-file">
            <small>Leave empty if you don't want to update the image.</small>
            <br>
            <img src="{{ asset('public/uploads/sliders/' . $slider->image) }}" alt="{{ $slider->title }}" width="150">
        </div>

        <button type="submit" class="btn btn-primary">Update Slider</button>
    </form>
</div>
@endsection
