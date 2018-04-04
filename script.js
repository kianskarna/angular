var app =angular.module('AngularJSLogin', []);
  app.controller('AngularLoginController', ['$scope', '$http', function($scope, $http) {
    this.loginForm = function() {
 
      var user_data='user_name=' +this.inputData.name+'&user_password='+this.inputData.password;
 
      $http({
        method: 'POST',
        url: 'login.php',
        data: user_data,
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      })
      .success(function(data) {
        console.log(data);
        if ( data.trim() === 'correct') {
          window.location.href = 'welcome_dashboard.php';
        } else {
          $scope.errorMsg = "Invalid Email and Password";
        }
      });
    }
 
  }]);

var app =angular.module("AngularJSCreate" ,[]);
app.controller("AngularCreateController", function($scope, $http){
  $scope.insert = function(){
    $http.post(
      "insert_data.php",{
        'name': $scope.newName,
        'password' : $scope.newPassword,
  
      }
      ).success(function(data){
      alert(data);
      $scope.newName = null;
      $scope.newPassword = null;
     
console.log(data);
        if ( data.trim() === 'Insert Data Successfully') {
          window.location.href = 'index.php';
        } else {
          $scope.errorMsg = "Username was already been used";
        }
    });
  }
});



var app = angular.module('fromRegistration', []);
app.controller('fromRegistrationController', function($scope,$http){
    $scope.btnName ="ADD";
    $scope.insert_again= function(){
      if ($scope.newFullname == null) {
        alert("Full Name is required ");
      }
      else if($scope.newEmail == null){
        alert("Email is required");
      }
      else if ($scope.newPhone == null) {
        alert("Phone Number is required");
      }
      else if ($scope.newAddress == null) {
        alert("Address is required");
      }
      else{


      $http.post(
        "insert.php",{
          'fullname': $scope.newFullname,
          'email' : $scope.newEmail,
          'phone' : $scope.newPhone,
          'address' : $scope.newAddress,
          'btnName' : $scope.btnName,
          'regis_id' : $scope.id
        }
        ).success(function(data){
          alert(data);
          $scope.newFullname =null;
          $scope.newEmail = null;
          $scope.newPhone = null;
          $scope.newAddress =null;
          $scope.btnName ="ADD";
          $scope.displayData();
          console.log(data);
          if (data.trim() === 'Insert Data Successfully') {
            window.location.href ='welcome_dashboard.php';
          }
            else
            {
              scope.errorMsg = "Invalid Data";
            }
          
        });
      }
    }

      $scope.displayData = function(){
        $http.get("select.php")
        .success(function(data){
          $scope.names =data;
        });
      }

      $scope.updateData = function(regis_id, fullname, email, phone, address){
        $scope.id = regis_id;
        $scope.newFullname = fullname;
        $scope.newEmail = email;
        $scope.newPhone = phone;
        $scope.newAddress = address;
        $scope.btnName = "Update";
      }

      $scope.deleteData =function(regis_id){
        if (confirm("Are you sure want to delete this data ? ")) {
          $http.post("delete.php",{
            'regis_id': regis_id})
            .success(function(data){

            
            alert(data);
            $scope.displayData();
          });
        }
      }

});





function hanyaAngka(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;
  return true;
}




