<!DOCTYPE html>
<html>
<head>
	<title>Registration For Marathon</title>
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.1-web/fontawesome-free-5.12.1-web/css/all.css">
	<style>
		*{
padding: 0;
margin: 0;
box-sizing: border-box;
font-family: "montserrat",sans-serif;
}

body{
    text-decoration: none;
     background: url('9251.jpg') no-repeat;
    height: 100vh;
}
h1{
  text-align: center;
  font-size: 40px;
  color: #ff1a1a;
}
.form{
	margin-top: 40px;
    background: black;
    height: 800px;
    width: 500px;
    top: 50%;
    left: 50%;
    border-radius: 10px;
    position: relative;
    padding: 50px 40px;
    transform: translate(-50%,-50%);
    border: 2px solid black;
    opacity: 0.7;
    color: white;
   
}
#label1{
  font-size: 17px;
  margin-top: 10px;
}
#firstname,#lastname,#email,#Password,#RePassword,#age,#mobile,#Km{background: transparent;
  width: 93%;
  border: none;
  margin-top: 4px;
  margin-bottom: 4px;
  height: 30px;
  border-bottom:2px solid #000000;
  margin-left: 7px;
  color: #ff1a1a;}
  #Km{
  		width: 90%;
  }
#firstname:hover,#lastname:hover,#email:hover,#Password:hover,#RePassword:hover,#age:hover,#mobile:hover,#Km:hover{
  border-bottom:2px solid #ff1a1a;
}
div h1{
    text-align: center;
    margin-bottom: 40px;
    font-size: 40px;
    font-style:bold;
    color: #0000ff;
} 
#login_btn{
    margin-top: 27px;
    margin-bottom: 40px;
    width: 100%;
   
    height: 40px;
    font-size: 24px;
    border-radius: 10px;
    border: 2px solid black;
  
}

  #email,#Password,#RePassword{
    width: 92%;
  }
#icons{
  padding: 14px;
  color: #00ff00;
}
.content{
  background-color:#666666;
  color: #fff;
  padding-bottom: 40px;
}


	</style>

</head>
<body>
	<form class="form" method="POST" name="reg" action="register_backend.php">
        <h1 id="h1">Register</h1>
        <p id="label1">First Name:</p><i class="fas fa-user"></i><input type="text" name="firstname" id="firstname"/><br>
        <p id="label1">Last Name:</p><i class="fas fa-user"></i><input type="text" name="lastname" id="lastname"/><br>
        <p id="label1">Mobile Number:</p><i class="fas fa-mobile"></i><input type="text" name="mobile" id="mobile">
        <p id="label1">Age:</p><i class="fas fa-user"></i><input type="text" name="age" id="age"/><br>
        <p id="label1">Km For Race:</p><i class="fas fa-flag-checkered"></i>
        	<select id="Km" name="Km">
        		<option value="3 Km">3 Km</option>
        		<option value="5 Km">5 Km</option>
        		<option value="7 Km">7 Km</option>
        		<option value="10 Km">10 Km</option>
        	</select><br>
        <p id="label1">Gender:</p><i class="fas fa-venus-mars"></i>  &nbsp  &nbsp  &nbsp <i class="fas fa-male"></i>
         <input type="radio" name="Gender" id="Gender" value="male"> Male  &nbsp  &nbsp <i class="fas fa-female"></i> 
         <input type="radio" name="Gender"  id="Gender" value="female"> Female	

        <p id="label1">Email ID:</p><i class="fas fa-envelope"></i><input type="email" name="email" id="email"/><br>
        <p id="label1">Password:</p><i class="fas fa-lock-open"></i><input type="Password" name="Password" id="Password"><br>
        <p id="label1">Confirm Password:</p><i class="fas fa-lock-open"></i><input type="Password" name="RePassword" id="RePassword"><br>
        <input type="submit" name="submit" value="Register" id="login_btn"> <span class="output" style="color: white;"></span>
    </form>
</body>
</html>