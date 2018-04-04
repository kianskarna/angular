
  
<?php
/*
Developer:  Ehtesham Mehmood
Site:       PHPCodify.com
Script:     Angularjs Login Script using PHP MySQL and Bootstrap
File:       index.php
*/
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="angular/angular.min.js"></script>
        <script src="script.js"></script>
 
    </head>
<body ng-app="AngularJSLogin" ng-controller="AngularLoginController as angCtrl">
  <div class="container">
      <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="panel panel-info" >
                  <div class="panel-heading">
                      <div class="panel-title">Angularjs Login Script using PHP MySQL and Bootstrap</div>
 
                  </div>
 
                  <div style="padding-top:30px" class="panel-body" >
                      <form name="login" ng-submit="angCtrl.loginForm()" class="form-horizontal" method="POST">
 
                          <div style="margin-bottom: 25px" class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                      <input type="text" id="inputemail" class="form-control" required autofocus ng-model="angCtrl.inputData.name">
                          </div>
 
                          <div style="margin-bottom: 25px" class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                      <input type="password" id="inputpassword" class="form-control" required ng-model="angCtrl.inputData.password">
                          </div>
                          <div class="form-group">
                              <!-- Button -->
                              <div class="col-sm-12 controls">
                                 <a href="sign_up.php" type="submit" class="btn btn-primary pull-right"> Create Account</a>
                                  <button type="submit" class="btn btn-primary pull-left"><i class="glyphicon glyphicon-log-in"></i> Log in</button>
                              </div>
                          </div>
                              <div class="alert alert-danger" ng-show="errorMsg">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                      ×</button>
                                  <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;{{errorMsg}}
                              </div>
                          </form>
                      </div>
                  </div>
      </div>
  </div>

    </body>
</html>
