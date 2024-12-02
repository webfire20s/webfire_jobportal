@extends('admin.layout.main')

@section('content')
<div class="container">
    <h1>Forms List</h1>
    <a href="{{ route('forms.create') }}" class="btn btn-primary mb-3">Add Form</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>SL</th>
                <th>Description</th>
                <th>Document</th>
                <th>File Size (KB)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($forms as $form)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $form->form_description }}</td>
                    <td><a href="{{ Storage::url($form->document_path) }}" target="_blank">View Document</a></td>
                    <td>{{ $form->file_size }}</td>
                    <td>
                        <a href="{{ route('forms.edit', $form) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('forms.destroy', $form) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
