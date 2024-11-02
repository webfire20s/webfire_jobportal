

@extends('admin.layout.main')

@section('title', 'Home Page')

@section('content')
<form method="POST" action="{{ url('admin/user/store') }}" enctype="multipart/form-data">
    @csrf <!-- Always include CSRF token in Laravel forms -->

    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Create User</h4>
            </div>

            <div class="card-body">
                <!-- Success Message -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Error Message -->
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Name Field -->
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                <!-- Password Field -->


                <!-- Mobile Field -->
                <div class="form-group">
                    <label for="mobile">Mobile (optional):</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" value="{{ old('mobile') }}">
                </div>

                <!-- Aadhar Field -->
                <div class="form-group">
                    <label for="aadhar">Aadhar (optional):</label>
                    <input type="text" class="form-control" id="aadhar" name="aadhar" value="{{ old('aadhar') }}">
                </div>

                <!-- Address Field -->
                <div class="form-group">
                    <label for="address">Address (optional):</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                </div>

                <!-- State Field -->
                <div class="form-group">
                    <label for="state">State (optional):</label>
                    <input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}">
                </div>

                <!-- Pincode Field -->
                <div class="form-group">
                    <label for="pincode">Pincode (optional):</label>
                    <input type="text" class="form-control" id="pincode" name="pincode" value="{{ old('pincode') }}">
                </div>

                <!-- Photo Field -->
                <div class="form-group">
                    <label for="photo">Photo (optional):</label>
                    <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                </div>

                <!-- Aadhar Photo Field -->
                <div class="form-group">
                    <label for="aadhar_photo">Aadhar Photo (optional):</label>
                    <input type="file" class="form-control" id="aadhar_photo" name="aadhar_photo" accept="image/*">
                </div>

                <!-- PAN Photo Field -->
                <div class="form-group">
                    <label for="pan_photo">PAN Photo (optional):</label>
                    <input type="file" class="form-control" id="pan_photo" name="pan_photo" accept="image/*">
                </div>

                <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            </div>
            

            <!-- Save Button -->
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</form>

@endsection