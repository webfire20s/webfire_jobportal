@extends('admin.layout.main')

@section('title', 'Poster')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <a href="{{ asset('admin/poster/add') }}" class="btn btn-success" style="float:right">Create</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Poster URL</th>
                        <th>Category</th>
                        <th>PDF</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posters as $poster)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $poster->title }}</td>
                        <td>{{ $poster->description }}</td>
                        <td><a href="{{ $poster->poster_url }}" target="_blank">{{ $poster->poster_url }}</a></td>
                        <td>{{ $poster->category_id }}</td> <!-- You can replace category_id with category name if available -->
                        <td><a href="{{ asset('storage/app/public/' . $poster->pdf) }}" target="_blank">Download PDF</a></td>
                        <td><img src="{{ asset('storage/app/public/' . $poster->image) }}" alt="Poster Image" style="width: 100px;"></td>
                        <td>
                            <a href="{{ url('admin/poster/edit', $poster->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ url('admin/poster/delete', $poster->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
