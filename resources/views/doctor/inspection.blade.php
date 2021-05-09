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
    <div class="container ">
      
      <h2 class="p-3">Inspection</h2>
      <hr>
      <form action="/patient/edit/{{$patient->id}}" method="get">
        @csrf
      <div class="row">
        <div class="col-md-6">
          <p>Name: {{$patient->name}}</p>
          <p>Surname: {{$patient->surname}}</p>
          <p>Phone number:{{$patient->phone}}</p>
          <p>Id: {{$patient->id}}</p>
          {{-- <p>{{$patient->diagnos_main}}</p> --}}
        </div>
        <div class="col-md-6">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">pills</th>
                  <th scope="col">diagnosis</th>
                  <th scope="col">advice</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @if($patient->diagnos_eye)
                  <th scope="row">Eye Doctor</th>
                  <td>{{$patient->diagnos_eye['pills']}}</td>
                  <td>{{$patient->diagnos_eye['doctordiagnosis']}}</td>
                  <td>{{$patient->diagnos_eye['advice']}}</td>
                  @endif
                </tr>
                <tr>
                  @if($patient->diagnos_cardiolog)
                  <th scope="row">Cardiolog</th>
                  <td>{{$patient->diagnos_cardiolog['pills']}}</td>
                  <td>{{$patient->diagnos_cardiolog['doctordiagnosis']}}</td>
                  <td>{{$patient->diagnos_cardiolog['advice']}}</td>
                  @endif
                </tr>
                <tr>
                  @if($patient->diagnos_xray)
                  <th scope="row">X-ray Doctor</th>
                  <td>{{$patient->diagnos_xray['pills']}}</td>
                  <td>{{$patient->diagnos_xray['doctordiagnosis']}}</td>
                  <td>{{$patient->diagnos_xray['advice']}}</td>
                  @endif
                </tr>
                
              </tbody>
            </table>
        </div>
      </div>
      
     
            <textarea name="pills" id="textarea" cols="30" rows="5" placeholder="pills"></textarea>
            <textarea name="doctordiagnosis" id="textarea" cols="30" rows="5" placeholder="diagnosis"></textarea>
            <textarea name="advice" id="textarea" cols="30" rows="5" placeholder="advice"></textarea>
            <button type="submit" class="btn btn-primary px-3 " style="float: right; margin-top: 90px">Send</button>  
      </form>
        <hr>
    </div>
@endsection