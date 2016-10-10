<?php
//this script is vulnerable to sql injection
//use  
//'; DROP TABLE posts; --
//to delete posts table from the database

$db = new PDO('mysql:host=127.0.0.1;dbname=null', 'root','root');
if (isset ($_POST['email'])) {
	
	$email = $_POST['email'];

	$user = $db->query("SELECT * FROM users WHERE email = ''; DROP TABLE posts; --';");
	
	if ($user->rowCount()) {
		die('<h3>Sent email.</h3>');
	}
}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Reset Password</title>
   </head>
   
   <body>
      <h2>SQL Injection Demo</h2>
      <form action="sqlinjection.php" method="post" autocomplete="off">
	    <label for="email">
		 Email address:
		 <input type="text" name="email" id="email">
		 </label><br><br>
		 &nbsp;&nbsp;<input type="submit" value="Reset Password">
	   </form>
   </body>
</html>
