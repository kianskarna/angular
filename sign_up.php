<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="robot" content="noindex">
	<meta name="viewport" content="widht=device-widht, intial-scale-1">
	<title>Creat Account</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" id="boostrap-css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="angular/angular.min.js"></script>
	<script src="script.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body ng-app="AngularJSCreate" ng-controller="AngularCreateController as angCtrl">
	<div class="container" id="container">
		<div id="loginbox" style="margin-top: 50px;" class="mainbox col-md-6 col-md-offset-3 col-md-8 col-md-offset-2" >
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">Create Account</div>
				</div>
				<div style="padding-top:30px" class="panel-body">
					<form class="form-horizontal" method="POST" >
						<div style="margin-bottom:25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" id="inputuser" class="form-control" ng-model="newName" placeholder="Username" name="name">
						</div>
						<div style="margin-bottom:25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" id="inputuser" class="form-control" ng-model="newPassword" placeholder="Password" name="password">
						</div>
						<div style="margin-bottom: 30px;" class="col-sm-12 controls">
							<input type="submit" name="insert" class="btn btn-primary pull-left"  ng-click="insert()" value="Simpan">
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