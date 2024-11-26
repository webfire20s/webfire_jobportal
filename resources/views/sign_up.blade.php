@extends('web')

@section('title', 'Home Page')

@section('content')
    <!-- billboard start -->
    <section id="billboard">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center">
                <div class="panel mt-7" style="background-color:white">
                    <div class="panel-heading mt-3">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <h2 style="color:black;" class="text-center">Registration</h2>
                    </div>
                    <div class="panel-body">
                        <form id="form4" class="form-group flex-wrap p-3" action="{{ route('sign_up.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-input col-lg-12 my-4">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label for="exampleFullName" class="form-label fs-6 text-uppercase fw-bold text-black">Full Name</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" id="exampleFullName" name="name" placeholder="Enter Name" class="form-control ps-3" value="{{ old('name') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-input col-lg-12 my-4">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label for="exampleAadharNumber" class="form-label fs-6 text-uppercase fw-bold text-black">Aadhar Number</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" id="exampleAadharNumber" name="aadhar" placeholder="Enter Aadhar" class="form-control ps-3" value="{{ old('aadhar') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-input col-lg-12 my-4">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label for="exampleInputEmail4" class="form-label fs-6 text-uppercase fw-bold text-black">Email Address</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" id="exampleInputEmail4" name="email" placeholder="Email" class="form-control ps-3" value="{{ old('email') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-input col-lg-12 my-4">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label for="password" class="form-label fs-6 text-uppercase fw-bold text-black">Password</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="password" id="password" name="password" placeholder="Password" class="form-control ps-3">
                                    </div>
                                </div>
                            </div>
                            <div class="form-input col-lg-12 my-4">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label for="password_confirmation" class="form-label fs-6 text-uppercase fw-bold text-black">Password Confirmation</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="password_confirmation" class="form-control ps-3">
                                    </div>
                                </div>
                            </div>

                            <div class="form-input col-lg-12 my-4">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label for="exampleMobileNumber" class="form-label fs-6 text-uppercase fw-bold text-black">Mobile Number</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" id="exampleMobileNumber" name="mobile" placeholder="Enter Mobile" class="form-control ps-3" value="{{ old('mobile') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-input col-lg-12 my-4">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label for="exampleAddress" class="form-label fs-6 text-uppercase fw-bold text-black">Address Line 1</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" id="exampleAddress" name="address" placeholder="Enter Address" class="form-control ps-3" value="{{ old('address') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-input col-lg-12 my-4">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label for="exampleState" class="form-label fs-6 text-uppercase fw-bold text-black">State</label>
                                    </div>
                                    <div class="col-lg-9">
                                        
                                        <!-- States of India -->

                                        <select name="state" class="form-control" id="exampleState">
    <option value="">Select State</option>
    <option value="AP" {{ old('state') == 'AP' ? 'selected' : '' }}>Andhra Pradesh</option>
    <option value="AR" {{ old('state') == 'AR' ? 'selected' : '' }}>Arunachal Pradesh</option>
    <option value="AS" {{ old('state') == 'AS' ? 'selected' : '' }}>Assam</option>
    <option value="BR" {{ old('state') == 'BR' ? 'selected' : '' }}>Bihar</option>
    <option value="CT" {{ old('state') == 'CT' ? 'selected' : '' }}>Chhattisgarh</option>
    <option value="GA" {{ old('state') == 'GA' ? 'selected' : '' }}>Goa</option>
    <option value="HR" {{ old('state') == 'HR' ? 'selected' : '' }}>Haryana</option>
    <option value="HP" {{ old('state') == 'HP' ? 'selected' : '' }}>Himachal Pradesh</option>
    <option value="JK" {{ old('state') == 'JK' ? 'selected' : '' }}>Jammu and Kashmir</option>
    <option value="JH" {{ old('state') == 'JH' ? 'selected' : '' }}>Jharkhand</option>
    <option value="KA" {{ old('state') == 'KA' ? 'selected' : '' }}>Karnataka</option>
    <option value="KL" {{ old('state') == 'KL' ? 'selected' : '' }}>Kerala</option>
    <option value="MP" {{ old('state') == 'MP' ? 'selected' : '' }}>Madhya Pradesh</option>
    <option value="MH" {{ old('state') == 'MH' ? 'selected' : '' }}>Maharashtra</option>
    <option value="MN" {{ old('state') == 'MN' ? 'selected' : '' }}>Manipur</option>
    <option value="ML" {{ old('state') == 'ML' ? 'selected' : '' }}>Meghalaya</option>
    <option value="MZ" {{ old('state') == 'MZ' ? 'selected' : '' }}>Mizoram</option>
    <option value="NL" {{ old('state') == 'NL' ? 'selected' : '' }}>Nagaland</option>
    <option value="OR" {{ old('state') == 'OR' ? 'selected' : '' }}>Odisha</option>
    <option value="PB" {{ old('state') == 'PB' ? 'selected' : '' }}>Punjab</option>
    <option value="RJ" {{ old('state') == 'RJ' ? 'selected' : '' }}>Rajasthan</option>
    <option value="SK" {{ old('state') == 'SK' ? 'selected' : '' }}>Sikkim</option>
    <option value="TN" {{ old('state') == 'TN' ? 'selected' : '' }}>Tamil Nadu</option>
    <option value="TG" {{ old('state') == 'TG' ? 'selected' : '' }}>Telangana</option>
    <option value="TR" {{ old('state') == 'TR' ? 'selected' : '' }}>Tripura</option>
    <option value="UT" {{ old('state') == 'UT' ? 'selected' : '' }}>Uttarakhand</option>
    <option value="UP" {{ old('state') == 'UP' ? 'selected' : '' }}>Uttar Pradesh</option>
    <option value="WB" {{ old('state') == 'WB' ? 'selected' : '' }}>West Bengal</option>
    <option value="AN" {{ old('state') == 'AN' ? 'selected' : '' }}>Andaman and Nicobar Islands</option>
    <option value="CH" {{ old('state') == 'CH' ? 'selected' : '' }}>Chandigarh</option>
    <option value="DN" {{ old('state') == 'DN' ? 'selected' : '' }}>Dadra and Nagar Haveli</option>
    <option value="DD" {{ old('state') == 'DD' ? 'selected' : '' }}>Daman and Diu</option>
    <option value="DL" {{ old('state') == 'DL' ? 'selected' : '' }}>Delhi</option>
    <option value="LD" {{ old('state') == 'LD' ? 'selected' : '' }}>Lakshadweep</option>
    <option value="PY" {{ old('state') == 'PY' ? 'selected' : '' }}>Puducherry</option>
</select>

                                    </div>
                                </div>
                            </div>

                            <div class="form-input col-lg-12 my-4">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label for="examplePincode" class="form-label fs-6 text-uppercase fw-bold text-black">Pincode</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" id="examplePincode" name="pincode" placeholder="Enter Pincode" class="form-control ps-3" value="{{ old('pincode') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-input col-lg-12 my-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="ExamplePhoto" class="form-label fs-6 text-uppercase fw-bold text-black">Your Photo</label>
                                        <input type="file" id="ExamplePhoto" name="image" class="form-control ps-3" onchange="previewImage(event, 'photoPreview')">
                                        <img id="photoPreview" class="img-thumbnail mt-2" style="display: none; width: 100px; height: auto;">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="ExampleAadhar" class="form-label fs-6 text-uppercase fw-bold text-black">Aadhar Photo</label>
                                        <input type="file" id="ExampleAadhar" name="aadharImage" class="form-control ps-3" onchange="previewImage(event, 'aadharPreview')">
                                        <img id="aadharPreview" class="img-thumbnail mt-2" style="display: none; width: 100px; height: auto;">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="ExamplePen" class="form-label fs-6 text-uppercase fw-bold text-black">Pan Photo</label>
                                        <input type="file" id="ExamplePen" name="panImage" class="form-control ps-3" onchange="previewImage(event, 'panPreview')">
                                        <img id="panPreview" class="img-thumbnail mt-2" style="display: none; width: 100px; height: auto;">
                                    </div>
                                    <div class="col-lg-4">
    <label for="OfficePhoto" class="form-label fs-6 text-uppercase fw-bold text-black">Office Photo</label>
    <input type="file" id="OfficePhoto" name="officePhoto" class="form-control ps-3" onchange="previewImage(event, 'officePhotoPreview')">
    <img id="officePhotoPreview" class="img-thumbnail mt-2" style="display: none; width: 100px; height: auto;">
</div>

                                </div>
                            </div>

                            <label class="py-3">
                                <input type="checkbox" required class="d-inline">
                                <span class="label-body text-black">I agree to the <a href="#" class="text-black border-bottom">Privacy Policy</a></span>
                            </label>

                            <div class="d-grid my-3">
                                <button class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
