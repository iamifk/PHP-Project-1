<?php

		include('mysqli_connect.php');

		$result = mysqli_query($con,"SELECT * FROM BookInventory");

	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>BookStore</title>
	<meta charset="utf-8">

	<link rel="stylesheet"  href="style.css">
</head>
<body>

	

	<div id="container">
		
		<div id="Bookheader">
			<header> <h1>Book Store</h1> </header>
		</div>

		<nav>
			<ul>
<li><a href="index.php">Home</a></li>
 <li><a href="booklist.php">Book Shelf</a></li>
 <li><a href="contactus.php">Contact Us</a></li>
 <li><a href="aboutus.php">About US</a></li>
			</ul>				
		</nav>

		<div id="book">
			
			<div id="table">
				<table>

					<thead>

						<tr>
							<th>Book Name</th>

							<th>Price</th>
							
							<th>Quantity Remaining</th>
							
						</tr>
						
					</thead>

					<tbody>
						
						<?php

							while($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td><a href='checkout.php?id=".$row['id']."'>" . $row['bookname'] . 	"</a></td>";
								echo "<td>" . $row['price']." CAD" . 		"</td>";
								echo "<td>" . $row['quantity'] . 	"</td>";
								echo "</tr>";
							}

						?>

					</tbody>
				</table>
			</div>

		</div>

		<footer>
				
        Copyright © Book Store Cambridge-2021
		</footer>

	</div>

</body>
</html>