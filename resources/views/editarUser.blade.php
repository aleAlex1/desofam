@extends('footer')
@extends('panel')
@extends('header')

@section('header')
@parent
@section('panel')
@parent
<script type="text/javascript">
  window.name="{{$user[0]->name}}"
  window.email="{{$user[0]->email}}"
  window.group="{{$user[0]->grupo}}"
  window.address="{{$user[0]->address}}"
  window.phone="{{$user[0]->phone}}"
</script>
<form name="frmUser" class="adminAdd col-lg-10" ng-controller="ctrlEdit">
  <div class="form-group col-lg-5">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" placeholder="Nombre" ng-model="userEd.name" onkeypress="return check(event)" name="nom" required>
    <span ng-show="frmUser.nom.$dirty && frmUser.nom.$error.required" class="danger">Este campo es requerido</span>
  </div>
  <div class="form-group col-lg-5">
    <label for="mail">Correo</label>
    <input type="email" name="mail" class="form-control" id="mail" placeholder="Correo" ng-model="userEd.mail" required disabled>
    <div ng-show="frmUser.mail.$touched">
      <span ng-show="frmUser.mail.$dirty && frmUser.mail.$error.required" class="danger">Este campo es requerido</span>
      <span class="danger" ng-show="frmUser.mail.$dirty && frmUser.mail.$error.email">El formato es inválido</span>
    </div>
  </div>
  <div class="form-group col-lg-10">
    <label for="direc">Dirección</label>
    <input type="text" class="form-control" id="direc" placeholder="Dirección" ng-model="userEd.direc" name="direc" required>
    <span ng-show="frmUser.direc.$dirty && frmUser.direc.$error.required" class="danger">Este campo es requerido</span>
  </div>
  <div class="form-group col-lg-5">
    <label for="tel">Teléfono</label>
    <input type="text" class="form-control" id="tel" placeholder="Teléfono" ng-model="userEd.tel" onkeypress="return num(event)" maxlength="10" name="tel" required>
    <span ng-show="frmUser.tel.$dirty && frmUser.tel.$error.required" class="danger">Este campo es requerido</span>
  </div>
  <div class="form-group col-lg-5">
    <label for="tipo">Tipo de usuario</label>
    <select class="form-control" name="grupo" id="grupo" ng-model="userEd.group" required>
      @foreach($groups as $grupo)
        <option value="{{$grupo->id}}">{{$grupo->nombre}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group col-lg-5">
    <label for="pass">Contraseña</label>
    <input type="password" class="form-control" id="pass" placeholder="Contraseña" ng-model="userEd.pass" ng-keypress="pass=false;" ng-blur="long()">
  </div>
  <div class="form-group col-lg-5">
    <label for="passConf">Confirmar contraseña</label>
    <input type="password" class="form-control" id="passConf" placeholder="Confirmar contraseña" ng-model="userEd.confirm" ng-blur="confirmar()">
    <span ng-show="!confirm" class="danger msjPass">Las contraseñas no coinciden</span>
  </div>
  @if(session('error'))
      <div class="alert alert-danger col-lg-10">
          {{ session('error') }}
      </div>
  @endif
  <div class="botones col-lg-10">
    <button type="button" name="button" class="btn btn-danger" ng-click="limpiar()">Cancelar</button>
    <button type="button" name="button" class="btn btn-success" id="btnSaveEd" ng-click="saveEdit({{$user[0]->id}})" ng-disabled="!frmUser.$valid || !pass">Guardar</button>
  </div>
</form name="frmUser">
@section('footer')
    @parent
    @endsection
  @endsection
@endsection
