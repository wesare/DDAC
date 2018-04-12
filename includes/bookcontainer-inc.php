<?php

if (isset($_POST['submit'])) {

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "ahmed123123";
$dbName = "logindatabase";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

		$container_n = $_POST['contain_username'];
		$container_f = $_POST['contain_from'];
		$container_t = $_POST['contain_to'];
		$container_s = $_POST['contain_size'];
		$container_d = $_POST['contain_DepartDate'];



			//INSERT the user in database
			$sql = "INSERT INTO bookcontainer (container_size, container_from, container_to, container_departdate, container_nameofuser) VALUES ('$container_s', '$container_f', '$container_t', '$container_d', '$container_n');";
			mysqli_query($conn, $sql);
			header("Location: ../index.php?=Csuccess");
			exit();

}else {
	header("Location: ../bookcontainer.php");
	exit();
	
}