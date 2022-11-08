<?php
session_start();
   include("connection.php");
   include("func.php");

   $user_data = check_login($con);


?>
<!DOCTYPE html>
<html>
<head>
	<title>my web</title>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h1>this is the index page</h1>
	<br><h1>heloo</h1>
</body>
</html>