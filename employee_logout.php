<?php
	session_start();
	unset($_SESSION['loggedin']);
	header('location:employee_signin_form.php');
?>