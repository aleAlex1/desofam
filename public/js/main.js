var app=angular.module('app', []);
app.controller('ctrl', function($scope, $http, $location){
  $scope.contacto = {};
  $scope.enviar = {};
  $scope.user = {};
  $scope.ticketPrevio = {};
  $scope.ticketActual = {};

  $scope.login = function() {
    $http.post('/login',$scope.user).then(
        function(response){
          // alert("Su mensaje ha sido enviado exitosamente");
          console.log(response);
          $scope.user.pass = response['data'][0]['password'];
        }, function(errorResponse){
              console.log("Lo hizo mal"+ errorResponse);
        }
    );
    $http.post('/desencriptar', $scope.user).then(
        function(response){
          // alert("Su mensaje ha sido enviado exitosamente");
          console.log(response);
          // $scope.user.user =  response['data'];
        }, function(errorResponse){
              console.log("Lo hizo mal"+ errorResponse);
        }
    );
  }

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

  $scope.guardarUsuario=function(){
    $http.post("/guardarUsuario",$scope.user).then(
        function(response){
          $scope.user={};
          $scope.frmUser.$setPristine();
          alert("Su mensaje ha sido enviado exitosamente");

        }, function(errorResponse){
              $scope.frmUser.$setPristine();
              console.log("Lo hizo mal");
            }
    );
  }

  $scope.edit=function(id){
    alert("Vas a editar el usuario "+id)
  }

  $scope.delete=function(id){
    alert("Vas a eliminar el usuario "+id)
  }

  $scope.guardarIdTicket = function(id) {
    $scope.enviar.id = id;
    $http.post("/guardarIdTicket", $scope.enviar).then(
        function(response){
          // console.log(response['data'][0]);
          // angular.forEach(response['data'], function(value, key){
          //    console.log(key + ': ' + value['nombre']);
             // $scope.paciente.id = value['id'];

             console.log(response);
          // });

        }, function(errorResponse){
              console.log(errorResponse);
            }
    );
  }

  $scope.mostrarTicketPrevio = function(id) {
    console.log(id);
    $scope.contacto.ticketActual = id;
    $http.post("/correoTicketPrevio", $scope.contacto).then(
        function(response){
          $scope.ticketPrevio = {};
          // console.log(response['data'][0]);
          angular.forEach(response['data'], function(value, key){
             console.log(key + ': ' + value['nombre']);
             $scope.ticketPrevio.id = value['id'];
             $scope.ticketPrevio.nombre = value['nombre'];
             $scope.ticketPrevio.correo = value['email'];
             $scope.ticketPrevio.mensajePrevio = value['mensaje'];
             });
             // console.log(response);
             $http.post("/correoTicketActual", $scope.contacto).then(
                 function(response){

                   // console.log(response['data'][0]);
                   angular.forEach(response['data'], function(value, key){
                      console.log(key + ': ' + value['mensaje']);
                      $scope.ticketActual.id = value['id'];
                      $scope.ticketActual.mensajeReciente = value['mensaje'];
                      $scope.contacto = {};
                      // console.log(response);
                   });

                 }, function(errorResponse){
                       console.log(errorResponse);
                     }
                   );
        }, function(errorResponse){
              console.log(errorResponse);
            }
    );
  };

});
