<?php
//this script is safe from sql injection
//its a sample script to showcase parametrized query

$db = new PDO('mysql:host=127.0.0.1;dbname=null', 'root','root');
if (isset ($_POST['email'])) {
	
	$email = $_POST['email'];

	//prepare the statement
	$user = $db->prepare("SELECT * FROM users WHERE email = :email");
	//replace the email tag with the value of email got from form
	$user->execute([
	'email' => $email,
	]);
	
	if ($user->rowCount()) {
		die('<h3>Sent email.</h3>');
	}
}
// '; DROP TABLE posts; --
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Reset Password</title>
   </head>
   
   <body>
      <h2>SQL Injection Safe Demo</h2>
      <form action="sqlsafe.php" method="post" autocomplete="off">
	    <label for="email">
		 Email address:
		 <input type="text" name="email" id="email">
		 </label><br><br>
		 &nbsp;&nbsp;<input type="submit" value="Reset Password">
	   </form>
   </body>
</html>
