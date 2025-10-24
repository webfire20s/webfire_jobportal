@extends('admin.layout.main')

@section('content')
    <div class="container py-4">

        @if (session('success'))
            {{-- Bootstrap 5 Alert --}}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-3xl font-bold text-gray-800">Team Member Management</h1>
            {{-- Bootstrap 5 Button --}}
            <a href="{{ route('admin.teams.create') }}" class="btn btn-primary shadow-sm">
                Add New Member
            </a>
        </div>

        <div class="card shadow-lg">
            <div class="card-body p-0">
                {{-- Bootstrap 5 Table --}}
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" style="width: 10%;">Photo</th>
                                <th scope="col" style="width: 25%;">Name</th>
                                <th scope="col" style="width: 25%;">Designation</th>
                                <th scope="col" style="width: 40%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($members as $member)
                                <tr>
                                    <td>
                                        @if ($member->photo_path)
                                            {{-- Bootstrap 5 rounded image utility --}}
                                            <img src="{{ Storage::url($member->photo_path) }}" alt="{{ $member->name }}" class="img-fluid rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                                        @else
                                            <span class="text-muted">No Photo</span>
                                        @endif
                                    </td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->designation }}</td>
                                    <td>
                                        <a href="{{ route('admin.teams.edit', $member) }}" class="btn btn-sm btn-info text-white me-2">Edit</a>

                                        <form action="{{ route('admin.teams.destroy', $member) }}" method="POST" class="d-inline"
                                            onsubmit="return confirm('Are you sure you want to delete this team member? This cannot be undone.')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted py-4">No team members found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
