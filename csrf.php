<?php
//this file is vulnerable to csrf attack. Use csrf-attack.php to do attack on this script

if (isset ($_GET['qty']) && isset($_GET['id'])) {
	
	$qty = $_GET['qty'];
        $id = $_GET['id'];
	
	echo "<h2>Order placed.</h2> <br><br> Product id: ". $id . " and quantity is ". $qty;
	die();
}


?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Place Order</title>
   </head>
   
   <body>
      <h2>CSRF Demo</h2>
      <form action="csrf.php" method="get" autocomplete="off">
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
