<html><head>
    <style>
        body{
            background:url('9251.jpg') no-repeat;
            visibility: hidden;
        }
    </style>
</head>
<body>
<?php
    if($_POST){
        include "connection.php";
        
        $b=$_POST['firstname'];
        $c=$_POST['lastname'];
        $d=$_POST['mobile'];
        $e=$_POST['age'];
        $f=$_POST['Km'];
        $g=$_POST['Gender'];
        $h=$_POST['email'];
        $i= password_hash($_POST['Password'],PASSWORD_DEFAULT);
        $j=$_POST['RePassword'];
        if($b=="" || $b==null || $c=="" || $c==null || $d=="" || $d==null || $e=="" || $e==null || $f=="" || $f==null || $g=="" || $g==null || $h=="" || $h==null || $i=="" || $i==null || $j=="" || $j==null){
          
            echo '<script>alert("All field are required!")</script>';
            echo "<script>window.location.href='Registration.php';</script>";
            exit;
        }
        else if($d>=1000000000 && $d<=9999999999){
            $q="INSERT INTO `register` VALUES (NULL,'$b','$c','$d',$e,'$f','$g','$h','$i')";
            if($connection->query($q)){
                header("Location:login.php");
            }
            else{
                echo '<script>alert("Failed to insert data.")</script>'; 
            }
        }
        else{
            echo '<script>alert("Your phone number format is not correct.")</script>';
            echo "<script>window.location.href='Registration.php';</script>";
        }
    }
    else{
        exit();
    }
?></body>
</html>