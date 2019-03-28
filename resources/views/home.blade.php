@extends('footer')
@extends('header')

@section('header')
  @parent
    <div class="" ng-controller="ctrl">
      <nav id="navbarHome" class="navbar navbar-light bg-transparent fixed-top">
      <a class="navbar-brand" href="#">
        <img src="{{asset('images/DESOFAM_LOGO.png')}}" width="150" alt="">
      </a>
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="#somos">¿Quiénes somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#portfolio">Portafolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#opiniones">Opiniones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#faq">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#footer">Contáctanos</a>
        </li>
      </ul>
    </nav>

    <img src="{{asset('images/technologyBanner.jpg')}}" alt="Banner" class="vh-100 w-100">
    <!-- <div class="centered">
      <p class="text-center">Bienvenido</p>
      <p>Tenemos las herramientas para resolver tu problema</p>
    </div> -->

    <div class="imgFooter">
      <p>11-234-2552</p>
    </div>

    <div class="container-fluid bg-light">
      <div class="container text-justify p-5" id="somos">
        <h2 class="text-center">¿Quiénes somos?</h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus felis libero, suscipit non euismod ac, lobortis a lectus. Proin a libero nec arcu tincidunt tincidunt. Nunc lobortis eros metus, eget hendrerit magna condimentum congue. Morbi ac nisi finibus augue egestas aliquet et sit amet lectus. Suspendisse ut erat quis risus porttitor rutrum ac bibendum mauris. Donec magna lacus, aliquam nec mollis sit amet, vehicula quis ex. Morbi vitae eros id odio ornare vestibulum. Curabitur tempor elit id ipsum posuere euismod. Cras ornare convallis egestas. Quisque interdum non metus a scelerisque. Nunc leo nulla, iaculis et leo eget, sagittis pellentesque turpis. Proin sed hendrerit leo. Sed feugiat leo a arcu rutrum, vitae auctor mi laoreet. Nunc eget ex molestie, egestas tortor vel, venenatis urna. Quisque accumsan pharetra purus, eget cursus sem sodales eu. Phasellus consequat pulvinar sem vitae varius. Praesent nisi ex, congue id aliquet a, tristique vitae odio. Donec justo arcu, interdum ut metus sit amet, rhoncus suscipit arcu. Quisque semper efficitur purus, fringilla maximus lectus lacinia sit amet. Aenean consequat ultrices libero a laoreet. Nulla molestie tellus eget nunc scelerisque, imperdiet volutpat nisi ultricies. In a fringilla turpis. </p>
      </div>
    </div>

    <div class="">
      <div class="container">
        <h2 class="text-center">¿A dónde queremos llegar?</h2>
        <div class="row">
          <div class="col-sm">
            <div class="d-flex justify-content-center">
              <div class="texto">
                <h3>Misión</h3>
                <p>Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="d-flex justify-content-center">
              <div class="texto">
                <h3>Visión</h3>
                <p>Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bgimg-2" id="portfolio" style="height: 150px;">
      <div class="caption">
        <span class="border">Portafolio</span>
      </div>
    </div>

    <div class="bgimg-2 d-flex justify-content-center" id="portfolio">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('images/sistema_geriatrico_logo.png')}}" alt="Card image cap">
        <div class="card-body">
          <h4>Sistema geriátrico</h4>
          <p class="card-text">Éste sistema brinda la capacidad de gestionar citas eficientemente.</p>
        </div>
      </div>
    </div>
    <div class="bgimg-2">
    </div>

    <div class="container-fluid bg-white" id="opiniones">
      <div class="container text-justify p-5" id="somos">
        <h2 class="text-center">¿Qué dicen nuestros clientes?</h2>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container text-center">
                <img src="{{asset('images/john.jpg')}}" alt="" class="profilePicReview">
                <p>Muy buena empresa. Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio.</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container text-center">
                <img src="{{asset('images/john.jpg')}}" alt="" class="profilePicReview">
                <p>Muy buena empresa 2. Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio.</p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container text-center">
                <img src="{{asset('images/john.jpg')}}" alt="" class="profilePicReview">
                <p>Muy buena empresa 3. Nascetur per nec posuere turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in neque risus odio.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

    <!-- <div class="bgimg-2" id="faq">
      <div class="caption">
        <span class="border">
          <a data-toggle="collapse" href="#collapseFrecuentes" role="button" aria-expanded="false" aria-controls="collapseFrecuentes">
            Preguntas frecuentes
          </a>
        </span>
      </div>
    </div> -->

    <div class="container-fluid bg-light">
      <div class="container text-justify p-5" id="faq">
        <h2 class="text-center"><a data-toggle="collapse" href="#collapseFrecuentes" role="button" aria-expanded="false" aria-controls="collapseFrecuentes" title="Click para ver más">
          Preguntas frecuentes
        </a></h2>

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

    <!-- Footer -->
    <footer class="page-footer font-small bg-dark text-light pt-4" id="footer">
      <!-- Footer Links -->
      <div class="container-fluid text-center text-md-left">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-5 mt-md-0 mt-3">
            <!-- Content -->
            <h5 class="text-uppercase"><label for="">Contáctanos</label></h5>
            <!--<p>Here you can use rows and columns here to organize your footer content.</p>-->
            <form name="formuContacto">
              <div class="form-group">
                <label for="exampleFormControlInput1">Nombre</label>
                <input type="text" name="nombreVal" class="form-control" id="exampleFormControlInput1" ng-pattern="/^[A-Za-zñáéíóúÁÉÍÓÚ' ']{1,50}$/" placeholder="Nombre" title="En este campo solo se pueden ingresar letras" ng-model="contacto.nombre" required/>
                <span ng-show="formuContacto.nombreVal.$dirty && formuContacto.nombreVal.$error.required" style="color: red;">Campo requerido</span>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Correo electrónico</label>
                <input type="email" name="emailVal" class="form-control" id="exampleFormControlInput1" placeholder="correo@ejemplo.com" ng-model="contacto.email" required/>
                <span ng-show="formuContacto.emailVal.$dirty && formuContacto.emailVal.$error.required" style="color: red;">Campo requerido</span>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Exprésanos tu duda o inconveniente</label>
                <textarea class="form-control" name="mensajeVal" id="exampleFormControlTextarea1" rows="3" ng-model="contacto.mensaje" required/></textarea>
                <span ng-show="formuContacto.mensajeVal.$dirty && formuContacto.mensajeVal.$error.required" style="color: red;">Campo requerido</span>
              </div>
              <div class="form-group form-check">
              <input type="checkbox"  class="form-check-input" id="exampleCheck1" data-toggle="collapse" data-target="#nTicket" aria-expanded="false" aria-controls="collapseExample">
              <label class="form-check-label" for="exampleCheck1">Tengo un número de ticket</label>
              </div>
              <div class="collapse" id="nTicket">
                <div class="form-group">
                  <input type="text" ng-model="contacto.ticket_relacionado" class="form-control" id="exampleFormControlInput1" ng-pattern="/^[0-9]{1,10}$/" title="Solo puede ingresar números" placeholder="Número de ticket">
                </div>
              </div>

              <button type="submit" class="btn btn-light" ng-click="guardar()" ng-disabled="!formuContacto.$valid">Enviar</button>
            </form>
          </div>

          <!-- Grid column -->
          <hr class="clearfix w-100 d-md-none pb-3">
          <!-- Grid column -->
          <div class="col-md-2 mb-md-0 mb-3"></div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
              <h5><label for="">Estamos ubicados en...</label></h5>
              <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.393704331668!2d-106.37647878548654!3d23.26513998483075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869f53930ee12159%3A0xf9610cdfe8f5ff62!2sUniversidad+Polit%C3%A9cnica+de+Sinaloa!5e0!3m2!1ses-419!2smx!4v1551654834921" width="480" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
      <!-- Footer Links -->
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3" id="copyright">
        <label for="">© 2019 Copyright</label>
        <a href="#">Desofam</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  @section('footer')
      @parent
    @endsection
  @endsection
