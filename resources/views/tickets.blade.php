@extends('footer')
@extends('panel')
@extends('header')

@section('header')
@parent
@section('panel')
@parent
<div class="adminShow col-lg-10" ng-controller="ctrl">
  <table class="table table-hover col-lg-12">
    <thead class="thead-dark">
      <tr>
        <th>Ticket</th>
        <th>Correo</th>
        <th>Mensaje</th>
        <th class="action">Estado</th>
        <th colspan="2" class="action">Acciones</th>
      </tr>
    </thead>
    <!-- Lo comente para hacer una prueba -->
    <!-- <tbody ng-repeat="filter:buscarLib as res"> -->
    <tbody>
      <!-- Lo comente para hacer una prueba -->
      <!-- <tr ng-click=""> -->
      @foreach($ticketsitos as $t)
      <tr>
        <td>{{$t->ticket_relacionado}}</td>
        <td>{{$t->email}}</td>
        <td>{{$t->mensaje}}</td>
        <td>{{$t->estado}}</td>
        <td><a href="/correo/{{$t->id}}"><button type="button" name="btnEdit" class="btnResponder" ></button></a></td><!--ng-click="mostrarCorreoCTicket({{$t->ticket_relacionado}})" -->
        <!-- <td> <a href="/correo/{{$t->ticket_relacionado}}">sdfd</a> </td> -->
        <td><button type="button" name="btnDelete" class="btnDelete" ng-click="eliminar({{$t->id}})"></button></td>
      </tr>
      @endforeach
    </tbody>
    <!-- Lo comente para hacer pruebas -->
    <!-- <tbody ng-if="!res.length">
         <tr>
             <td colspan="5" align="center" class="table-danger">No hay registros</td>
         </tr>
      </tbody> -->
    </table>
</div>
@section('footer')
    @parent

    @endsection
  @endsection
@endsection
