
<?php 
include('header.php');
include_once("dbcon.php");
?>
<title>Auto Trader Register & login</title>

<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="js/registr.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
<?php include('container.php');?>

<div id ="forms">
    <div class="row f1 " data-page="rform"  id ="rform ">
  
     <div class="register_container"  >
          <form class="form-signin" method="post" id="register-form">
          <h2 class="form-signin-heading">User Registration Form</h2><hr />
          <div id="error">
          </div>
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name" />
          </div>
          <div class="form-group">
          <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
          <span id="check-e"></span>
          </div>
          <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
          </div>
          <div class="form-group">
          <input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
          </div>
      

          <hr />
          <div class="form-group">
          <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
          <span class="glyphicon glyphicon-log-in"></span>   Create Account
          </button>
          </div>
          </form>
          </div>
       </div>
      <div class="row  f1 " data-page="lform" id="lform">
       <div id="login-container"  >
      <form class="form-login" method="post" id="login-form">
        <h2 class="form-login-heading">User Log In Form</h2><hr />
        <div id="error">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
          <span id="check-e"></span>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
        </div>
        <hr />
        <div class="form-group">
          <button type="submit" class="btn btn-default" name="login_button" id="login_button">
          <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
          </button> 
        </div> 
      </form>	
            </div>
			</div>

          </div>
        </div>
 
     
<?php include('footer.php');?>