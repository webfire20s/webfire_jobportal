<nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
      <div class="container-fluid"> <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i
                class="bi bi-list"></i> </a> </li>
          <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Home</a> </li>
          <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Contact</a> </li>
        </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
          <li class="nav-item"> <a class="nav-link" data-widget="navbar-search" href="#" role="button"> <i
                class="bi bi-search"></i> </a> </li> <!--end::Navbar Search--> <!--begin::Messages Dropdown Menu-->
          
          <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize"
                class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit"
                style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
          <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"> <span class="d-none d-md-inline">Admin Name</span> </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
              <li class="user-header text-bg-primary"> 
                <p>
                  Name - Admin
                  <!-- <small>Member since Nov. 2023</small> -->
                </p>
              </li> <!--end::User Image--> <!--begin::Menu Body-->
              <li class="user-body"> <!--begin::Row-->
                <div class="row">
                  <div class="col-4 text-center"> <a href="#">Facebook</a> </div>
                  <div class="col-4 text-center"> <a href="#">Instagram</a> </div>
                  <div class="col-4 text-center"> <a href="#">Youtube</a> </div>
                </div> <!--end::Row-->
              </li> <!--end::Menu Body--> <!--begin::Menu Footer-->
              <li class="user-footer"> <a href="#" class="btn btn-default btn-flat">Profile</a> 
              <a onclick="return confirm('Are you sure ?')" href="{{ url('admin/logout') }}"
                  class="btn btn-default btn-flat float-end">Sign out</a> </li> <!--end::Menu Footer-->
            </ul>
          </li> <!--end::User Menu Dropdown-->
        </ul> <!--end::End Navbar Links-->
      </div> <!--end::Container-->
    </nav>