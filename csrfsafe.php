<?php
session_start();

if (isset ($_GET['qty']) && isset($_GET['id'])) {

	$qty = $_GET['qty'];
    $id = $_GET['id'];
    if($_GET['token'] === $_SESSION['token']) 	{
		echo "<h2>Order placed.</h2> <br><br> Product id: ". $id . " and quantity is ". $qty;
	    $_SESSION['token'] = 0;
		die();
	}
	else {
		echo "<h3>CSRF attack</h3>";
	    die();
	}
}
else  {
	$token = md5(openssl_random_pseudo_bytes(15));
	$_SESSION['token'] = $token;
	
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Place Order</title>
   </head>
   
   <body>
      <h2>CSRF Demo</h2>
      <form action="csrfsafe.php" method="get" autocomplete="off">
	     <input type="hidden" value="<?php echo $token ?>" name="token" id="token">
	     <label for="id">
		 Product id:
		 <input type="text" name="id" id="id">
		 </label><br><br>
		 <label for="qty">
		 Quantity:
		 &nbsp;&nbsp;&nbsp;<input type="text" name="qty" id="qty">
		 </label><br><br>
		 &nbsp;&nbsp;<input type="submit" value="Order">
	   </form>
   </body>
</html>