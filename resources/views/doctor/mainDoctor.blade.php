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
            <a href="/newPatient" class="nav-link ">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                New patients
              </p>
            </a>            
          </li>
        </ul>
      </nav>
       <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="/home" class="nav-link ">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Completed patient
              </p>
            </a>            
          </li>
        </ul>
      </nav>
    </div>
@endsection


@section('content')
    <div class="container">
      <h2 class="p-3">Complated Patients</h2>
      <hr>
      <div class="list-group p-0">
       
            
        
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Handle</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($patient_complate as $patient)
            <a href="patient/{{$patient->id}}"><tr >
              <th scope="row"><a href="patient/{{$patient->id}}">{{$patient->id}}</a></th>
              <td><a href="patient/{{$patient->id}}">{{$patient->name}}</a></td>
              <td><a href="patient/{{$patient->id}}">{{$patient->surname}}</a></td>
              <td><a href="patient/{{$patient->id}}">{{$patient->phone}}</a></td>
            </tr></a>
            @endforeach
          </tbody>
        </table>
        
        
        {{-- <h3 class="p-0"><a class="list-group-item" href="patient/{{$patient->id}}">{{$patient->name}} {{$patient->surname}}</a></h3> --}}
        
      </div>


    </div>
@endsection