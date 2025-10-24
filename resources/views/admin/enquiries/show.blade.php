@extends('admin.layout.main')

@section('title', 'Enquiry Details - ' . $enquiry->name)

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Enquiry Details from <span class="fw-bold">{{ $enquiry->name }}</span></h3>
                </div>
                <div class="card-body p-4">

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="row">
                        {{-- Enquiry Details --}}
                        <div class="col-md-7 border-end">
                            <h4 class="mb-3 text-secondary">Contact Information</h4>
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Service of Interest:</span>
                                    <span class="text-primary">{{ $enquiry->inquired_service }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Email:</span>
                                    <a href="mailto:{{ $enquiry->email }}">{{ $enquiry->email }}</a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Phone:</span>
                                    <span>{{ $enquiry->phone }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="fw-bold">Submitted On:</span>
                                    <span>{{ $enquiry->created_at->format('F d, Y h:i A') }}</span>
                                </li>
                            </ul>
                            
                            <h4 class="mb-3 text-secondary">Client Message</h4>
                            <div class="p-3 bg-light rounded border mb-4">
                                @if ($enquiry->message)
                                    <p class="mb-0">{{ $enquiry->message }}</p>
                                @else
                                    <p class="fst-italic text-muted mb-0">No specific message provided.</p>
                                @endif
                            </div>
                        </div>

                        {{-- Status Update Form --}}
                        <div class="col-md-5">
                            <h4 class="mb-3 text-secondary">Update Status</h4>
                            <form action="{{ route('admin.enquiries.update', $enquiry) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="status" class="form-label fw-bold">Current Status:</label>
                                    @php
                                        $currentBadge = match($enquiry->status) {
                                            'New' => 'bg-danger',
                                            'Contacted' => 'bg-warning text-dark',
                                            'In Progress' => 'bg-info',
                                            'Closed' => 'bg-success',
                                            'Spam' => 'bg-secondary',
                                            default => 'bg-primary',
                                        };
                                    @endphp
                                    <p><span class="badge {{ $currentBadge }} fs-6">{{ $enquiry->status }}</span></p>

                                    <label for="status_update" class="form-label fw-bold mt-3">Change Status to:</label>
                                    <select class="form-select" id="status_update" name="status" required>
                                        @foreach($statuses as $value => $label)
                                            <option value="{{ $value }}" {{ $enquiry->status == $value ? 'selected' : '' }}>
                                                {{ $label }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('status')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-grid mt-4">
                                    <button type="submit" class="btn btn-success btn-lg">Save Status Update</button>
                                </div>
                            </form>
                            
                            <hr class="my-4">

                            <a href="{{ route('admin.enquiries.index') }}" class="btn btn-outline-secondary w-100">
                                &larr; Back to Enquiries List
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
