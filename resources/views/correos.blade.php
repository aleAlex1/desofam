@extends('footer')
@extends('panel')
@extends('header')

@section('header')
@parent
@section('panel')
@parent
<div class="adminShow col-lg-10">
  <table class="table table-hover col-lg-12">
    <thead class="thead-dark">
      <tr>
        <th>Correo</th>
        <th>Mensaje</th>
        <th class="action" colspan="2">Estado</th>
        <th colspan="2" class="action">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($mails as $m)
      <tr>
          <td>{{$m->email}}</td>
          <td>{{$m->mensaje}}</td>
          <td>{{$m->estado}}</td>
          <td></td>
          <td><button type="button" name="btnEdit" class="btnResponder" ng-click="responder({{$m->id}})"></button></td>
          <td><button type="button" name="btnDelete" class="btnDelete" ng-click="eliminar({{$m->id}})"></button></td>
      </tr>
      @endforeach
    </tbody>
    </table>
</div>
@section('footer')
    @parent

    @endsection
  @endsection
@endsection
