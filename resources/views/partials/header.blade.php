<!-- nav bar start  -->
<header id="nav" class="site-header position-fixed text-white bg-dark">
    <nav id="navbar-example2" class="navbar navbar-expand-lg py-2">

        <div class="container ">

            <a class="navbar-brand" href="{{ asset('/') }}"><img src="{{ asset('public/logo1.png') }}" height="80px"
                    alt="image"></a>


            <button class="navbar-toggler text-white" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2"
                aria-label="Toggle navigation"><ion-icon name="menu-outline"
                    style="font-size: 30px;"></ion-icon></button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2"
                aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav align-items-center justify-content-end flex-grow-1">
    @guest
        <!-- Show public pages if the user is not logged in -->
        <li class="nav-item">
            <a class="nav-link active me-md-4" href="{{ url('') }}">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link me-md-4" href="{{ url('#about-us') }}">About</a>
        </li>

        <li class="nav-item">
            <a class="nav-link me-md-4" href="{{ url('#help') }}">Contact</a>
        </li>
        @foreach($pages as $page)
            <li class="nav-item">
                <a class="nav-link me-md-4" href="{{ route('page.show', $page->slug) }}">{{ ucwords($page->title) }}</a>
            </li>
        @endforeach

        <!-- Show login and sign-up links for guests -->
        <li class="nav-item">
            <a class="nav-link mx-md-4" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
        </li>
        <li class="nav-item">
            <a class="btn-medium btn btn-primary" href="{{ url('sign_up') }}">Sign up</a>
        </li>
    @endguest

    @auth
        <!-- Show user-related menu items if the user is logged in -->
        @if(auth()->user()->role === 'user')
        <li class="nav-item">
            <a class="nav-link me-md-4" href="{{ url('user') }}">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link me-md-4" href="{{ url('user/plans') }}">Plans & Transaction</a>
        </li>
        <li class="nav-item">
            <a class="nav-link me-md-4" href="{{ url('user/profile') }}">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link me-md-4" href="{{ url('user/change-password') }}">Settings</a>
        </li>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ url('storage/app/public/') . '/' . (auth()->user()->photo ?? 'https://github.com/mdo.png') }}" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>{{ auth()->user()->name }}</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="{{ url('user') }}">Dashboard</a></li>
                    <li><a class="dropdown-item" href="{{ url('user/plans') }}">Plans & Transaction</a></li>
                    <li><a class="dropdown-item" href="{{ url('user/profile') }}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{ url('user/change-password') }}">Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ url('logout') }}">Sign out</a></li>
                </ul>
            </div>
        @endif
    @endauth
</ul>

                </div>
            </div>


        </div>
    </nav>
</header>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="color:black;">Login</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="tabs-listing mt-4">
                    <nav>
                        <div class="nav nav-tabs d-flex justify-content-center border-0" id="nav-tab" role="tablist">
                            <!-- <button class="btn btn-outline-primary text-uppercase me-3 active"
                                                        id="nav-sign-in-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-sign-in" type="button" role="tab"
                                                        aria-controls="nav-sign-in" aria-selected="true">Log
                                                        In</button> -->
                            <!-- <button class="btn btn-outline-primary text-uppercase"
                                                        id="nav-register-tab" data-bs-toggle="tab"
                                                        data-bs-target="#nav-register" type="button" role="tab"
                                                        aria-controls="nav-register" aria-selected="false">Sign
                                                        Up</button> -->
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-sign-in" role="tabpanel"
                            aria-labelledby="nav-sign-in-tab">
                            <form id="form1" class="form-group flex-wrap p-3 " method="POST"
                                action="{{ url('login') }}">
                                @csrf
                                <div class="form-input col-lg-12 my-4">
                                    <label for="exampleInputEmail1"
                                        class="form-label fs-6 text-uppercase fw-bold text-black">Email
                                        Address</label>
                                    <input type="text" id="exampleInputEmail1" name="email" placeholder="Email"
                                        class="form-control ps-3">
                                </div>
                                <div class="form-input col-lg-12 my-4">
                                    <label for="inputPassword1"
                                        class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                                    <input type="password" id="inputPassword1" placeholder="Password" name="password"
                                        class="form-control ps-3" aria-describedby="passwordHelpBlock">
                                    <div id="passwordHelpBlock" class="form-text text-center">
                                        <!-- <a href="#" class=" password">Forgot Password ?</a> -->
                                    </div>

                                </div>
                                <label class="py-3">
                                    <!-- <input type="checkbox" required="" class="d-inline">
                                                            <span class="label-body text-black">Remember Me</span> -->
                                </label>
                                <div class="d-grid my-3">
                                    <button
                                        class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Log
                                        In</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">
                            <form id="form2" class="form-group flex-wrap p-3 ">
                                <div class="form-input col-lg-12 my-4">
                                    <label for="exampleInputEmail2"
                                        class="form-label fs-6 text-uppercase fw-bold text-black">Email
                                        Address</label>
                                    <input type="text" id="exampleInputEmail2" name="email" placeholder="Email"
                                        class="form-control ps-3">
                                </div>
                                <div class="form-input col-lg-12 my-4">
                                    <label for="inputPassword2"
                                        class="form-label  fs-6 text-uppercase fw-bold text-black">Password</label>
                                    <input type="password" id="inputPassword2" placeholder="Password"
                                        class="form-control ps-3" aria-describedby="passwordHelpBlock">
                                </div>
                                <label class="py-3">
                                    <input type="checkbox" required="" class="d-inline">
                                    <span class="label-body text-black">I agree to the <a href="#"
                                            class="text-black password border-bottom">Privacy
                                            Policy</a>
                                    </span>
                                </label>
                                <div class="d-grid my-3">
                                    <button
                                        class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Sign
                                        Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="tabs-listing mt-4">
                    <nav>
                        <div class="nav nav-tabs d-flex justify-content-center border-0" id="nav-tab2" role="tablist">
                            <button class="btn btn-outline-primary text-uppercase active" id="nav-register-tab2"
                                data-bs-toggle="tab" data-bs-target="#nav-register2" type="button" role="tab"
                                aria-controls="nav-register2" aria-selected="true">Registration</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent1">
                        <!-- Sign Up Form -->
                        <div class="tab-pane fade active show" id="nav-register2" role="tabpanel"
                            aria-labelledby="nav-register-tab2">
                            <form id="form4" class="form-group flex-wrap p-3">
                                <div class="form-input col-lg-12 my-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="exampleFullName"
                                                class="form-label fs-6 text-uppercase fw-bold text-black">Full
                                                Name</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" id="exampleFullName" name="name" placeholder="Enter Name"
                                                class="form-control ps-3">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input col-lg-12 my-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="exampleAadharNumber"
                                                class="form-label fs-6 text-uppercase fw-bold text-black">Aadhar
                                                Number</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" id="exampleAadharNumber" name="aadhar"
                                                placeholder="Enter Aadhar " class="form-control ps-3">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input col-lg-12 my-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="exampleInputEmail4"
                                                class="form-label fs-6 text-uppercase fw-bold text-black">Email
                                                Address</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" id="exampleInputEmail4" name="email" placeholder="Email"
                                                class="form-control ps-3">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input col-lg-12 my-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="exampleMobileNumber"
                                                class="form-label fs-6 text-uppercase fw-bold text-black">Mobile
                                                Number</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" id="exampleMobileNumber" name="mobile"
                                                placeholder="Enter Mobile" class="form-control ps-3">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input col-lg-12 my-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="exampleAddress"
                                                class="form-label fs-6 text-uppercase fw-bold text-black">Address
                                                Line 1</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" id="exampleAddress" name="Address"
                                                placeholder="Enter Address" class="form-control ps-3">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input col-lg-12 my-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="exampleState"
                                                class="form-label fs-6 text-uppercase fw-bold text-black">State</label>
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
                                            <label for="examplePincode"
                                                class="form-label fs-6 text-uppercase fw-bold text-black">Pincode</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="pincode" class="form-control" id="examplePincode"
                                                name="pincode" placeholder="Enter Pincode" class="form-control ps-3">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-input col-lg-12 my-4">
                                                            <div class="col-lg-3">
                                                                <label for="inputPassword4" class="form-label fs-6 text-uppercase fw-bold text-black">Password</label>
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <input type="password" id="inputPassword4" placeholder="Password" class="form-control ps-3" aria-describedby="passwordHelpBlock">
                                                            </div>
                                                        </div> -->
                                <div class="form-input col-lg-12 my-4">
                                    <div class="row">
                                        <!-- Your Photo Upload and Preview -->
                                        <div class="col-lg-4">
                                            <label for="ExamplePhoto"
                                                class="form-label fs-6 text-uppercase fw-bold text-black">Your
                                                Photo</label>
                                            <input type="file" id="ExamplePhoto" name="image" class="form-control ps-3"
                                                onchange="previewImage(event, 'photoPreview')">
                                            <img id="photoPreview" class="img-thumbnail mt-2"
                                                style="display: none; width: 100px; height: auto;">
                                        </div>

                                        <!-- Aadhar Photo Upload and Preview -->
                                        <div class="col-lg-4">
                                            <label for="ExampleAadhar"
                                                class="form-label fs-6 text-uppercase fw-bold text-black">Aadhar
                                                Photo</label>
                                            <input type="file" id="ExampleAadhar" name="aadharImage"
                                                class="form-control ps-3"
                                                onchange="previewImage(event, 'aadharPreview')">
                                            <img id="aadharPreview" class="img-thumbnail mt-2"
                                                style="display: none; width: 100px; height: auto;">
                                        </div>

                                        <!-- Pan Photo Upload and Preview -->
                                        <div class="col-lg-4">
                                            <label for="ExamplePen"
                                                class="form-label fs-6 text-uppercase fw-bold text-black">Pan
                                                Photo</label>
                                            <input type="file" id="ExamplePen" name="panImage" class="form-control ps-3"
                                                onchange="previewImage(event, 'panPreview')">
                                            <img id="panPreview" class="img-thumbnail mt-2"
                                                style="display: none; width: 100px; height: auto;">
                                        </div>
                                    </div>
                                </div>
                                <label class="py-3">
                                    <input type="checkbox" required class="d-inline">
                                    <span class="label-body text-black">I agree to the <a href="#"
                                            class="text-black border-bottom">Privacy
                                            Policy</a></span>
                                </label>
                                <div class="d-grid my-3">
                                    <button
                                        class="btn btn-primary btn-lg btn-dark text-uppercase btn-rounded-none fs-6">Sign
                                        Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>