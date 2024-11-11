@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="row">
        <!-- Update Admin Details Form -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">Profile</div>
                <div class="card-body">
                    <!-- Display success message -->
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <!-- Form for updating details -->
                    <form action="{{ route('admin.settings.update') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" required>
                            @error('name') 
                                <div class="text-danger">{{ $message }}</div> 
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" required>
                            @error('email') 
                                <div class="text-danger">{{ $message }}</div> 
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="text" name="mobile" class="form-control" value="{{ Auth::user()->mobile }}">
                            @error('mobile') 
                                <div class="text-danger">{{ $message }}</div> 
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" value="{{ Auth::user()->address }}">
                            @error('address') 
                                <div class="text-danger">{{ $message }}</div> 
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update Details</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Change Password Form -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">Change Password</div>
                <div class="card-body">
                    <!-- Display success message -->
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <!-- Display error messages -->
                    @if ($errors->has('current_password'))
                        <div class="alert alert-danger">{{ $errors->first('current_password') }}</div>
                    @endif

                    <form action="{{ route('admin.settings.changePassword') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input type="password" name="current_password" class="form-control" required>
                            @error('current_password') 
                                <div class="text-danger">{{ $message }}</div> 
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="new_password">New Password</label>
                            <input type="password" name="new_password" class="form-control" required>
                            @error('new_password') 
                                <div class="text-danger">{{ $message }}</div> 
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="new_password_confirmation">Confirm New Password</label>
                            <input type="password" name="new_password_confirmation" class="form-control" required>
                            @error('new_password_confirmation') 
                                <div class="text-danger">{{ $message }}</div> 
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
