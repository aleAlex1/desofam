@extends('footer')
@extends('header')

@section('header')
@parent
<div class="loginContainer col-lg-12">
  <div class="login col-lg-4">
    <div class="logo">
    </div>
    <div class="mensaje">
      <span>Usuario invalido o contraseña incorrecta</span>
    </div>
    <div class="form-group">
      <label for="user">Usuario</label>
      <input type="text" class="form-control" id="user" placeholder="Usuario">
    </div>
    <div class="form-group">
      <label for="pass">Contraseña</label>
      <input type="password" class="form-control" id="pass" placeholder="Contraseña">
    </div>
    <button type="submit" name="login" class="btn btn-success col-lg-12">Ingresar</button>
  </div>
</div>
@section('footer')
    @parent
    app.controller('ctrl', function($scope, $http, $location){
      
    });
    </script>
  @endsection
@endsection
