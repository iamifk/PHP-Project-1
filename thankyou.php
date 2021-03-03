<?php

session_start();
include('mysqli_connect.php');

?>
<html>
<head>
<title>Book-store Cambridge</title>
<link rel="stylesheet" href="style.css">
</head>

<body>


<div id="index">
 <div id="Bookheader">
 <h2>Book Store</h2></div>
 <nav>
 <ul>

 <li><a href="index.php">Home</a></li>
 <li><a href="booklist.php">Book Shelf</a></li>
 <li><a href="contactus.php">Contact Us</a></li>
 <li><a href="aboutus.php">About US</a></li>
 </ul>
 </nav>
 <?php

	$quantity = $_SESSION['quantity'];

	$bookname = $_SESSION['bookname'];


	$res = mysqli_query($con,"SELECT * FROM BookInventory WHERE bookname='".$bookname."'");

	$row = mysqli_fetch_array($res);

	$get_quantity = $row['quantity'];

	$new_quantity = $get_quantity-$quantity;

	$query = "UPDATE BookInventory SET quantity = '$new_quantity' where bookname = '".$bookname."' ";

	if ($con->query($query) === TRUE) 
	{
	    echo "<h2>Order Successfull.</h2>";
	} 
	else 
	{
	    echo "Please Check Your Datails: " . $con->error;
	}

	?>
 <main>
 <p> Thank you for ordering with us.</p>
 </main>
 </div>
 
 </div>
 </main>
 <footer>
 Copyright © Book Store Cambridge-2021
 </footer>

</div>

</body>

</html>