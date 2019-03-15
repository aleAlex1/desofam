@extends('footer')
@extends('header')

@section('header')
  @parent
    <div class="" ng-controller="ctrl">
      <nav class="navbar navbar-expand-lg fixed-top d-flex justify-content-center" id="navbar">
          <a class="navbar-brand" href="#"><img src="{{asset('images/DESOFAM_LOGO.png')}}" height="40" alt="Logo de DESOFAM"></a>
          <div class="collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">Contacto</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Acerca de
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#nosotros">¿Quiénes somos?</a>
                  <a class="dropdown-item" href="#mision">Misión</a>
                  <a class="dropdown-item" href="#vision">Visión</a>
                  <a class="dropdown-item" href="#pFrecuentes">Preguntas frecuentes</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>

        <div class="bd-example w-100">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('images/4.png')}}" class="d-block w-100 imgCarrusel" alt="Proyecto chido">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Primer noticia</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/1.jpg')}}" class="d-block w-100 imgCarrusel" alt="Segundo proyecto chido" id="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Segunda noticia</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    <div class="bgimg-2" id="nosotros">
      <div class="caption">
        <span class="border">¿Quiénes somos?</span>
      </div>
    </div>

    <div class="bgimg-2 d-flex justify-content-center">
      <div class="texto">
        <p>Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
      </div>
    </div>

    <div class="bgimg-2">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <div class="bgimg-2" id="mision">
              <div class="caption">
                <span class="border">Misión</span>
              </div>
            </div>
            <div class="bgimg-2 d-flex justify-content-center">
              <div class="texto">
                <p>Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="bgimg-2" id="vision">
              <div class="caption">
                <span class="border">Visión</span>
              </div>
            </div>
            <div class="bgimg-2 d-flex justify-content-center">
              <div class="texto">
                <p>Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bgimg-2" id="portfolio">
      <div class="caption">
        <span class="border">Portfolio</span>
      </div>
    </div>

    <div class="bgimg-2 d-flex justify-content-center" id="portfolio">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('images/sistema_geriatrico_logo.png')}}" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>

    <div class="bgimg-2" id="pFrecuentes">
      <div class="caption">
        <span class="border">
          <a data-toggle="collapse" href="#collapseFrecuentes" role="button" aria-expanded="false" aria-controls="collapseFrecuentes">
            Preguntas frecuentes
          </a>
        </span>
      </div>
    </div>

    <div class="collapse" id="collapseFrecuentes">
      <div class="texto w-100">
        <p>1. Nascetur per nec posuere turpis
          <br>
          2. lectus nec libero turpis nunc at
          <br>
          3.sed posuere mollis ullamcorper libero ante lectus
          <br>4. blandit pellentesque a, magna turpis est sapien duis blandit dignissim.
          <br>5. Viverra interdum mi magna mi, morbi sociis.
          <br>6. Condimentum dui ipsum consequat morbi, curabitur aliquam pede
          <br>7. nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor,
          <br>8. nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
      </div>
    </div>
  @section('footer')
      @parent
      app.controller('ctrl', function($scope, $http, $location){
        $scope.contacto={};

        $scope.guardar=function(){
          $http.post('/guardar',$scope.contacto).then(
              function(response){
                $scope.contacto={};
                $scope.formuContacto.$setPristine();
                console.log("Si lo hizo bien");
                alert("Su mensaje ha sido enviado exitosamente");

              }, function(errorResponse){
                    $scope.formuContacto.$setPristine();
                    console.log("Lo hizo mal");
                  }
          );
        }

      });
      </script>
    @endsection
  @endsection
