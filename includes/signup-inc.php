<?php

if (isset($_POST['submit'])) {

	include_once 'dbc-inc.php';

	$namefirst = mysqli_real_escape_string($conn, $_POST['namefirst']);
	$namelast = mysqli_real_escape_string($conn, $_POST['namelast']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//Error handling
	//check for empty fields
	if (empty($namefirst) || empty($namelast) || empty($email) || empty($uid) || empty($password)){

		header("Location: ../signup.php?signup=empty");
		exit();


	} else{
		//check if input is valid
		if (!preg_match("/^[a-zA-Z]*$/" , $namefirst) || !preg_match("/^[a-zA-]*$/" , $namelast)){

		header("Location: ../signup.php?signup=invalid");
		exit();
		} else{
			//check email if valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?signup=email");
				exit();
			} else{
				$sql = "SELECT * FROM userinfo WHERE user_uid='$uid'";
				$result = mysqli_query($conn, $sql);
				$reultCheck = mysqli_num_rows($result);

				if ($reultCheck > 0) {
							header("Location: ../signup.php?signup=usertaken");
							exit();
				}else{
					//Hashing password in database
					$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
					//INSERT the user in database
					$sql = "INSERT INTO userinfo (user_namefirst, user_namelast, user_email, user_uid, user_password) VALUES ('$namefirst', '$namelast', '$email', '$uid', '$hashedPassword');";
					mysqli_query($conn, $sql);
					header("Location: ../signup.php?signup=success");
					exit();
				}
			}

		}
	}


} else {
	header("Location: ../signup.php");
	exit();
}