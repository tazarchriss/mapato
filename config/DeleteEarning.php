<?php
  session_start();
  include 'connection.php';

  $sql= "DELETE FROM earning WHERE id='".$_GET['id']."'";
  $qry=mysqli_query($conn,$sql);
 
  if ($qry) {
      header('Location:../earnings.php?deleted');
  }
?>