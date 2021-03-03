<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>



	<title>Book-Store</title>
	<meta charset="utf-8">

	<link rel="stylesheet"  href="style.css">
</head>
<body>
	<?php

	include('mysqli_connect.php');

	
    $id = $_GET['id'];

	$res = mysqli_query($con,"SELECT * FROM BookInventory WHERE id=".$id);
	
	$row = mysqli_fetch_array($res);

	$bookname = $row['bookname'];
    
	$_SESSION['bookname'] = $bookname;

	?>
	<div id="container">
		
		<div id="Bookheader">
			<header> <h1>Book-Store</h1> </header>
		</div>

		<nav>
			<ul>
            <li><a href="index.php">Home</a></li>
 <li><a href="booklist.php">Book Shelf</a></li>
 <li><a href="contactus.php">Contact Us</a></li>
 <li><a href="aboutus.php">About US</a></li>
			</ul>				
		</nav>

		<main>
			<div id="index-white">
				<div id="form">
					<?php

					echo "You have selected the book \" ".$bookname."\"";

					?>
					<h4>Fill in your details to order this book</h4>


						<form action="order.php" method="POST">

							<input type="hidden" name="id" value="<?php echo $id ?>" >
							<input type="hidden" name="bookname" value="<?php echo $bookname ?>" >

							<label for="fname">First Name</label>
							<input type="text" id="fname" name="fname">
							<span class="error">* </span><br>

							<label for="lname">Last Name</label>
							<input type="text" id="lname" name="lname">
							<span class="error">*</span>

							<label for="lname">Quantity</label>
							<input type="text" id="quantity" name="quantity">
							<span class="error">*</span> <br>

							<label for="payment">Payment Option</label><br>
							<input type="radio" name="payment" value="credit">Credit<br>
							<input type="radio" name="payment" value="debit">Debit<br>
							
							<span class="error">* </span><br><br>



								<input type="Submit" name="submit" value="Submit">
							
						</form>

				</div>
			</div>
		</main>

		<footer>
				
        Copyright © Book Store Cambridge-2021

		</footer>

	</div>

</body>
</html>