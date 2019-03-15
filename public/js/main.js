var app=angular.module('app', []);
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
