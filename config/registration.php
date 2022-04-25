<?php

session_start();
include 'connection.php';

if(isset($_POST['register'])) {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $uname=$_POST['uname'];
  $email=$_POST['email'];
  $password1=$_POST['password1'];
  $password2=$_POST['password2'];

if($password1!=$password2){
    header('location:../index.php?error=404');
}
else {
    $sql="INSERT INTO `user` (`fname`,`sname`,`uname`,`email`,`password`) VALUES ('$fname','$lname','$uname','$email','$password1')";
  $qry=mysqli_query($conn,$sql);

  if( !$qry){
    echo 'insertion error';
  }
  else{
    $qry="SELECT * FROM user where uname='$uname' and password='$password1' limit 1 ";

    $login=mysqli_query($conn,$qry);
    $row=mysqli_fetch_array($login);
    
    $id=$row['id'];
    $_SESSION['id']=$id;
    $_SESSION['fname']=$fname;
    $_SESSION['sname']=$lname;

    header('location:../home.php');
  }
}
  
}

?>
