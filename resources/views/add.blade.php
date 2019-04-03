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
    <input type="text" class="form-control" name="nom" id="name" placeholder="Nombre" ng-model="user.name" onkeypress="return check(event)" required>
    <span ng-show="frmUser.nom.$dirty && frmUser.nom.$error.required" class="danger">Este campo es requerido</span>
  </div>
  <div class="form-group col-lg-5">
    <label for="mail">Correo</label>
    <input type="email" class="form-control" name="mail" id="mail" placeholder="Correo" ng-model="user.mail" required>
    <div ng-show="frmUser.mail.$touched">
      <span ng-show="frmUser.mail.$dirty && frmUser.mail.$error.required" class="danger">Este campo es requerido</span>
      <span class="danger" ng-show="frmUser.mail.$dirty && frmUser.mail.$error.email">El formato es inválido</span>
    </div>
  </div>
  <div class="form-group col-lg-10">
    <label for="direc">Dirección</label>
    <input type="text" class="form-control" id="direc" placeholder="Dirección" ng-model="user.direc" name="direc" required>
    <span ng-show="frmUser.direc.$dirty && frmUser.direc.$error.required" class="danger">Este campo es requerido</span>
  </div>
  <div class="form-group col-lg-5">
    <label for="tel">Teléfono</label>
    <input type="text" class="form-control" id="tel" placeholder="Teléfono" ng-model="user.tel" onkeypress="return num(event)" maxlength="10" minlength="7" name="tel" required>
    <span ng-show="frmUser.tel.$dirty && frmUser.tel.$error.required" class="danger">Este campo es requerido</span>
  </div>
  <div class="form-group col-lg-5">
    <label for="tipo">Tipo de usuario</label>
    <select class="form-control" name="grupo" id="grupo" ng-model="user.group" required>
      @foreach($groups as $grupo)
        <option value="{{$grupo->id}}">{{$grupo->nombre}}</option>
      @endforeach
    </select>
    <span ng-show="frmUser.grupo.$dirty && frmUser.grupo.$error.required" class="danger">Este campo es requerido</span>
  </div>
  <div class="form-group col-lg-5">
    <label for="pass">Contraseña</label>
    <input type="password" class="form-control" id="pass" placeholder="Contraseña" ng-model="user.pass" name="pass" required>
    <div class="icon" id="img" onclick="showPass()"></div>
    <span ng-show="frmUser.pass.$dirty && frmUser.pass.$error.required" class="danger">Este campo es requerido</span>
  </div>
  <div class="form-group col-lg-5">
    <label for="passConf">Confirmar contraseña</label>
    <input type="password" class="form-control" id="passConf" placeholder="Confirmar contraseña" name="confirmar" required ng-model="user.confirm" ng-blur="confirmar()">
    <span ng-show="frmUser.confirmar.$dirty && frmUser.confirmar.$error.required" class="danger">Este campo es requerido</span>
    <span ng-show="!confirm" class="danger msjPass">Las contraseñas no coinciden</span>
  </div>
  @if($errors->any())
    <div class="alert alert-danger col-lg-10">
      @foreach ($errors->all() as $error)
          {{ $error }}
      @endforeach
    </div>
  @endif
  <div class="botones col-lg-10">
    <button type="button" name="button" class="btn btn-danger" ng-click="limpiar()">Cancelar</button>
    <button type="button" name="button" class="btn btn-success" ng-click="guardarUsuario()" ng-disabled="!frmUser.$valid && !confirm">Guardar</button>
  </div>
</form><!--name="frmUser"-->
<!-- </form> -->
@section('footer')
    @parent
    @endsection
  @endsection
@endsection
