<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="template1/img/horison2.png">
  <title>Login Hotel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="template2/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="template2/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="template2/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><b>LOGIN</b></p>

      <form action="cek_login.php" method="post">
         <form class="needs-validation">
          <div class="form-group was-validated mb-2 col-sm-12">
            <input type="text" name = "username" class="form-control" placeholder="Username" required></input>
            <div class="invalid-feedback">
              Masukan Username


            </div>
          </div>
        <form class="needs-validation">
        <div class="form-group was-validated mb-6 col-sm-12">
          <input type="password" name="password" class="form-control" placeholder="Password" required></input>
          <div class="invalid-feedback">
              Masukan Password

            </div>
          </div>
       
        <div class="row">
          <div class="col text-center">
            <button type="submit" class="center btn btn-success btn-block">Masuk</button>
            <a type="button" href="index.php" class="center btn btn-danger btn-block">Kembali</a>
          </div>
    
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="template2/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="template2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="template2/dist/js/adminlte.min.js"></script>
</body>
</html>
