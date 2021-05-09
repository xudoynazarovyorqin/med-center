@extends('show')

@section('sidebar')
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <i class="fas fa-users-cog bg-dark fa-2x"></i>
        </div>
        <div class="info">
          <a href="#" class="d-block">
            {{-- {{Auth::user()->login}} --}}
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/admin-panel" class="nav-link ">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Main Doctor
              </p>
            </a>            
          </li>
          <li class="nav-item menu-open">
            <a href="/admin-eye" class="nav-link ">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Eye Doctor
              </p>
            </a>            
          </li>
          <li class="nav-item menu-open">
            <a href="/admin-cardiolog" class="nav-link ">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Cardiolog
              </p>
            </a>            
          </li>
          <li class="nav-item menu-open">
            <a href="/admin-xray" class="nav-link ">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                X-ray Doctor
              </p>
            </a>            
          </li>
          <li class="nav-item">
            <a href="/admin-actions" class="nav-link">
              <i class="far fa-eye"></i>
              <p>
                Actions
                <span class="right badge badge-danger">live</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
@endsection