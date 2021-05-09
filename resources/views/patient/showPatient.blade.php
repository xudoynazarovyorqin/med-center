<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <title>Welcome</title>
</head>
<body style="background-color: rgba(215, 189, 219, 0.664); width: 100%;height: 100%; margin-top: 10% " class="align-middle ">
  
  @yield('content')
 

<footer class="bg-light text-center text-lg-start px-auto bg-dark" style="bottom: 0px; position: absolute;  text-align:center; width:100% ">  
  <div class="container  p-1">    
    <div class="row">     
      <div class="col-lg-6 col-md-12 m-0 text-light my-auto" >
        <h5 class="text-uppercase">MedCenter.uz</h5>
       
      </div>
  <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.37);">
    © 2020 Copyright:
    <a class="text-light" href="https://mdbootstrap.com/">MDBootstrap.com</a> 
  </div>
</footer>
<script src="plugins/jquery/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('.dynamic').change(function(){
      if($(this).val() !='')
      {
        var value  =$(this).val();
        var _token =$('input[name="_token"]').val();
        $.ajax({
          url:"{{route('dynamicdependent.fetch')}}",
          method: "POST",
          data:{ value : value, _token: _token},
          success:function(res)
          {
            $('#city').html(res);
          }
        })
      }
    });

  })

</script>

</body>
</html>