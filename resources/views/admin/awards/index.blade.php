@extends('admin.layout.main')

@section('content')

<div class="container">

    <h2 class="mb-4">Manage Awards & Certificates</h2>

    <!-- Add Button -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
        + Add New Award
    </button>

    <!-- Awards Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Sort Order</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($awards as $item)
            <tr>
                <td>
                    <img src="{{ asset('public/uploads/awards/'.$item->image) }}" width="80">
                </td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->sort_order }}</td>
                <td>
                    <!-- Edit -->
                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                        data-bs-target="#editModal{{ $item->id }}">Edit</button>

                    <!-- Delete -->
                    <form action="{{ route('awards.delete', $item->id) }}" method="POST"
                        style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Delete this item?')"
                            class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

            <!-- Edit Modal -->
            <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1">
                <div class="modal-dialog">
                    <form class="modal-content" method="POST" enctype="multipart/form-data"
                        action="{{ route('awards.update', $item->id) }}">
                        @csrf
                        <div class="modal-header">
                            <h5>Edit Award</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control"
                                value="{{ $item->title }}">

                            <label class="mt-2">Sort Order</label>
                            <input type="number" name="sort_order" class="form-control"
                                value="{{ $item->sort_order }}">

                            <label class="mt-2">Image (optional)</label>
                            <input type="file" name="image" class="form-control">

                            <img src="{{ asset('uploads/awards/'.$item->image) }}"
                                class="mt-2" width="100">
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>

            @endforeach
        </tbody>
    </table>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog">
        <form class="modal-content" method="POST" enctype="multipart/form-data"
            action="{{ route('awards.store') }}">
            @csrf

            <div class="modal-header">
                <h5>Add New Award</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <label>Title</label>
                <input type="text" name="title" class="form-control">

                <label class="mt-2">Sort Order</label>
                <input type="number" name="sort_order" class="form-control">

                <label class="mt-2">Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>

            <div class="modal-footer">
                <button class="btn btn-success">Save</button>
            </div>

        </form>
    </div>
</div>

@endsection
