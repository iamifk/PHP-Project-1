<?php

session_start();	


		include('mysqli_connect.php');

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
		  if (empty($_POST["fname"])) 
		  {
		    header("location:checkout.php");

		  } 
		  else 
		  {
		    $fname = $_POST["fname"];
		  }
		  


		  if (empty($_POST["lname"])) 
		  {
		    header("location:checkout.php");
		    
		  } 
		  else 
		  {
		    $lname = $_POST["lname"];
		  }
          if(empty($_POST["quantity"]))
		  {
		  	header("location:checkout.php");
		  	
		  }
		  else
		  {
		  	$quantity = $_POST["quantity"];
		  }

            if(empty($_POST["bookname"]))
		  {
		  	header("location:checkout.php");
		  	
		  }
		  else
		  {
		  	$bookname = $_POST["bookname"];
		  }

		  if(empty($_POST["payment"]))
		  {
		  	header("location:checkout.php");	
		  }
		  else
		  {
		  	$payment = $_POST["payment"];
		  }  

		}

		
			$sql = "INSERT INTO orders (firstname, lastname, bookname, quantity, payment_method) VALUES ('$fname', '$lname', '$bookname','$quantity','$payment')";

			if (mysqli_query($con, $sql)) 
			{
			    
				header('location:thankyou.php');

				$_SESSION['quantity'] = $quantity;

			} 
			else 
			{
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}


	?>