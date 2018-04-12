<?php

session_start();

if (isset($_POST['submit'])) {
	include 'dbc-inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//Error checking
	//Check if input is empty

	if(empty($uid) || empty($password)) {
			header("Location: ../index.php?login=empty1");
			exit();
	}else{
		$sql = "SELECT * FROM userinfo WHERE user_uid='$uid' OR user_email='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1){
			header("Location: ../index.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//dehashing password
				$hashedPasswordCheck = password_verify($password, $row['user_password']);
				if ($hashedPasswordCheck == false) {
					header("Location: ../index.php?login=empty2");
					exit();
				} elseif ($hashedPasswordCheck == true) {
					//login user code
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_namefirst'] = $row['user_namefirst'];
					$_SESSION['u_namelast'] = $row['user_namelast'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
	}

} else {
	header("Location:../index.php?login=error");
	exit();
}