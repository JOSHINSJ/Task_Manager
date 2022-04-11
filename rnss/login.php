<?php

    session_start();
    ob_start();

$con=mysqli_connect("localhost","root","","task_manager1");
if($con)
{
  echo "";
}

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
<!--     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
<style>

body {font-family: Arial, Helvetica, sans-serif;
background-image: url('login1.jpg'); }</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>PMTM</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Purchase Module For Task manager</p>
      
      <form action="" method="POST" id="quickForm">
        <div class="input-group mb-3">
          <input type="email" name='username'id="username" class="form-control" placeholder="Username" onchange="featchrole();">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name='password' id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

         <div class="input-group mb-3">
          <input type="text" name='role1' id="role1" class="form-control" placeholder="Choose The Role">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div> 
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  $.validator.setDefaults({
   function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      username: {
        required: true,
      
      },
      password: {
        required: true,
        minlength: 5
        maxlength: 15
      },
      role1: {
        required: true,
      remember: {
        required: true
      },
    },
    messages: {
      username: {
        required: "Please enter a email address",
        
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
        maxlength: "our password must be at least 15 characters long",
      },
      role1: {
        required: "Please Choose a role ",
        
      },
      remember: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>


<?php 
if($_POST)
{
  $host="localhost";
  $user="root";
  $pass="";
  $db="task_manager1";

  $username=$_POST['username'];
  $password=$_POST['password'];
  $role=$_POST['role1'];
  $conn=mysqli_connect($host,$user,$pass,$db);
  $query="SELECT * from tm_sa_login where email='$username' and password='$password' and role='$role'";
  $result=mysqli_query($con,$query);
  if(mysqli_num_rows($result)==1)
  {
    $_SESSION['task_manager1']='true';
    header('location:purchase.php');
  }
  else
  {
    echo "wrong password";
  }
}
?>


 <script>
function featchrole() {
    var variable= document.getElementById('username').value;
    $.ajax({
        url: "service.php?request_role",
        type: "POST",
        data: {
            "username": variable
        },
        success: function (response) {
            document.getElementById('role1').value = response;
        }
    });
}
</script>
</body>
</html>


<!-- <?php
//session_start();
//if(!$_SESSION['task_manager1'])
{
 // header('location:login.php');
}
?> -->



<!-- logout

<?php
//session_start();
//session_unset();
//session_destroy();
//eader('location:login.php');
?> -->



     <!-- <li class="nav-item">
        <a href="logout.php">
        <i class="fa fa-sign-out" aria-hidden="true">logout</i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
      </li>
  </nav> -->