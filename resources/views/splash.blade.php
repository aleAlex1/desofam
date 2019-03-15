@extends('footer')
@extends('panel')
@extends('header')

@section('header')
@parent
@section('panel')
@parent
<div class="adminAdd col-lg-10">
  <h1>¡Bienvenido!</h1>
  <div class="texto splash">
    <p>Bienvenido al panel de administración. En este sitio podrás:</p>
    <ul>
      <li>Agregar nuevos usuarios</li>
      <li>Consultar usuarios existentes</li>
      <li>Editar y eliinar usuarios</li>
      <li>Responder dudas y quejas de clientes</li>
    </ul>
    <p>Recuerda que el acceso a este sitio está restringido. Solo se permite personal autorizado</p>
  </div>
</div>
@section('footer')
    @parent
    @endsection
  @endsection
@endsection
