@extends('patient.showPatient')

@section('content')
<nav class="nav pr-4">
    <a class="nav-link ml-auto" href="/login"><h4>Join as Doctor<h4></a>
  </nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow ">
                
                <div class="card-body py-5">
                    <form method="POST" action="{{ route('moreInformation') }}">    
                        @csrf                    
                         <div class="form-group row">

                            <div class="col-md-6 input-group mx-auto">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">+998</span>
                                </div>
                
                                <input id="number" type="number" class="form-control " name="phone" value="{{ old('number') }}" required>                               
                            </div>
                        </div>
                         

                        
                        

                        <div class="form-group row mb-0 mx-auto mt-3 d-flex " style="text-align: center">
                            <div class="col-md-8 offset-md-4 mx-auto">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Next') }}
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection