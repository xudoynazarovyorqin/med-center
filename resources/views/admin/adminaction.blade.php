@extends('admin.admin')

@section('content')

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Regions</th>
            <th scope="col">Applied for a medical examination</th>
            <th scope="col">Medical examination by Eye doctor</th>
            <th scope="col">Medical examination by X-ray doctor </th>
            <th scope="col">Medical examination by Cardiolog </th>
            <th scope="col">Medical examination by Main Doctor </th>
            <th scope="col">Completed a medical examination</th>
          </tr>
        </thead>
        <tbody>
          
            
            @foreach ($patients as $patient)
            <tr>
              <td>{{$patient->region_name}}</td>
              <td>{{$patient->patient_0}}</td>
              <td>{{$patient->patient_1}}</td>
              <td>{{$patient->patient_2}}</td>
              <td>{{$patient->patient_3}}</td>
              <td>{{$patient->patient_4}}</td>
              <td>{{$patient->patient_5}}</td>
            </tr>
            @endforeach
            
            
         
          
          {{-- @foreach ($patient_1 as $pat)
              {{$pat}}
          @endforeach --}}
        </tbody>
      </table>

@endsection