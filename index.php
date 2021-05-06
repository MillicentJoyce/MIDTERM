<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
		<style>
		body{
			margin: 0;
			padding: 0;
			background: url(bg.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			font-family: 'Poppins', sans-serif;

		}
		.boxer{
			width: 390px;
			height: 450px;
			border: groove;
			border-radius: 5px;
			border-color:  #6b3e2e;
			box-shadow: 3px 3px 3px 3px   #6b3e2e; 
			background-color:  #e3c099;
  			padding: 20px;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 30px 30px;
		}
		.pik{
			width: 100px;
			height: 100px;
			border-radius: 50%;
			position: absolute;
			top: -50px;
			left: calc(50% - 50px);
		}
		.h1{
			margin: 0;
			padding: 0 0 20px;
			text-align: center;
			font-size: 22px;
			color: white;
		}
		.boxer p {
			margin: 0;
			padding: 0;
			font-weight: bold;
		}
		.boxer input{
			width: 100%;
			margin-bottom: 20px;
		}
		.boxer input[type="text"], input[type="password"]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: black;
			font-size: 16px;	
		}
		.boxer input[type="submit"]{
			border: none;
			outline: none;
			height: 40px;
			background: #664229;
			color: #fff;
			font-size: 18px;
			border border-radius: 20px;
		}
</style>
</head>
<body>
     <form action="login.php" method="post">
     	<div class="boxer">
            <center><img src="log.png" width="60%" height="60%"></center>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<input type="text" name="uname" placeholder="Username"><br>

     	<input type="password" name="password" placeholder="Password"><br>
            
        <input type="submit" value="Login">
			<a href="logout.php" class="ca"></a><br/><br>
			<a href="changpass.php" class="ca">Forgot Password ? </a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     		<a href="signup.php" class="ca">Create an Account</a><br><br>
          
     </form>
</body>
</html>