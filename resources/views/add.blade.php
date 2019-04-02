@extends('footer')
@extends('panel')
@extends('header')

@section('header')
@parent
@section('panel')
@parent
<form name="frmUser" class="adminAdd col-lg-10" ng-controller="ctrl">
  <div class="form-group col-lg-5">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" placeholder="Nombre" ng-model="user.name">
  </div>
  <div class="form-group col-lg-5">
    <label for="mail">Correo</label>
    <input type="email" class="form-control" id="mail" placeholder="Correo" ng-model="user.mail">
  </div>
  <div class="form-group col-lg-5">
    <label for="pass">Contraseña</label>
    <input type="password" class="form-control" id="pass" placeholder="Contraseña" ng-model="user.pass">
  </div>
  <div class="form-group col-lg-5">
    <label for="passConf">Confirmar contraseña</label>
    <input type="password" class="form-control" id="passConf" placeholder="Confirmar contraseña">
  </div>
  <div class="form-group col-lg-5">
    <label for="tipo">Tipo de usuario</label>
    <select class="form-control" name="grupo" id="grupo" ng-model="user.group">
      @foreach($groups as $grupo)
        <option value="{{$grupo->id}}">{{$grupo->nombre}}</option>
      @endforeach
    </select>
  </div>
  <div class="botones col-lg-10">
    <button type="button" name="button" class="btn btn-danger" ng-click="limpiar()">Cancelar</button>
    <button type="button" name="button" class="btn btn-success" ng-click="guardarUsuario()">Guardar</button>
  </div>
</form><!--name="frmUser"-->
@section('footer')
    @parent
    @endsection
  @endsection
@endsection
