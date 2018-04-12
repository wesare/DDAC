<?php
	include_once 'header.php';


?>

<section class="main-container">
	<div class="main-wrapper">
		
		<h2>Book Container</h2>
		<form class="bookcontainer-form" action="includes/bookcontainer-inc.php" method="POST">


<?php


//session awarness
if(isset($_SESSION['u_namefirst'])){

	 echo '<label for="clientname">Client: </label>';
	 echo "<select name='contain_username'>";
	 echo $_SESSION['u_namefirst'];
	 echo "<option value ='" . $_SESSION['u_namefirst'] ."'>" .$_SESSION['u_namefirst'] ."</option>";

}
		echo "</select>";
?>
			<br>
			<br>

<?php

$dbServername = "localhostddac.mysql.database.azure.com";
$dbUsername = "ahmedalhaddad@localhostddac";
$dbPassword = "Ahmed123123";
$dbName = "logindatabase";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

		$sql = "SELECT * FROM containerinfo WHERE 1";
		$result = mysqli_query($conn, $sql);

			echo '<label for="from">From: </label>';
			echo "<select name='contain_from'>";
			while ($row = mysqli_fetch_array($result)) {
			echo "<option value ='" . $row['contain_from'] ."'>" .$row['contain_from'] ."</option>";
		}
		echo"</select>";
?>
			<br>
			<br>
<?php

$dbServername = "localhostddac.mysql.database.azure.com";
$dbUsername = "ahmedalhaddad@localhostddac";
$dbPassword = "Ahmed123123";
$dbName = "logindatabase";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

		$sql = "SELECT * FROM containerinfo WHERE 1";
		$result = mysqli_query($conn, $sql);

			echo '<label for="to">To: </label>';
			echo "<select name='contain_to'>";
			while ($row = mysqli_fetch_array($result)) {
			echo "<option value ='" . $row['contain_to'] ."'>" .$row['contain_to'] ."</option>";
		}

		echo"</select>";

?>
			<br>
			<br>

			<?php

$dbServername = "localhostddac.mysql.database.azure.com";
$dbUsername = "ahmedalhaddad@localhostddac";
$dbPassword = "Ahmed123123";
$dbName = "logindatabase";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

		$sql = "SELECT * FROM containerinfo WHERE 1";
		$result = mysqli_query($conn, $sql);

			echo '<label for="size">Departure Date: </label>';
			echo "<select name='contain_DepartDate'>";
			while ($row = mysqli_fetch_array($result)) {
			echo "<option value ='" . $row['contain_DepartDate'] ."'>" .$row['contain_DepartDate'] ."</option>";
		}
		echo"</select>";
?>
			<br>
			<br>

			<?php

$dbServername = "localhostddac.mysql.database.azure.com";
$dbUsername = "ahmedalhaddad@localhostddac";
$dbPassword = "Ahmed123123";
$dbName = "logindatabase";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

		$sql = "SELECT * FROM containerinfo WHERE 1";
		$result = mysqli_query($conn, $sql);

			echo '<label for="name">Size: </label>';
			echo "<select name='contain_size'>";
			while ($row = mysqli_fetch_array($result)) {
			echo "<option value ='" . $row['contain_size'] ."'>" .$row['contain_size'] ."</option>";
		}
		echo"</select>";
?>
			<br>
			<br>


			<button type="submit" name="submit">Confirm Booking</button>
		</form>
	</div>

	<div class="info-below-wrapper">
		

		<body>

		</body>

	</div>
</section>

<?php
	include_once 'footer.php';
?>
