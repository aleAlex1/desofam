var app=angular.module('app', []);
app.controller('ctrl', function($scope, $http, $location){
  $scope.contacto={};
  $scope.user={};

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

});
