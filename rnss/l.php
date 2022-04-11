<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Task Manager | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
<!--     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
<style>

body {font-family: Arial, Helvetica, sans-serif;
background-image: url('login1.jpg'); }</style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <p><b>Task Manager</b></p>
    </div>
    <div id="box">
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign in to start your session</p>
          

          <form action="login.php" method="post" id="login-form">
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="EmailID" id="email" name="email" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user-alt"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="form-group">
                  <select class="form-control select2bs4" name="role" id="role">
                    <option selected="selected">-select role-</option>
                    <option>ADMIN</option>
                    <option>EMPLOYEE</option>
                  </select>
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
                <button type="submit" class="btn btn-success btn-block" id="btn_submit" name="btn_submit"  >Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          <p class="mb-1">
            <br/>
            <a href="forgotpassword.html">I forgot my password</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
  </div>`
  
  <!-- /.login-box -->
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
  <!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>