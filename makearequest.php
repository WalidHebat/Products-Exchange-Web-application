<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Make A Request</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="cssproject.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url('background.jpg');margin-top:0px;margin-left:0px;margin-right:0px">
<header style="background-color:white; height:50px" >
<nav style="background-color:white class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="color:orange" class="navbar-brand" href="homepage1.php">EgyptStreetBank</a>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<!--<img src="background.jpg" style="width:1024px;height:50px;">-->

</header>
	
	<div id="main-wrapper">
		<center>
			<h2>Request something from your neighbours </h2>
			<img src="imgs/avatar1.png" class="avatar"/>
		</center>
	
		<form class="myform" action="makearequest.php"method="post">
		
			<label><b>Description:</b></label><br>
			<input name="description" type="text" class="inputvalues" placeholder="Type your Description" required/><br>
			<br>

			<label><b>Category:</b></label>
			<select name="Category">
  <option value="Books">Books</option>
  <option value="Home Appliances">Home Appliances</option>
  <option value="Toys">Toys</option>
  <option value="Technology">Technology</option>
  <option value="Furniture">Furniture</option>
  <option value="Clothing">Clothing</option></select><br>
<br><br>
			<label><b>Need's duration: </b></label> 
			<input type="text" class="inputvalues" name="state" required><br>
<!--			<label><b>Qualification: </b></label> 
			<select class="qualification" name="qualification">
			  <option value="BScIT">BScIT</option>
			  <option value="BMS">BMS</option>
			  <option value="BE.IT">BE.IT</option>
			  <option value="MCA">MCA</option>
			</select><br>
			
			<label><b>Username:</b></label><br>
			<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
			<label><b>Password:</b></label><br>
			<input name="password" type="password" class="inputvalues" placeholder="Your password" required/><br>
			<label><b>Confirm Password:</b></label><br>
			<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
-->			<input name="submit_btn" type="submit" id="signup_btn" value="Request"/><br>
<!--			<a href="index.php"><input type="button" id="back_btn" value="Back"/></a> -->
		</form>
		
		<?php
			if(isset($_POST['submit_btn']))
			{
				//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
				$description = $_POST['description'];
				$category=$_POST['Category'];
				$state = $_POST['state'];
				$username=$_SESSION['username'] ;
			//	$qualification = $_POST['qualification'];
			//	$username = $_POST['username'];
			//	$password = $_POST['password'];
			//	$cpassword = $_POST['cpassword'];
			//	if($password==$cpassword)
			//	{
					$query= "select id from userinfotable WHERE username='$username'";
					$query_run = mysqli_query($con,$query);

				while($row = $query_run->fetch_assoc()){	
		     	 // $row = mysql_fetch_array($query_run);      //stack
                  $id = $row['id'];   }//stack
				
				//	if(mysqli_num_rows($query_run)>0)
				//	{
						// there is already a user with the same username
				//		echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
				//	}
				//	else
				//	{
						$query= "insert into request values('$description','$category','$state','$id')";
						$query_run = mysqli_query($con,$query);
						
						if($query_run)
						{
				//			echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
							echo '<script type="text/javascript"> alert("Request is added") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!") </script>';
						}
				//	}					
			//	}
			//	else{
			//	echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';	
			//	}				
			}
		?>
	</div>
</body>
</html>