@extends('patient.showPatient')

@section('content')   
<form action="{{route('room-post')}}" method="POST" >    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow ">              
                <div class="card-body py-4">     
                    <h4 class="text-center bg-yellow">More information</h4>                       
                        <div class="form-group row " style="margin-left:35px">
                              {{csrf_field()}}
                              <div class="form-row">
                                <div class="col">
                                  <div class="md-form mt-0">
                                    <input type="text" name="phone" value="{{$phone}}" class="form-control" placeholder="First name" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="md-form mt-0">
                                    <input type="text" name="name" class="form-control" placeholder="First name" required>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="md-form mt-0">
                                    <input type="text" name="surname" class="form-control" placeholder="Last name" required>
                                  </div>
                                </div>
                              </div>
                              </div>
                              <div class="form-group row " style="margin-left:100px">
                              <div class="form-row" >
                                <div class="col">
                                  <div class="md-form mt-1">
                                    <select id="region" name="region_id" class="form-control input-lg dynamic" data-dependent="city">
                                      <option disabled selected value>select region</option>
                                      @foreach($regions as $region )
                                      <option value="{{ $region->id }}">{{ $region->name_uz }}</option>
                                      @endforeach
                                    </select>                                
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="md-form mt-1">
                                    <select id="city" name="city_id" class="form-control ml-1 " style="width: 200px" required>
                                      <option disabled selected value>select city</option>
                                      @foreach($cities as $city )
                                      <option value="{{ $city->id }}">{{ $city->name_uz }}</option>
                                      @endforeach
                                    </select>                                 
                                  </div>
                                </div>
                              </div>      
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
            </div>
      {{-- bundan keyin qera boradi malumotlari qera boradi shuni sora --}}
          <div class="form-group row mb-0 mx-auto mt-3 d-flex " style="text-align: center">
             <div class=" mx-auto">
                 <button type="submit" class="btn btn-primary">
                     {{ __('Next') }}
                 </button>                                  
             </div>
         </div>
</div>
</form>




@endsection
