<?php
    session_start();
?><html><head>
    <style>
        body{
            background:url('8735.jpg') no-repeat;
        }
    </style>
</head><body><?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        include "connection.php";
        $b=$_POST['username'];
        $c=$_POST['password'];
        if($b=="" || $b==null || $c=="" || $c==null){
          
            echo '<script>alert("Username or Passwords is empmty")</script>';
            echo "<script>window.location.href='login.php';</script>";
            exit;
        }
        else{
            $d="SELECT `email_id`,`password` FROM register WHERE `email_id`='$b'";
            $e=mysqli_query($connection,$d);
            $f=mysqli_fetch_array($e,MYSQLI_ASSOC);
            $g=mysqli_num_rows($e);
            if($g == 1){
                if(password_verify($c,$f['password'])){
                    header("Location:result.php");
                    $_SESSION['email']=$b;
                }
            }
            else{
                echo '<script>alert("Incorrect Username or Password")</script>';
                echo "<script>window.location.href='login.php';</script>";
            }
        }
    }
    else{
        echo '<script>alert("Request is not POST.")</script>'; 
    }
?></body>
</html>