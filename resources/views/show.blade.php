@extends('footer')
@extends('panel')
@extends('header')

@section('header')
@parent
@section('panel')
@parent
<div class="adminShow col-lg-10">
  <p>Aquí va la tablilla perrona</p>
</div>
@section('footer')
    @parent

    @endsection
  @endsection
@endsection
