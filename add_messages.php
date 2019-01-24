<?php 
	// Adding messages from form into MySQL

	// Get the values from form
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	// Prepare variables for db connection
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "admin";

	// Create connection
	$conn = new mysqli($serverName,$userName,$password,$dbName);

	// Check connection
	if($conn->connect_error){
		die("Connection failed".$conn->connect_error);
	}

	// Prepare and bind statement
	$stmt = $conn->prepare("INSERT INTO messages (name,email,message) VALUES (?,?,?)");
	$stmt->bind_param("sss", $name, $email, $message);
	$stmt->execute();

	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header('Location:connection.php');


 ?>