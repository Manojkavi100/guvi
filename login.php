<?php
session_start();
   include("connection.php");
   include("func.php");


   if($_SERVER['REQUEST_METHOD']== "POST")
   {
   $user_name = $_POST['user_name'];
    $password = $_POST['password'];
   }
   if(!empty(user_name) && !empty($password) && !is_numeric($user_name))
   {
   	$user_id = random_num(20);
     $query ="select * from users where user_name ='$user_name' limit 1";

     $result = mysqli_query($con,$query);
     if($result)
     {
     	if($result && mysqli_num_rows($result)>0)
     	{
     		$user_id =mysqli_fetch_assoc($result);
     		if($user_data['password'] === $password)
     		{
     			$_SESSION['user_id'] = $user_data['user_id'];
               header("Location : index.php");
               die;
     		}
     	}
     }
   
   }
   else
   {
   	echo "wrong user name or password";
   }


?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<style type="text/css">
		#text{
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;
		}
		#button{
			padding: 10px;
			width: 100px;
			color: green;
			background-color: lightblue;
			border: none;
		}
		#box{
			background-color: grey;
			margin: auto;
			width: 300px;
			padding: 20px;
		}
	</style>
	<div id="box">
		<form method="post">
			<div style="font-size: 20px;margin: 10px; color: whitesmoke;">login</div>
			<p>User name</p><br>
			<input id="text" type="text" name="user_name"><br><br>
			<p>Password</p><br>
			<input id="text" type="password" name="password"><br><br>
			<p>Submit</p><br>
			<input id="button" type="submit" value="login"><br><br>

			<a href="signup.php">Signup</a>

		</form>
	</div>

</body>