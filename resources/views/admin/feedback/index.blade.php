@extends('admin.layout.main') {{-- Adjust this to your actual admin layout --}}

@section('content')
    <div class="container">
        <h2>Manage Feedbacks</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('feedbacks.create') }}" class="btn btn-primary mb-3">Add New Feedback</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Office Address</th>
                    <th>Published</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($feedbacks as $feedback)
                    <tr>
                        <td>{{ $feedback->id }}</td>
                        <td>
                            @if ($feedback->photo)
                                <img src="{{ url('public/').$feedback->photo }}" alt="{{ $feedback->name }}"
                                    style="width: 50px; height: 50px; object-fit: cover;">
                            @else
                                No Photo
                            @endif
                        </td>
                        <td>{{ $feedback->name }}</td>
                        <td>{{ $feedback->office_address }}</td>
                        <td>
                            <span class="badge {{ $feedback->is_published ? 'bg-success' : 'bg-danger' }}">
                                {{ $feedback->is_published ? 'Yes' : 'No' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('feedbacks.edit', $feedback) }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ route('feedbacks.destroy', $feedback) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $feedbacks->links() }}
    </div>
@endsection
