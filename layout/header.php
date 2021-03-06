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

    <nav   class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Project name</a>
        </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home"> Home</span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-modal-window">About</span></a></li>
            <li  id="inp1"><input type="text"  class="form-control" id="search" name=""></li>
            <li id="inp2"><button id="search_btn" class="btn btn-primary">SEARCH</button></li>
          </ul>  
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge">0</span></a>
              <div class="dropdown-menu" style="width:400px;">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col-md-3">Serial No</div>
                      <div class="col-md-3">Image</div>
                      <div class="col-md-3">Name</div>
                      <div class="col-md-3">Price</div>
                    </div>
                  </div>
                  <div class="panel-body"></div>
                  <div class="panel-footer"></div>
                  
                </div>
              </div>
            </li>
            <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"> Sign in</span></a>
              <ul class="dropdown-menu">
                <div style="width: 300px;">
                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-heading">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" required="" name="">
                      <label for email> Password</label>
                      <input type="password" class="form-control" id="password" required="" name="">
                    
                    
                    <a href="#" style="color:white;list-style: none">forgotten password</a>
                    <button type="submit" class="btn btn-success" id="login" style="float:right" value="Login">Login</button></div>
                   
                  </div>

                </div>
              </ul>
            </li>
            <li><a href="#"><span class="glyphicon glyphicon-user"> Sign out</span></a></li>
           
          </ul>   
      </div>
    </nav>