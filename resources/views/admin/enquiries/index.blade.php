@extends('admin.layout.main')

@section('title', 'Service Enquiries Management')

@section('content')
<div class="container-fluid py-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Client Service Enquiries ({{ $enquiries->total() }})</h3>
        </div>
        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($enquiries->isEmpty())
                <div class="alert alert-info text-center">No service enquiries found.</div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover table-striped mb-4 align-middle">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Client Name</th>
                                <th>Inquired Service</th>
                                <th>Email/Phone</th>
                                <th>Status</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($enquiries as $enquiry)
                                <tr>
                                    <td>{{ $enquiry->created_at->format('M d, Y') }}</td>
                                    <td class="fw-bold">{{ $enquiry->name }}</td>
                                    <td>{{ $enquiry->inquired_service }}</td>
                                    <td>
                                        <a href="mailto:{{ $enquiry->email }}">{{ $enquiry->email }}</a><br>
                                        {{ $enquiry->phone }}
                                    </td>
                                    <td>
                                        @php
                                            $badge = match($enquiry->status) {
                                                'New' => 'bg-danger',
                                                'Contacted' => 'bg-warning text-dark',
                                                'In Progress' => 'bg-info',
                                                'Closed' => 'bg-success',
                                                'Spam' => 'bg-secondary',
                                                default => 'bg-primary',
                                            };
                                        @endphp
                                        <span class="badge {{ $badge }}">{{ $enquiry->status }}</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.enquiries.show', $enquiry) }}" class="btn btn-sm btn-outline-primary me-2">
                                            View Details
                                        </a>
                                        <form action="{{ route('admin.enquiries.destroy', $enquiry) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this enquiry? This action cannot be undone.');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Pagination Links --}}
                <div class="d-flex justify-content-center">
                    {{ $enquiries->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
