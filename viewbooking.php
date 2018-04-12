<?php
	include_once 'header.php';
?>

<section class="main-container-1">
	<div class="main-wrapper-1">
		
		<h2>View Booking</h2>
		<br>
		<form class="viewbooking-form" action="includes/viewbooking-form-inc.php" method="POST">

<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "ahmed123123";
$dbName = "logindatabase";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

		$sql = "SELECT * FROM bookcontainer WHERE container_nameofuser = '{$_SESSION['u_namefirst']}' ";
		$result = mysqli_query($conn, $sql);

		echo"<table border='1'>";
  		echo "<tr>
  			<td><b>Size</b></td>
  			<td><b>From</b></td>
  			<td><b>To</b></td>
  			<td><b>Departure</b></td>
  			<td><b>Name</b></td></tr>";
  		while ($row = mysqli_fetch_assoc($result)) {
  		echo "<tr><td>{$row['container_size']}</td><td>{$row['container_from']}</td><td>{$row['container_to']}</td><td>{$row['container_departdate']}</td><td>{$row['container_nameofuser']}</td></tr>";
  		}
  		echo "</table>";
?>
			<br>


		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>