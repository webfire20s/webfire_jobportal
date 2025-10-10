@extends('web-layout')

@section('title', 'Sign Up')

@section('content')

<style>
    body {
        background: linear-gradient(135deg, #5636d6 0%, #3b82f6 100%);
        font-family: 'Poppins', sans-serif;
        min-height: 100vh;
    }

    .register-card {
        max-width: 750px;
        margin: 70px auto;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }

    .register-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2);
    }

    .register-header {
        background: linear-gradient(135deg, #3b82f6, #5636d6);
        color: #fff;
        text-align: center;
        padding: 30px 25px;
    }

    .register-header h2 {
        font-weight: 600;
        font-size: 1.8rem;
        margin-bottom: 8px;
    }

    .register-header p {
        opacity: 0.9;
        font-size: 0.95rem;
    }

    .register-body {
        padding: 35px;
    }

    .form-label {
        font-weight: 600;
        color: #222;
    }

    .form-control {
        border-radius: 10px;
        padding: 12px 15px;
        border: 1px solid #ddd;
        background-color: #f9f9f9;
        transition: all 0.3s ease-in-out;
    }

    .form-control:focus {
        border-color: #3b82f6;
        background-color: #fff;
        box-shadow: 0 0 0 0.2rem rgba(59, 130, 246, 0.25);
    }

    .btn-signup {
        background: linear-gradient(135deg, #5636d6, #3b82f6);
        border: none;
        border-radius: 10px;
        padding: 12px;
        font-weight: 600;
        font-size: 1rem;
        transition: 0.3s;
        color: #fff;
    }

    .btn-signup:hover {
        background: linear-gradient(135deg, #3b82f6, #5636d6);
        transform: scale(1.03);
    }

    .alert {
        border-radius: 10px;
    }

    label a {
        color: #3b82f6;
        text-decoration: none;
        font-weight: 500;
    }

    label a:hover {
        text-decoration: underline;
    }

    .img-thumbnail {
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .form-section-title {
        font-weight: 600;
        color: #3b82f6;
        border-left: 4px solid #3b82f6;
        padding-left: 8px;
        margin-bottom: 10px;
    }
</style>

<section id="registration">
    <div class="container">
        <div class="register-card">
            <div class="register-header">
                <h2>Join Adarsh Network ✨</h2>
                <p>Fill in your details to create your account</p>
            </div>

            <div class="register-body">

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('sign_up.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <h5 class="form-section-title mt-3">Basic Details</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="exampleFullName" class="form-label">Full Name</label>
                            <input type="text" id="exampleFullName" name="name" class="form-control" placeholder="Enter your name" value="{{ old('name') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleAadharNumber" class="form-label">Aadhar Number</label>
                            <input type="text" id="exampleAadharNumber" name="aadhar" class="form-control" placeholder="Enter Aadhar" value="{{ old('aadhar') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail4" class="form-label">Email Address (Username)</label>
                            <input type="email" id="exampleInputEmail4" name="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleMobileNumber" class="form-label">Mobile Number</label>
                            <input type="text" id="exampleMobileNumber" name="mobile" class="form-control" placeholder="Enter mobile" value="{{ old('mobile') }}">
                        </div>
                    </div>

                    <h5 class="form-section-title mt-4">Security Details</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter password">
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm password">
                        </div>
                    </div>

                    <h5 class="form-section-title mt-4">Address Details</h5>
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label for="exampleAddress" class="form-label">Address Line 1</label>
                            <input type="text" id="exampleAddress" name="address" class="form-control" placeholder="Enter address" value="{{ old('address') }}">
                        </div>
                        <div class="col-md-4">
                            <label for="examplePincode" class="form-label">Pincode</label>
                            <input type="text" id="examplePincode" name="pincode" class="form-control" placeholder="Enter pincode" value="{{ old('pincode') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleState" class="form-label">State</label>
                            <select name="state" id="exampleState" class="form-control">
                                <option value="">Select State</option>
                                <option value="UP" {{ old('state') == 'UP' ? 'selected' : '' }}>Uttar Pradesh</option>
                                <option value="MH" {{ old('state') == 'MH' ? 'selected' : '' }}>Maharashtra</option>
                                <option value="DL" {{ old('state') == 'DL' ? 'selected' : '' }}>Delhi</option>
                                <option value="KA" {{ old('state') == 'KA' ? 'selected' : '' }}>Karnataka</option>
                                <option value="RJ" {{ old('state') == 'RJ' ? 'selected' : '' }}>Rajasthan</option>
                                <!-- Add others as needed -->
                            </select>
                        </div>
                    </div>

                    <h5 class="form-section-title mt-4">Upload Documents</h5>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="ExamplePhoto" class="form-label">Your Photo</label>
                            <input type="file" id="ExamplePhoto" name="image" class="form-control" onchange="previewImage(event, 'photoPreview')">
                            <img id="photoPreview" class="img-thumbnail mt-2" style="display: none; width: 100px;">
                        </div>
                        <div class="col-md-3">
                            <label for="ExampleAadhar" class="form-label">Aadhar Photo</label>
                            <input type="file" id="ExampleAadhar" name="aadharImage" class="form-control" onchange="previewImage(event, 'aadharPreview')">
                            <img id="aadharPreview" class="img-thumbnail mt-2" style="display: none; width: 100px;">
                        </div>
                        <div class="col-md-3">
                            <label for="ExamplePen" class="form-label">Pan Photo</label>
                            <input type="file" id="ExamplePen" name="panImage" class="form-control" onchange="previewImage(event, 'panPreview')">
                            <img id="panPreview" class="img-thumbnail mt-2" style="display: none; width: 100px;">
                        </div>
                        <div class="col-md-3">
                            <label for="OfficePhoto" class="form-label">Office Photo</label>
                            <input type="file" id="OfficePhoto" name="officePhoto" class="form-control" onchange="previewImage(event, 'officePhotoPreview')">
                            <img id="officePhotoPreview" class="img-thumbnail mt-2" style="display: none; width: 100px;">
                        </div>
                    </div>

                    <div class="form-check mt-4">
                        <input type="checkbox" required class="form-check-input" id="agree">
                        <label for="agree" class="form-check-label">I agree to the <a href="#">Privacy Policy</a></label>
                    </div>

                    <div class="d-grid my-4">
                        <button class="btn btn-signup btn-lg">Sign Up</button>
                    </div>

                    <div class="text-center text-muted">
                        Already have an account? <a href="{{ url('login') }}">Log in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    function previewImage(event, id) {
        const reader = new FileReader();
        reader.onload = function () {
            const output = document.getElementById(id);
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@endsection
