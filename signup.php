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
     $query ="insert into users (user_id,user_name,password) values($user_id,$user_name,$password)";
     mysqli_query($con,$query);
     header("Location : login.php");
   }
   else
   {
   	echo "please enter some valid information";
   }

?>
<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
</head>
<body>
	<style type="text/css">

		#text{
			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #ffff;
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
			<div style="font-size: 20px;margin: 10px; color: whitesmoke;">Signup</div>
			<p>User name</p><br>
			<input id="text" type="text" name="user_name"><br><br>
			<p>Password</p><br>
			<input id="text" type="password" name="password"><br><br>
			<p>Register</p><br>
			<input id="button" type="submit" value="Signup"><br><br>
			<a href="login.php">click to login</a><span>Already a user</span>

		</form>
	</div>

</body>