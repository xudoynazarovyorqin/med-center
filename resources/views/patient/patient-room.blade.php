@extends('patient.showPatient')


@section('content')
<div class="container">

  @if($patient->first()->status == 0)
  <h2 style="text-align: center">Your request is being considered by doctors</h2>
  @endif 
  @if($patient->first()->status == 5)
  <h2 style="text-align: center">Diagnoses given to you</h2><hr>
  <p>According to the diagnosis made by the main doctor <strong>{{$patient->diagnos_main['doctordiagnosis']}}</strong>.The Main doctor will suggest you <strong>{{$patient->diagnos_main['pills']}}</strong> pills. He says as a tip to you <strong>{{$patient->diagnos_main['advice']}}</strong></p><hr>
  <p>According to the diagnosis made by the eye doctor <strong>{{$patient->diagnos_eye['doctordiagnosis']}}</strong>.The Eye doctor will suggest you <strong>{{$patient->diagnos_eye['pills']}}</strong> pills. He says as a tip to you <strong>{{$patient->diagnos_eye['advice']}}</strong></p><hr>
  <p>According to the diagnosis made by the x-ray doctor <strong>{{$patient->diagnos_xray['doctordiagnosis']}}</strong>.The X-ray doctor will suggest you <strong>{{$patient->diagnos_xray['pills']}}</strong> pills. He says as a tip to you <strong>{{$patient->diagnos_xray['advice']}}</strong></p><hr>
  <p>According to the diagnosis made by the cardiolog doctor <strong>{{$patient->diagnos_cardiolog['doctordiagnosis']}}</strong>.The Cardiolog doctor will suggest you <strong>{{$patient->diagnos_cardiolog['pills']}}</strong> pills. He says as a tip to you <strong>{{$patient->diagnos_cardiolog['advice']}}</strong></p>
  @endif          
         
</div>
        
     
@endsection