<?php
 session_start();
require_once('connection.php');
    if(isset($_POST['login'])){
        $username=$_POST['uname'];
        $pass=$_POST['password'];

        $qry="SELECT * FROM user where uname='$username' and password='$pass' limit 1 ";

        $login=mysqli_query($conn,$qry);

        if(!$login) 
        {
            echo mysqli_error($login);
        }
        
        else{
        $rows=mysqli_num_rows($login);
        if($rows==0){
            header('location:../index.php?request=1');
           
        }
        else{
            $res=mysqli_fetch_array($login);
            $id=$res['id'];
            $fname=$res['fname'];
            $mname=$res['mname'];
            $lname=$res['sname'];
            

            // session creation
            $_SESSION['id']=$id;
            $_SESSION['fname']=$fname;
            $_SESSION['mname']=$mname;
            $_SESSION['sname']=$lname;
        
                header('Location:../home.php');
        
            
        }
           
        }
    }
    ?>