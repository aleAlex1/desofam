@extends('footer')
@extends('header')

@section('header')
@parent
<div class="loginContainer col-lg-12" ng-controller="ctrl">
  <div class="login col-lg-4">
    <div class="logo">
    </div>
    <div class="mensaje">
      <span>Usuario invalido o contraseña incorrecta</span>
    </div>
    <div class="form-group">
      <label for="user">Usuario</label>
      <input type="text" class="form-control" id="user" placeholder="Usuario" ng-model="user.user">
    </div>
    <div class="form-group">
      <label for="pass">Contraseña</label>
      <input type="password" class="form-control" id="pass" placeholder="Contraseña" ng-model="user.pass">
    </div>
    <button type="button" name="login" class="btn btn-success col-lg-12" ng-click="login()">Ingresar</button>
  </div>
</div>
@section('footer')
    @parent

  @endsection
@endsection
