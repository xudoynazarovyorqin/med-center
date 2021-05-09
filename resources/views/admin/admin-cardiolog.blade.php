@extends('admin.admin')

@section('content')
    <form method="get" action="{{ route('add-doctor') }}">
  <button class="btn btn-primary mr-5 my-3 py-2 px-3" style="float: right" >Add Doctor</button>
</form>
<table class="table" >
  <thead class="thead-dark">
    
    <tr >
      <th style="width: 200px">Id</th>
      <th style="width: 200px">Name</th>
      <th style="width: 200px">Region</th>
      <th style="width: 200px">City</th>              
      <th style="width: 200px"></th>              
      <th style="width: 200px"></th>              
    </tr>
</thead>
<tbody>

   @foreach($doctors as $doctor)
      <tr>
       <td>{{$doctor->id}}</td>
        <td>{{$doctor->login}}</td>
        <td>{{$regions->where('id',$doctor->region_id)->first()->name_uz}}</td>
        <td>{{$cities->where('id',$doctor->city_id)->first()->name_uz}}</td>
        <td>
          
          <div class="ml-30" style="margin: 5px;" >
            <form method="POST" action="{{ route('doctor.destroy', $doctor->id) }}" id="post-destroy">
              @method('DELETE')
              {{ csrf_field() }}
              <input type="submit" value="Delete" onclick="return confirm('are you sure')" class="btn  btn-danger active float-right">
            </form>
          </div>

        </td>

        <td>

          <div class="ml-30" style="margin: 5px;">
            <a href="{{ url('doctor/'.$doctor->id.'/edit') }}" class="btn btn-primary  active float-right" role="button" aria-pressed="true">Update</a>
            @method('patch')
          </div>
          
        </td>
      </tr>
    @endforeach
</tbody>
</table> 
@endsection