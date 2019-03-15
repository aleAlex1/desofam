@extends('footer')
@extends('panel')
@extends('header')

@section('header')
@parent
@section('panel')
@parent
<div class="adminAdd col-lg-10">
  <div class="form-group col-lg-5">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" placeholder="Nombre">
  </div>
  <div class="form-group col-lg-5">
    <label for="user">Nombre de usuario</label>
    <input type="text" class="form-control" id="user" placeholder="Usuario">
  </div>
  <div class="form-group col-lg-5">
    <label for="mail">Correo</label>
    <input type="email" class="form-control" id="mail" placeholder="Correo">
  </div>
  <div class="form-group col-lg-5">
    <label for="tipo">Tipo de usuario</label>
    <select class="form-control" name="grupo" id="grupo">
      <option value="1">Administrador</option>
      <option value="2">Empleado</option>
    </select>
  </div>
  <div class="form-group col-lg-5">
    <label for="pass">Contraseña</label>
    <input type="password" class="form-control" id="pass" placeholder="Contraseña">
  </div>
  <div class="form-group col-lg-5">
    <label for="passConf">Confirmar contraseña</label>
    <input type="password" class="form-control" id="passConf" placeholder="Confirmar contraseña">
  </div>
  <div class="botones col-lg-10">
    <button type="button" name="button" class="btn btn-danger">Cancelar</button>
    <button type="button" name="button" class="btn btn-success">Guardar</button>
  </div>
</div>
@section('footer')
    @parent
    app.controller('ctrl', function($scope, $http, $location){

    });
    </script>
    @endsection
  @endsection
@endsection
