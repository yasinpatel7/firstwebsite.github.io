<?php
    session_start(); 
?>
<?php
    if(!isset($_SESSION['email'])){
        header("Location:login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Google map</title>
    <style>
        body{
            background: url('532742.jpg');
            color:#ff1a1a;
        }
        h1{
            text-align:center;
        }
        h2{
            text-align:center;
        }
        input{
            margin-left:660px;
            height:40px;
            margin-top:40px;
            width:200px;
        }
        .bt{
            width: 50x;
            background:grey;
            border: 2px solid #ff1a1a;
            color: red;
            padding: 01px;
            font-size: 18px;
            cursor: pointer;
            margin: 12px 0;
            
        }
    </style>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['email'] ?></h1>
    <h2>Given map is your route for marathon. Thank You.</h2>
	<section>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14767.0564600008!2d73.14156467914944!3d22.286923565286738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc6268f44848f%3A0xb32cecab651bd158!2sTandalja%2C+Vadodara%2C+Gujarat!5e0!3m2!1sen!2sin!4v1559457441630!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <a href="logout.php"><input type="submit"  class="bt" value="Logout" /></a>
</body>
</html>