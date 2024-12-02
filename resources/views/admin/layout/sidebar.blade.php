<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
  <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="{{ url('admin')}}" class="brand-link">
      <!--begin::Brand Image-->
      <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">Admin</span>
      <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2"> <!--begin::Sidebar Menu-->
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
        <li class="nav-item"> <a href="{{ url('admin')}}" class="nav-link"> <i class="nav-icon bi bi-speedometer"></i>
            <p>Dashboard</p>
          </a> </li>
        <li class="nav-header">Main</li>
        <li class="nav-item">
            <a href="{{ url('admin/slider')}}" class="nav-link"><i class="nav-icon bi bi-image"></i>
                <p>Slider</p>
            </a>
        </li>
        <li class="nav-item"> <a href="{{ url('admin/pages') }}" class="nav-link"> <i class="nav-icon bi bi-list"></i>
            <p>Pages</p>
          </a> </li>
        <li class="nav-item"> <a href="{{ url('admin/category') }}" class="nav-link"> <i
              class="nav-icon bi bi-list"></i>
            <p>Category</p>
          </a> </li>
        <li class="nav-item"> <a href="{{ url('admin/poster') }}" class="nav-link"> <i class="nav-icon bi bi-image"></i>
            <p>Poster</p>
          </a> </li>

        <li class="nav-item"> <a href="{{ url('admin/plan') }}" class="nav-link"> <i
              class="nav-icon bi bi-star-half"></i>
            <p>Plans</p>
          </a> </li>
        <li class="nav-item"> <a href="{{ url('admin/transaction') }}" class="nav-link"> <i
              class="nav-icon bi bi-list"></i>
            <p>Transactions</p>
          </a> </li>
        <li class="nav-item"> <a href="{{ url('admin/user') }}" class="nav-link"> <i
              class="nav-icon bi bi-person-fill"></i>
            <p>User</p>
          </a> </li>
        <li class="nav-header">Settings</li>

        <li class="nav-item"> <a href="{{ url('admin/settings') }}" class="nav-link"> <i
              class="nav-icon bi bi-gear"></i>
            <p>Setting</p>
          </a> </li>
        <li class="nav-item"> <a href="{{ url('admin/settings/notices') }}" class="nav-link"> <i
              class="nav-icon bi bi-list"></i>
            <p>Notice</p>
          </a> </li>
        <li class="nav-item"> <a href="{{ url('admin/latest_news') }}" class="nav-link"> <i
              class="nav-icon bi bi-list"></i>
            <p>Latest News</p>
          </a> </li>
          <li class="nav-item"> <a href="{{ url('admin/forms') }}" class="nav-link"> <i
              class="nav-icon bi bi-list"></i>
            <p>Forms</p>
          </a> </li>

      </ul> <!--end::Sidebar Menu-->
    </nav>
  </div> <!--end::Sidebar Wrapper-->
</aside>