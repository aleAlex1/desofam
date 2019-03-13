@extends('footer')
@extends('header')

@section('header')
@parent
    <div class="" ng-controller="ctrl">
      <nav class="navbar navbar-expand-lg fixed-top" id="navbar"><!-- bg-light, navbar-light-->
          <img src="{{asset('images/DESOFAM_LOGO.png')}}" height="40" alt="Logo de DESOFAM">
          <a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                  <!--<div class="dropdown-divider">Visión</div>-->
                  <a class="dropdown-item" href="#vision">Visión</a>
                  <a class="dropdown-item" href="#pFrecuentes">Preguntas frecuentes</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>

        <div class="bd-example"><!-- w-100  -->
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
                <img src="{{asset('images/1.jpg')}}" class="d-block w-100 imgCarrusel" alt="Segundo proyecto chido" id=""><!--w-100-->
                <div class="carousel-caption d-none d-md-block">
                  <h5>Segundo noticia</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
            <!--<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>-->
            </div>
          </div>
          </div>

      <!--<div class="bgimg-1">
        <div class="caption">
          <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Bienvenide</span>
        </div>
      </div>-->

  <!--<div class="texto" id="nosotros">
    <h3>¿Quiénes somos?</h3>
    <p>Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
  </div>-->

  <div class="bgimg-2" id="nosotros">
    <div class="caption">
      <span class="border">¿Quiénes somos?</span><!--style="background-color:white;font-size:25px;color: black;"-->
    </div>
  </div>

  <div class="bgimg-2 d-flex justify-content-center">
    <div class="texto">
      <p>Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
    </div>
  </div>

    <div class="bgimg-2 ">
      <div class="row">
        <div class="col-sm">
          <div class="bgimg-2" id="mision">
            <div class="caption">
              <span class="border">Misión</span><!--style="background-color:white;font-size:25px;color: black;"-->
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

  <div class="bgimg-2" id="pFrecuentes">
    <div class="caption">
      <span class="border">Preguntas frecuentes</span>
    </div>
  </div>

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

    <div class="bgimg-2" id="portfolio" style="min-height:110px;"></div>
    <!--<a href="#">Más información</a>-->

    <!--<div class="bgimg-1"></div>-->

    <!-- Footer -->
  @section('footer')
      @parent
      app.controller('ctrl', function($scope, $http, $location){

      });
      </script>
    @endsection
  @endsection
