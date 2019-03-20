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
        <th class="action">Estado</th>
        <th colspan="2" class="action">Acciones</th>
      </tr>
    </thead>
    <tbody ng-repeat="filter:buscarLib as res">
      <tr ng-click="">
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
    <tbody ng-if="!res.length">
         <tr>
             <td colspan="4" align="center" class="table-danger">No hay registros</td>
         </tr>
      </tbody>
    </table>
</div>
@section('footer')
    @parent

    @endsection
  @endsection
@endsection
