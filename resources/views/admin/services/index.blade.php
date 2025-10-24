@extends('admin.layout.main')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">

            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Services Management</h3>
                    <div class="card-tools">
                        <a href="{{ route('services.create') }}" class="btn btn-primary btn-sm">
                            Add New Service
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Filter Class</th>
                                <th>URL</th>
                                <th style="width: 150px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td>{{ $service->title }}</td>
                                    <td>{{ $service->subtitle }}</td>
                                    <td><span class="badge bg-secondary">{{ $service->filter_class }}</span></td>
                                    <td><a href="{{ $service->url }}" target="_blank" class="text-primary">{{ Str::limit($service->url, 40) }}</a></td>
                                    <td>
                                        <a href="{{ route('services.edit', $service) }}" class="btn btn-info btn-sm">
                                            Edit
                                        </a>
                                        <form action="{{ route('services.destroy', $service) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this service?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    {{-- THIS IS THE CORRECTED LINE: Use the 'bootstrap-5' view --}}
                    {{ $services->links('pagination::bootstrap-5') }}
                </div>
            </div>
            </div>
    </div>
</div>

@endsection