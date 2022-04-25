<?php
  session_start();
  include 'connection.php';

  $sql= "DELETE FROM expense WHERE id='".$_GET['id']."'";
  $qry=mysqli_query($conn,$sql);
 
  if ($qry) {
      header('Location:../expenses.php?deleted');
  }
?>