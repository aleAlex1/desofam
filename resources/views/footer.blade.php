@section('footer')
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
          <input type="checkbox" class="form-check-input" id="exampleCheck1" data-toggle="collapse" data-target="#nTicket" aria-expanded="false" aria-controls="collapseExample">
          <label class="form-check-label" for="exampleCheck1">Tengo un número de ticket</label>
          </div>
          <div class="collapse" id="nTicket">
            <div class="form-group">
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="número de ticket">
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
</div>
  <script type="text/javascript" src="{{asset('/js/angular.js')}}"></script>
  <script type="text/javascript" src="{{asset('/js/jquery.fancybox.js')}}"></script>
</body>
</html>
<script>
  var app=angular.module('app', []);
@show
