<?php
  session_start();
  include 'connection.php';

  $sql= "DELETE FROM savings WHERE id='".$_GET['id']."'";
  $qry=mysqli_query($conn,$sql);
 
  if ($qry) {
      header('Location:../savings.php?deleted');
  }
?>