@extends('admin.layout.main')

@section('title', 'Edit User')

@section('content')
<form method="POST" action="{{ route('admin.user.update', $users->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit User</h4>
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
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $users->name) }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $users->email) }}" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password Confirmation Field -->
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>

                <!-- Mobile Field -->
                <div class="form-group">
                    <label for="mobile">Mobile:</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" value="{{ old('mobile', $users->mobile) }}">
                    @error('mobile')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Aadhar Field -->
                <div class="form-group">
                    <label for="aadhar">Aadhar:</label>
                    <input type="text" class="form-control" id="aadhar" name="aadhar" value="{{ old('aadhar', $users->aadhar) }}">
                    @error('aadhar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Address Field -->
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $users->address) }}">
                    @error('address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- State Field -->
                <div class="form-group">
                    <label for="state">State:</label>
                    <input type="text" class="form-control" id="state" name="state" value="{{ old('state', $users->state) }}">
                    @error('state')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Pincode Field -->
                <div class="form-group">
                    <label for="pincode">Pincode:</label>
                    <input type="text" class="form-control" id="pincode" name="pincode" value="{{ old('pincode', $users->pincode) }}">
                    @error('pincode')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <!-- Photo Field -->
                <div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                    @if ($users->photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/app/public/' . $users->photo) }}" alt="Photo" class="img-thumbnail" style="width: 100px; height: auto;">
                        </div>
                    @endif
                    @error('photo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <!-- Aadhar Photo Field -->
                <div class="form-group">
                    <label for="aadhar_photo">Aadhar Photo:</label>
                    <input type="file" class="form-control" id="aadhar_photo" name="aadhar_photo" accept="image/*">
                    @if ($users->aadhar_photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/app/public/' . $users->aadhar_photo) }}" alt="Aadhar Photo" class="img-thumbnail" style="width: 100px; height: auto;">
                        </div>
                    @endif
                    @error('aadhar_photo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <!-- PAN Photo Field -->
                <div class="form-group">
                    <label for="pan_photo">PAN Photo:</label>
                    <input type="file" class="form-control" id="pan_photo" name="pan_photo" accept="image/*">
                    @if ($users->pan_photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/app/public/' . $users->pan_photo) }}" alt="PAN Photo" class="img-thumbnail" style="width: 100px; height: auto;">
                        </div>
                    @endif
                    @error('pan_photo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <!-- Office Photo Field -->
                <div class="form-group">
                    <label for="office_photo">Office Photo:</label>
                    <input type="file" class="form-control" id="office_photo" name="office_photo" accept="image/*">
                    @if ($users->office_photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/app/public/' . $users->office_photo) }}" alt="Office Photo" class="img-thumbnail" style="width: 100px; height: auto;">
                        </div>
                    @endif
                    @error('office_photo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <!-- Save Button -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</form>

@endsection
