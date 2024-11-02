@extends('web')

@section('title', 'Home Page')

@section('content')
    <!-- billboard start  -->
    <section id="billboard">
        <div class="container ">
            <div class="row flex-lg-row-reverse align-items-center ">
                <div class="panel mt-7" style="background-color:white">
                    <div class="panel-heading mt-3" >
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
                                <input type="text" id="exampleFullName" name="name" placeholder="Enter Name" class="form-control ps-3">
                            </div>
                            </div>
                        </div>
                        <div class="form-input col-lg-12 my-4">
                            <div class="row">
                            <div class="col-lg-3">
                                <label for="exampleAadharNumber" class="form-label fs-6 text-uppercase fw-bold text-black">Aadhar Number</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" id="exampleAadharNumber" name="aadhar" placeholder="Enter Aadhar "  class="form-control ps-3">
                            </div>
                            </div>
                        </div>
                        <div class="form-input col-lg-12 my-4">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for="exampleInputEmail4" class="form-label fs-6 text-uppercase fw-bold text-black">Email Address</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" id="exampleInputEmail4" name="email" placeholder="Email" class="form-control ps-3">
                                </div>    
                            </div>
                        </div>
                        <div class="form-input col-lg-12 my-4">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for="exampleMobileNumber" class="form-label fs-6 text-uppercase fw-bold text-black">Mobile Number</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" id="exampleMobileNumber" name="mobile" placeholder="Enter Mobile" class="form-control ps-3">
                                </div>    
                            </div>
                        </div>
                        <div class="form-input col-lg-12 my-4">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for="exampleAddress" class="form-label fs-6 text-uppercase fw-bold text-black">Address Line 1</label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" id="exampleAddress" name="Address" placeholder="Enter Address" class="form-control ps-3"> 
                                </div>    
                            </div>
                        </div>
                        <div class="form-input col-lg-12 my-4">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for="exampleOfficeAddress" class="form-label fs-6 text-uppercase fw-bold text-black">Office Address </label>
                                </div>
                                <div class="col-lg-9">
                                    <input type="text" id="exampleOfficeAddress" name="OfficeAddress" placeholder="Enter Office Address" class="form-control ps-3"> 
                                </div>    
                            </div>
                        </div>
                        <div class="form-input col-lg-12 my-4">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label for="exampleState" class="form-label fs-6 text-uppercase fw-bold text-black">State</label>
                                </div>
                                <div class="col-lg-9">
                                    <select name="state" class="form-control" id="exampleState">
                                        <option value="">Select State</option>
                                        <option value="">Uttar Pradesh</option>
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
                                    <input type="pincode" class="form-control" id="examplePincode" name="pincode" placeholder="Enter Pincode" class="form-control ps-3">
                                </div>       
                            </div>
                        </div>
                
                        <div class="form-input col-lg-12 my-4">
                            <div class="row">
                                <!-- Your Photo Upload and Preview -->
                                <div class="col-lg-4">
                                    <label for="ExamplePhoto" class="form-label fs-6 text-uppercase fw-bold text-black">Your Photo</label>
                                    <input type="file" id="ExamplePhoto" name="image" class="form-control ps-3" onchange="previewImage(event, 'photoPreview')">
                                    <img id="photoPreview" class="img-thumbnail mt-2" style="display: none; width: 100px; height: auto;">
                                </div>

                                <!-- Aadhar Photo Upload and Preview -->
                                <div class="col-lg-4">
                                    <label for="ExampleAadhar" class="form-label fs-6 text-uppercase fw-bold text-black">Aadhar Photo</label>
                                    <input type="file" id="ExampleAadhar" name="aadharImage" class="form-control ps-3" onchange="previewImage(event, 'aadharPreview')">
                                    <img id="aadharPreview" class="img-thumbnail mt-2" style="display: none; width: 100px; height: auto;">
                                </div>

                                <!-- Pan Photo Upload and Preview -->
                                <div class="col-lg-4">
                                    <label for="ExamplePen" class="form-label fs-6 text-uppercase fw-bold text-black">Pan Photo</label>
                                    <input type="file" id="ExamplePen" name="panImage" class="form-control ps-3" onchange="previewImage(event, 'panPreview')">
                                    <img id="panPreview" class="img-thumbnail mt-2" style="display: none; width: 100px; height: auto;">
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
