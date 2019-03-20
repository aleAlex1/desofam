@extends('footer')
@extends('panel')
@extends('header')

@section('header')
@parent
@section('panel')
@parent
<div class="adminShow col-lg-8">
  <table class="table table-hover col-lg-12">
    <thead class="thead-dark">
      <tr>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Grupo</th>
        <th colspan="2" class="action">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($usr as $u)
      <tr>
          <td>{{$u->name}}</td>
          <td>{{$u->email}}</td>
          <td>{{$u->group}}</td>
          <td><button type="button" name="btnEdit" class="btn btn-outline-primary" ng-click="edit({{$u->id}})">Editar</button></td>
          <td><button type="button" name="btnDelete" class="btn btn-outline-danger" ng-click="delete({{$u->id}})">Eliminar</button></td>
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
