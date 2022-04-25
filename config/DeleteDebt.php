<?php
  session_start();
  include 'connection.php';

  $sql= "DELETE FROM debt WHERE id='".$_GET['id']."'";
  $qry=mysqli_query($conn,$sql);
 
  if ($qry) {
      header('Location:../debts.php?deleted');
  }
?>