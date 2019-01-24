<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Contact</title>
	<link rel="shortcut icon" type="image/png" href="https://img.icons8.com/ios-glyphs/30/000000/palm-tree.png"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<style type="text/css">
		#table{
			font-size: 15px;
			text-align: justify;
		}
		#table th{
			font-size: 20px;
			background: #343a40;
			color: white;
		}
	</style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" style="font-size: 14px;">
<div class="container-fluid">
	<a class="navbar-brand" href="index.html"><i class="fa fa-diamond" style="font-size: 34px;"></i></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav ml-auto">
    	<li class="nav-item">
    		<a class="nav-link" href="index.html">Home</a>
    	</li>
    	<li class="nav-item">
    		<a class="nav-link" href="tours.html">Tours</a>
    	</li>
    	<li class="nav-item">
    		<a class="nav-link" href="deals.html">Deals</a>
    	</li>
    	<li class="nav-item">
    	<li class="nav-item">
    		<a class="nav-link" href="contact.html">Contact</a>
    	</li>
    	<li class="nav-item active">
    		<a class="nav-link" href="connection.php">Admin</a>
    	</li>
    </ul>
  </div>
</nav>
<!-- Navigation -->

<!-- Buttons -->
<div class="container">
	<button id="table-btn" class="last-button btn btn-outline-light text-center">Show Table</button>
	<button id="messages-btn" class="last-button btn btn-outline-light text-center">Show Messages</button>
</div>
<!-- Buttons -->


<!-- Contact -->
	<div class="container avb">
		<div class="head-section">
		    <h1 class="display-5">Availables</h1>
		</div>
	</div>
<!-- Contact -->


<!-- AVAILABLES -->
<?php 
$user = 'root';
$password = '';
$db = 'admin';
$db = new mysqli('localhost', $user, $password, $db) or die("Unable to connect");
$query = mysqli_query($db, "SELECT * FROM destinations");
 ?>

	<div class="container avb">
	<table class="table table-sm table-hover table-bordered" id="table">
		<tr>
			<th>City</th>
			<th>Country</th>
			<th>Hotel</th>
			<th>Price</th>
			<th>Rooms</th>
		</tr>
	</div>

<?php 
	while($row = mysqli_fetch_array($query)){
		echo "<tr>";
		echo "<td>".$row['City']."</td>";
		echo "<td>".$row['Country']."</td>";
		echo "<td>".$row['Hotel']."</td>";
		echo "<td>"."£".$row['Price']."</td>";
		echo "<td>".$row['Available']."</td>";
		echo "<tr>";
	}
	mysqli_close($db);
	
 ?>
</table>
</div>
<!-- AVAILABLES -->


<!-- MESSAGES -->
	<div class="container messages">
		<div class="head-section">
		    <h1 class="display-5">Messages</h1>
		</div>
	</div>
<!-- MESSAGES -->


<!-- MESSAGES -->
<?php
$user = 'root';
$password = '';
$database = 'admin';
$database = new mysqli('localhost', $user, $password, $database) or die("Unable to connect"); 
$query2 = mysqli_query($database, "SELECT * FROM messages");
?>

<div class="container messages">
<table class="table table-sm table-hover table-bordered" id="table">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Message</th>
	</tr>
</div>

<?php
while($row = mysqli_fetch_array($query2)){
		echo "<tr>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['message']."</td>";
		echo "<tr>";
	}
	mysqli_close($database);

 ?>
</table>
<!-- MESSAGES -->



	<script type="text/javascript" src="assets/js/lib/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>