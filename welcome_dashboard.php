<!DOCTYPE html>
<html>
<head>
  <title>Form Registration</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script src="angular/angular.min.js"></script>
  <script src="script.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  </style>

</head>
<body>


  <div ng-app="fromRegistration" ng-controller="fromRegistrationController" ng-init="displayData()">
    <div class="container" id="a">
      <div id="registration" style="margin-top:50px;" >
        <div class="panel panel-info">
              <div class="panel-heading">
                <div class="panel-title">Form Registration</div>
                </div>
                  <div class="panel-body" style="padding-top: 25px;">    
                    <form class="form-horizontal" method="POST" name="myForm">
                      <div class="input-group" style="margin-bottom: 25px;">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input class="form-control" id="form" type="text" name="fullname" ng-model="newFullname" placeholder="Full Name" required >
                      </div>
                      <div class="input-group" style="margin-bottom: 25px;">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                          <input class="form-control" id="email" type="email" name="email" ng-model="newEmail" placeholder="Email" required>
                           
                      </div>
                      <div class="input-group" style="margin-bottom: 25px;">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                          <input class="form-control" id="form" type="text" name="phone" ng-model="newPhone" placeholder="Phone Number" required onkeypress="return hanyaAngka(event)">
                           <input type="hidden" ng-model="id" name="regis_id">
                      </div>
                      <div class="input-group" style="margin-bottom:25px;">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil" style="top: -47px;"></i></span>
                        <textarea class="form-control" id="form"  type="text" name="address" ng-model="newAddress" rows="5" placeholder="Address" required></textarea>
                      </div>
                      <div class="form-group" id="captcha">
                        <div class="col-sm-offset-2 col-sm-6">
                        <div class="g-recaptcha" data-sitekey="6LdcxUEUAAAAAFBHXfJG3dXP9vQhh0ua1U-aQos3" >
                          
                        </div>
                          
                        </div>
                        
                      </div>

                      <div class="col-sm-8 controls" id="insert">

                          <input class="btn btn-primary  pull-left"  type="submit" name="btnInsert" ng-click="insert_again()" value="{{btnName}}">
                      </div>
                      <div class="alert alert-danger" ng-show="errorMsg">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp; {{errorMsg}}
                        
                      </div>

                     <table class="table table-bordered"  style="margin-top: 100px" id="tabel">
                        <tr>
                         <th>No</th>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th>Phone Number</th>
                          <th width="300" align="justify">Address</th>
                          <th>Actions</th>
                        </tr>
                        <tr ng-repeat="x in names">
                        <td>{{$index + 1}}</td>
                          <td>{{x.fullname}}</td>
                          <td>{{x.email}}</td>
                          <td>{{x.phone}}</td>
                          <td>{{x.address}}</td>
                          <td width="177"><button  id="item" class="btn btn-primary  pull-left"  ng-click="updateData(x.regis_id, x.fullname, x.email, x.phone, x.address)">Update</button>
                              <button  id="item2" class="btn btn-danger pull right" ng-click="deleteData(x.regis_id)" >Delete</button>
                          </td>
                        </tr>
                      </table>
                    </form>
                  </div>

              </div>          
        </div>
        
      </div>
      
    </div>
    
  </div>
</body>
</html>




