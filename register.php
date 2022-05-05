<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mapato | Register </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <style>
    body {
  background-image: url('back.jpg');

}

  </style>
</head>
<body class="">
    <!-- Navbar -->
    <nav class="navbar navbar-expand bg-navy navbar-light">
        <!-- Left navbar links -->
        <b><h3 ><a href="index.php" class="text-light"><b><i>Mapato.</i></b></a></h3></b>

</nav>    

<!-- login form -->
<div class="container mt-5">
    <div class="row">

        <div class="col-md-8 mx-auto mt-3 ">
            <div class="card card-navy opacity-25" style="opacity:94%;">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" action="config/registration.php" method="post">
                  <div class="card-body">
                  <div class="form-group col-md-6 float-left">
                      <label for="exampleInputEmail1"> First Name</label>
                      <input type="text" name="fname" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name" required>
                    </div>

                    <div class="form-group col-md-6 float-left">
                      <label for="exampleInputEmail1"> Last Name</label>
                      <input type="text" name="lname" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name" required>
                    </div>

                    <div class="form-group col-md-6 float-left">
                      <label for="exampleInputEmail1"> Username</label>
                      <input type="text" name="uname" class="form-control" id="exampleInputEmail1" placeholder="Enter Username" required>
                    </div>

                    <div class="form-group col-md-6 float-left">
                      <label for="exampleInputEmail1"> Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" required>
                    </div>

                    <div class="form-group col-md-6 float-left">
                      <label for="exampleInputPassword1">New Password</label>
                      <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required>
                    </div>

                    <div class="form-group col-md-6 float-left">
                      <label for="exampleInputPassword1">Confirm Password</label>
                      <input type="password" name="password2" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required>
                    </div>
                    <div class="form-group">
                      
                      <input type="checkbox" name="" class="form" id="remember" required>
                      <label for="remember"><a href="">Terms and Conditions</a> </label>
                      
                    </div>
                    <?php
                  if (isset($_GET["request"])){
                  ?>
                <p class="btn btn-danger btn-block disabled mx-auto " style="margin-left:20px;">wrong username or password</p>
                  <?php     
                }

                ?>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" name="register" class="btn btn-danger">Create Account</button>
                    <a href="index.php" class="btn bg-navy">Log In</a>
                  </div>

                </form>
              </div>
              <!-- /.card -->
        </div>
        
    </div>
</div>

<footer class="fixed-bottom bg-navy text-center">
  <br>
    <strong>Copyright &copy; 2022 <a href="">TazarChriss</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
 
    </div>
<h1></h1>
  </footer>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>

