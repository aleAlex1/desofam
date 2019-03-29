@extends('footer')
@extends('panel')
@extends('header')

@section('header')
@parent
@section('panel')
@parent
<form name="frmUser" class="adminAdd col-lg-8" ng-controller="ctrl">
  <div class="form-group col-lg-3">
    <label for="name">Ticket Previo</label>
    <input type="text" class="form-control" id="name" placeholder="Ticket Previo" ng-model="contacto.ticketPrevio">
  </div>
  <br>
  <div class="form-group col-lg-5">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" placeholder="Nombre" ng-model="contacto.nombre">
  </div>
  <div class="form-group col-lg-5">
    <label for="mail">Correo</label>
    <input type="email" class="form-control" id="mail" placeholder="Correo" ng-model="contacto.correo">
  </div>
  <div class="form-group col-lg-10">
    <label for="exampleFormControlTextarea1">Mensaje Previo</label>
    <textarea class="form-control" name="" id="exampleFormControlTextarea1" rows="5" ng-model="contacto.mensajePrevio"></textarea>
  </div>
  <div class="form-group col-lg-3">
    <label for="name">Ticket Reciente</label>
    <input type="text" class="form-control" id="name" placeholder="Ticket Reciente" ng-model="">
  </div>
  <div class="form-group col-lg-10">
    <label for="exampleFormControlTextarea1">Mensaje Reciente</label>
    <textarea class="form-control" name="" id="exampleFormControlTextarea1" rows="5" ng-model=""></textarea>
  </div>
  <div class="form-group col-lg-10">
    <label for="exampleFormControlTextarea1">Respuesta</label>
    <textarea class="form-control" name="" id="exampleFormControlTextarea1" rows="7" ng-model=""></textarea>
  </div>
  <div class="botones col-lg-10">
    <!-- <button type="button" name="button" class="btn btn-danger" ng-click="">Cancelar</button> -->
    <button type="button" name="button" class="btn btn-success" ng-click="">Enviar</button>
  </div>
</form name="frmUser">
@section('footer')
    @parent
    @endsection
  @endsection
@endsection
