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
      <h2 class="p-3">New Patients</h2>
      <hr>
      <div class="list-group p-0">
       
            
        
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col" style="width: 100px">Id</th>
              <th scope="col" style="width: 200px">First Name</th>
              <th scope="col" style="width: 200px">Last Name</th>
              <th scope="col" style="width: 200px">Handle</th>
              <th scope="col" style="width: 200px"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($patients as $patient)
            <tr >
              <th scope="row">{{$patient->id}}</th>
              <td>{{$patient->name}}</a></td>
              <td>{{$patient->surname}}</a></td>
              <td>{{$patient->phone}}</td>
              <form action="/patient/edit/{{$patient->id}}" method="get">
              <td><button type="submit" class="btn btn-primary">Start medical examination</button></td>
              </form>
            </tr>
            @endforeach
          </tbody>
        </table>
        
        
        
      </div>


    </div>
@endsection