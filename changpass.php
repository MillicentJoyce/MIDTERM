<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
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
			height: 530px;
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
	<div class="boxer">
     <form action="foxcheck.php" method="post">
     	<center><img src="44.png" width="75%" height="50%"></center>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>


          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="username" 
                      placeholder="Username"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Username"><br>
          <?php }?>


     	
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

        
          <input type="password" 
                 name="re_password" 
                 placeholder=" Confirm Password"><br>
		<center><a href="index.php" class="ca">Already have an account?</a><br><br></center>
     	<input type="submit" value="Update Password">
          
     </form>
</body>
</html>