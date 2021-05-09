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
            {{Auth::user()->login}}
          </a>
        </div>
      </div>

    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="/home" class="nav-link ">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                New patients
              </p>
            </a>            
          </li>
        </ul>
      </nav>
    </div>
@endsection


@section('content')
    <div class="container">
      <h2 class="p-3">Patients</h2>
      <hr>
      <div class="list-group">
        @foreach ($patients as $patient)
              
        
        <h3 class="p-0"><a class="list-group-item" href="patient/{{$patient->id}}">{{$patient->name}} {{$patient->surname}}</a></h3>
        @endforeach
      </div>


    </div>
@endsection