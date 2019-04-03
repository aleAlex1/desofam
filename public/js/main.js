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
  }

  $scope.contacto={};
  $scope.user={};
  $scope.confirm=true;


  $scope.guardar=function(){
    $http.post('/guardar',$scope.contacto).then(
        function(response){
          if(response.data==1){
            $scope.contacto={};
            $scope.formuContacto.$setPristine();
            console.log("Si lo hizo bien");
            alert("Su mensaje ha sido enviado exitosamente");
          }
          else{
            alert("El ticket no existe en nuestros registros");
          }
          console.log(response);
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
          alert("Usuario creado");
          location.reload();
        }, function(errorResponse){
              $scope.frmUser.$setPristine();
              console.log("Lo hizo mal");
            }
    );
  }

  $scope.edit=function(id){
    window.location = 'editar/'+id;
  }

  $scope.delete=function(id){
    alert("Vas a eliminar el usuario "+id)
  }

  $scope.confirmar=function() {
    if($scope.user.pass==$scope.user.confirm){
      $scope.confirm=true;
    }
    else{
      $scope.confirm=false;
    }
  }
  $scope.responder = function(id) {
    console.log(id);
    $http.post("/guardarUsuario",$scope.user).then(
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

app.controller('ctrlEdit', function($scope, $http, $window){

  $scope.confirm=true;
  $scope.pass=true;
  $scope.userEd={
    name:window.name,
    mail:window.email,
    pass:window.password,
    group:window.group,
    anterior:window.group,
    direc:window.address,
    tel:window.phone
  };

  $scope.saveEdit=function(id){
    document.getElementById("btnSaveEd").disabled=true;
    $http.post('/admin/index/save/'+id,$scope.userEd).then(
        function(response){
            $scope.userEd={};
            $scope.frmUser.$setPristine();
            alert("Contacto editado correctamente");
            $window.location.href = '/admin/index/show';
        }, function(errorResponse){
            alert("¡Error!");
            location.reload();
            $scope.frmUser.$setPristine();
            console.log("Lo hizo mal");
          }
    );
  }

  $scope.confirmar=function(){
    if($scope.userEd.pass==$scope.userEd.confirm){
      $scope.confirm=true;
      $scope.pass=true;
    }
    else{
      $scope.confirm=false;
      $scope.pass=false;
    }
  }
  $scope.long=function(){
    if($scope.userEd.pass==""&&$scope.userEd.confirm==""){
      $scope.confirm=true;
    }
  }

});

function showPass(){
  var check = document.getElementById("pass");
  if (check.type === "password"){
    check.type = "text";
    document.getElementById("img").style.background="url('/images/hide.png')";
  } else {
    check.type = "password";
    document.getElementById("img").style.background="url('/images/view.png')";
  }
}

function check(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        if (tecla==8) return true;
        patron =/[A-Za-zá-ú\s]/;
        te = String.fromCharCode(tecla);
        return patron.test(te);
      }
function num(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        if (tecla==8) return true;
        patron =/[0-9]/;
        te = String.fromCharCode(tecla);
        return patron.test(te);
      }
