@extends('admin.layout.main')

@section('title', 'User')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <a href="{{ url('admin/user/add') }}" class="btn btn-success" style="float:right">Create</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered datatable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td>{{ $user->address }}</td>
                            <td>                                
                                <form action="{{ route('admin.user.toggleStatus', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-sm {{ $user->status === 'active' ? 'btn-success' : 'btn-warning' }}">
                                        {{ $user->status === 'inactive' ? 'Deactive' : 'Active' }}
                                    </button>
                                </form></td>
                            <td>
                                @if ($user->photo)
                                    <img src="{{ asset('storage/app/public/' . $user->photo) }}" alt="User Photo" width="100">
                                @else
                                    <span>No Photo</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/user/edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                <form action="{{ url('admin/user/destroy', $user->id) }}" method="POST" style="display:inline;">
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
    </div>
</div>
@endsection
