@extends('web-layout')

@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <!-- Profile Update Form -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Profile Settings</div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <!-- Form for updating profile -->
                        <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data"
                            class="row">
                            @csrf
                            <!-- Name -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}"
                                        required>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ Auth::user()->email }}" required>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Mobile -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" name="mobile" class="form-control"
                                        value="{{ Auth::user()->mobile }}">
                                    @error('mobile')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control"
                                        value="{{ Auth::user()->address }}">
                                    @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Shop Name -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="shop_name">Shop Name</label>
                                    <input type="text" name="shop_name" class="form-control"
                                        value="{{ Auth::user()->shop_name }}">
                                    @error('shop_name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- State -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input type="text" name="state" class="form-control"
                                        value="{{ Auth::user()->state }}">
                                    @error('state')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Pincode -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pincode">Pincode</label>
                                    <input type="text" name="pincode" class="form-control"
                                        value="{{ Auth::user()->pincode }}">
                                    @error('pincode')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Profile Photo -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="photo">Profile Photo</label>
                                    <input type="file" name="photo" class="form-control">
                                    @if(Auth::user()->photo)
                                        <div class="mt-2">
                                            <label>Current Profile Photo:</label>
                                            <img src="{{ asset('storage/app/public/' . str_replace('public/', '', Auth::user()->photo)) }}"
                                                alt="Profile Photo" width="100">
                                        </div>
                                    @endif
                                    @error('photo')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Aadhar Photo -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="aadhar_photo">Aadhar Photo</label>
                                    <input type="file" name="aadhar_photo" class="form-control">
                                    @if(Auth::user()->aadhar_photo)
                                        <div class="mt-2">
                                            <label>Current Aadhar Photo:</label>
                                            <img src="{{ asset('storage/app/public/' . str_replace('public/', '', Auth::user()->aadhar_photo)) }}"
                                                alt="Aadhar Photo" width="100">
                                        </div>
                                    @endif
                                    @error('aadhar_photo')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- PAN Photo -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pan_photo">PAN Photo</label>
                                    <input type="file" name="pan_photo" class="form-control">
                                    @if(Auth::user()->pan_photo)
                                        <div class="mt-2">
                                            <label>Current PAN Photo:</label>
                                            <img src="{{ asset('storage/app/public/' . str_replace('public/', '', Auth::user()->pan_photo)) }}"
                                                alt="PAN Photo" width="100">
                                        </div>
                                    @endif
                                    @error('pan_photo')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-2">Update Profile</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection