<?php

if (!isset($_POST['containerinfo'])) {
	header('Location: ..\viewbooking.php');
}
else {
	session_start();
	include_once 'dbc-inc.php';
	
	
	}
