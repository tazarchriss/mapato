<?php
  session_start();
  include 'config/connection.php';

  $sql= "select * from debt WHERE id='".$_GET['id']."'";
  $qry=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($qry);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Billionaire | Add Debt </title>

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
</head>
<style>
body {
  background-image: url('back.jpg');

}
</style>
<body class="bg-light">
    <!-- Navbar -->
    <?php include 'include/navbar.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <a href="debts.php" class="btn btn-danger float-right"><i class="fa fa-bars"> View Debts</i> </a>
            <a href="AddDebt.php" class="btn btn-danger float-right mx-1"><i class="fa fa-plus">Add Debt</i></a>
        </div>
          <!-- /.card -->
              <?php

              if(isset($_POST['save'])) {
                $owner=$_POST['owner'];
                $reason=$_POST['reason'];
                $damount=$_POST['damount'];
                $pamount=$_POST['pamount'];
                $id=$_POST['id'];
                $remain=$damount-$pamount;
                $sql="UPDATE `debt` SET `owner`='$owner',`reason`='$reason',`damount`='$damount',`pamount`='$pamount',`remain`='$remain' WHERE `id`=$id";
                $qry=mysqli_query($conn,$sql);
                $remain=$row['remain']-$row['remain']+$remain;
                if( !$qry){
                  echo 'update error';
                }
                else{
                  header('location:debts.php');
                }
              }

              ?>
        <div class="col-md-12 mx-auto mt-2">
            <div class="card card-navy " style="opacity:96%;">
                <div class="card-header">
                  <h3 class="card-title text-light"><i class="fa fa-pen"></i> Edit Debt </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" action="" method="post">
                  <div class="card-body">
    

                    <div class="form-group">
                        <label for="exampleInputEmail1">Owner</label>
                        <input type="text" name="owner" value="<?php echo $row['owner']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Debt Owner">
                    </div>
                    <div class="form-group">
                       <textarea name="reason" class="form-control" ><?php echo $row['reason']; ?>
                       </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Debt Amount</label>
                        <input type="text" value="<?php echo $row['damount']; ?>" name="damount" class="form-control" id="exampleInputEmail1" placeholder="Enter Debt Amount">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Paid Amount</label>
                        <input type="text" name="pamount" value="<?php echo $row['pamount']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Paid Amount">
                    </div>
                    <input type="text" name="id" value="<?php echo $row['id']; ?>" hidden>
               
               
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" name="save" class="btn btn-outline-danger ">Save Changes</button>
                  </div>
                </form>
              </div>
            
        </div>
    </div>
</div>

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

