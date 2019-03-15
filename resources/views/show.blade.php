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
    app.controller('ctrl', function($scope, $http, $location){

    });
    </script>
    @endsection
  @endsection
@endsection
