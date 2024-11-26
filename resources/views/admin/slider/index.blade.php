@extends('admin.layout.main')

@section('content')
<div class="container">
    <h1>Sliders</h1>
    <a href="{{ route('admin.slider.create') }}" class="btn btn-primary mb-3">Add New Slider</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sliders as $slider)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $slider->title }}</td>
                    <td>{{ $slider->description }}</td>
                    <td>
                        <img src="{{ asset('public/uploads/sliders/' . $slider->image) }}" alt="{{ $slider->title }}" width="100">
                    </td>
                    <td>
                        <a href="{{ route('admin.slider.edit', $slider->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.slider.destroy', $slider->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
