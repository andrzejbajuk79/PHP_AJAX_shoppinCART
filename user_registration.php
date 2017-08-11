<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
 
  </head>

  <body>

    <div  class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Project name</a>
        </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home"> Home</span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-modal-window">About</span></a></li>
            <li  id="inp1"><input type="text"  class="form-control" id="search" name=""></li>
        </ul>
      </div>
    </div>
    <p><br><br><br></p>
    <div class="container-fluid">
     <div class="row">
     <div class="col-md-2"></div>
              <div class="col-md-8" id="signup-msg">
                <!-- alert from signup form -->

            </div>
            <div class="col-md-2"></div>
   </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="panel panel-primary">
            <div class="panel-heading">Cusomer  Sign Up FORM</div>
            <div class="panel-body">
             <form method="post">
      
          
            <div class="row">
              <div class="col-md-6">
                <label for="f_name">First Name</label>
                <input type="text" id="f_name"  class=" form-control"  name="f_name" >
              </div>  
              <div class="col-md-6">
                 <label for="l_name">Last Name</label>
                <input type="text" class=" form-control" name="l_name" id="l_name"> 
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="email">Email</label>
                <input type="text" id="email"  class=" form-control"  name="email" >
              </div>  
              
            </div>
              <div class="row">
              <div class="col-md-12">
                <label for="password">Password</label>
                <input type="password" id="password"  class=" form-control"  name="password" >
              </div>  
              
            </div>
                 <div class="row">
              <div class="col-md-12">
                <label for="repassword">Re-enter Password</label>
                <input type="password" id="repassword"  class=" form-control"  name="repassword" >
              </div>  
              
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="mobile">Mobile</label>
                <input type="text" id="mobile"  class=" form-control"  name="mobile" >
              </div>  
              
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="address1">Address line 1</label>
                <input type="text" id="address1"  class=" form-control"  name="address1" >
              </div>  
              
            </div>
             <div class="row">
              <div class="col-md-12">
                <label for="address2">Address line 1</label>
                <input type="text" id="address2"  class=" form-control"  name="address2" >
              </div>  
              
            </div>
            <p><br><br></p>
             <div class="row">
              <div class="col-md-12">
                <input type="button" id="signup_button" name="signup_button" class="pull-right btn btn-success btn-lg" value="ACCEPT">
              </div>  
              
            </div>
              
            
             </form>
            <div class="panel-footer">dss</div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
     <script src="js/script.js"></script>

  </body>
</html>