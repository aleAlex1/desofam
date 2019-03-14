@section('footer')
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
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" ng-model="contacto.nombre">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Correo electrónico</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="correo@ejemplo.com" ng-model="contacto.email">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Exprésanos tu duda o inconveniente</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ng-model="contacto.mensaje"></textarea>
          </div>
          <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" data-toggle="collapse" data-target="#nTicket" aria-expanded="false" aria-controls="collapseExample">
          <label class="form-check-label" for="exampleCheck1">Tengo un número de ticket</label>
          </div>
          <div class="collapse" id="nTicket">
            <div class="form-group">
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Número de ticket">
            </div>
          </div>

          <button type="button" class="btn btn-light" ng-click="guardar()">Enviar</button>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
  <script type="text/javascript" src="{{asset('/js/angular.js')}}"></script>
</body>
</html>
<script>
  var app=angular.module('app', []);
@show
