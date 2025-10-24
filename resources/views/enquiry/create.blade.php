@extends('web-layout')

@section('title', 'Service Enquiry')

@section('content')
    <main id="main" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-primary text-white text-center py-4">
                            <h1 class="h2 mb-0 fw-bold">Service Enquiry Form</h1>
                            <p class="mb-0">Tell us what you're interested in, and we'll be in touch!</p>
                        </div>
                        <div class="card-body p-4 p-md-5">

                            {{-- Success Message Display --}}
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            
                            {{-- Validation Error Display --}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <p class="fw-bold mb-1">Please fix the following errors:</p>
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('enquiry.store') }}" method="POST" class="needs-validation" novalidate>
                                @csrf

                                {{-- Full Name --}}
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-bold">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required placeholder="Enter your full name">
                                    <div class="invalid-feedback">Please provide your full name.</div>
                                </div>

                                {{-- Email Address --}}
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required placeholder="name@example.com">
                                    <div class="invalid-feedback">Please provide a valid email address.</div>
                                </div>

                                {{-- Phone Number --}}
                                <div class="mb-3">
                                    <label for="phone" class="form-label fw-bold">Phone Number <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required placeholder="e.g., +91 98765 43210">
                                    <div class="invalid-feedback">Please provide a phone number.</div>
                                </div>
                                
                                {{-- Service Selection (Using a placeholder array for common services) --}}
                                {{-- NOTE: If you need a comprehensive list, you should pass a $services array from the controller. --}}
                                @php
                                    $service_options = [
                                        'Banking & Finance Services', 
                                        'eGov Services', 
                                        'Recharge & Bill Payments',
                                        'Travel Services',
                                        'Investment Products',
                                        'Insurance Services',
                                        'Loan Services',
                                        'Biometric Devices & Hardware'
                                    ];
                                    $inquired_service = old('inquired_service', request()->query('service'));
                                @endphp

                                <div class="mb-3">
                                    <label for="inquired_service" class="form-label fw-bold">Service of Interest <span class="text-danger">*</span></label>
                                    <select class="form-select" id="inquired_service" name="inquired_service" required>
                                        <option value="" disabled {{ empty($inquired_service) ? 'selected' : '' }}>Select a service</option>
                                        @foreach($service_options as $option)
                                            <option value="{{ $option }}" {{ $inquired_service == $option ? 'selected' : '' }}>{{ $option }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Please select the service you are interested in.</div>
                                </div>
                                
                                {{-- Message --}}
                                <div class="mb-4">
                                    <label for="message" class="form-label fw-bold">Your Message (Optional)</label>
                                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Briefly describe your requirements or questions (Max 500 characters)" maxlength="500">{{ old('message') }}</textarea>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg shadow">
                                        Submit Enquiry
                                    </button>
                                </div>
                            </form>
                            
                        </div>
                        <div class="card-footer text-center text-muted small">
                            We respect your privacy. Your information will only be used to contact you regarding your interest.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
