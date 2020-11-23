<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">

<title>User|| TEST </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
 <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/home.css">


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <script src="js/jquery.js" type="text/javascript"></script>
 <script src="js/bootstrap.min.js"  type="text/javascript"></script>

<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>
</head>

<body>
<div class="login-page">
<div class="form">
  <form class="register-form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
    <input id="name" name="name" placeholder="Enter your name"  type="text" />
    <div>
      <select id="gender" name="gender" placeholder="Enter your gender" class="form-control">
     <option value="Male">Select Gender</option>
    <option value="M">Male</option>
    <option value="F">Female</option> </select>

    </div>
    <input id="college" name="college" placeholder="Enter your college name"  type="text"/>
    <input id="email" name="email" placeholder="Enter your email-id"  type="email" />
    <input id="mob" name="mob" placeholder="Enter your mobile number"  type="number" />
    <input id="password" name="password" placeholder="Enter your password" type="password" />
    <input id="cpassword" name="cpassword" placeholder="Confirm Password"  type="password" />
    <?php if(@$_GET['q7'])
    { echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
    <button>create</button>
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form>
  <form class="login-form" action="login.php?q=home.php" method="POST">
    <h1>Sign in</h1>
      <input name="email" type="email" placeholder="Email" required />
      <input name="password" type="password" placeholder="Password" required />
      <a href="#">Forgot your password?</a>
    <button>login</button>
    <p class="message">Not registered? <a href="#">Create an account</a></p>
  </form>
</div>
</div>

<footer>
  <div class="row footer">
  <div class="col-md-4 box">
  <a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
  <div class="col-md-4 box">
  <a href="#" data-toggle="modal" data-target="#developers">Developers</a>

  </div>
  <div class="col-md-4 box">
  <a href="feedback.php" target="_blank">Feedback</a></div></div>
  <!-- Modal For Developers-->
  <div class="modal fade title1" id="developers">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
        </div>

        <div class="modal-body">
          <p>
  		<div class="row">
  		 <div class="col-md-5">
  		<a href="#" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Bruce</a>
  		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+254713504895</h4>
  		<h4 style="font-family:'typo' ">brucemugo99@gmail.com</h4>
  		<h4 style="font-family:'typo' ">University Of Embu</h4></div></div>
  		</p>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!--Modal for admin login-->
  	 <div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
        </div>
        <div class="modal-body title1">
  <div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
  <form role="form" method="post" action="admin.php?q=index.php">
  <div class="form-group">
  <input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/>
  </div>
  <div class="form-group">
  <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
  </div>
  <div class="form-group" align="center">
  <input type="submit" name="login" value="Login" class="btn btn-primary" />
  </div>
  </form>
  </div><div class="col-md-3"></div></div>
        </div>
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!--footer end-->

</footer>
 <script type="text/javascript"src="js/ref.js"></script>
</body>
</html>
