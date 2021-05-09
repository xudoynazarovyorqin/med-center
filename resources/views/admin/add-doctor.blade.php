@extends('admin.admin')

@section('content')
<form method="POST" action="{{ route('add-doctor-post') }}">
  <table class="table" >
    <tbody>
      <tr>
        <td><small>Login</small><input class="form-control input-lg " name="login"></td>
        <td><small>Password</small><input class="form-control input-lg" name="password"></td>
        <td><small>Region</small>
          <select id="region" name="region_id" class="form-control input-lg dynamic" data-dependent="city">
            <option disabled selected value>select region</option>
            @foreach($regions as $region )
            <option value="{{ $region->id }}">{{ $region->name_uz }}</option>
            @endforeach
          </select>
        </td>
        <td><small>City</small>
          <select id="city" name="city_id" class="form-control input-lg " >
            <option disabled selected value>select city</option>
            @foreach($cities as $city )
            <option value="{{ $city->id }}">{{ $city->name_uz }}</option>
            @endforeach
          </select>
          {{csrf_field()}}
        </td>
        <td><small>Role</small>
          <select id="region" name="role" class="form-control input-lg" >
            <option value="1">Main Doctor</option>
            <option value="2">Eye Doctor</option>
            <option value="3">Cardiologis</option>
            <option value="4">Xray Doctor</option>
          </select>
        </td>
        <td class="pl-0">               
        <div class="form-group row mb-0 mt-4 mr-3 d-flex " style="text-align: right">
          <div class="col-md-8 offset-md-4 mr-4">
            <button type="submit" class="btn btn-primary px-4">
              {{ __('Next') }}
            </button>
          </div>
        </div>
        </td>
      </tr>
      </tbody>
  </table>
</form>

@endsection