<?php 

session_start();

$cpass     	= $_POST['cpass'];
$npass  	= $_POST['npass'];
$mid      = $_SESSION['user_id'];

if($cpass == ''){
			$_SESSION['msg']= 'Insert your current password.<br>';
			header('location:employee_change_pass_form.php');
			exit;
		}
if($npass == ''){
			$_SESSION['msg']= 'Insert your new password.<br>';
			header('location:employee_change_pass_form.php');
			exit;
		}
include_once 'db_con.php';
$conn = connect();

$sql = "SELECT Password FROM employee WHERE id ='$mid'";
$output= $conn->query($sql);

Foreach ($output AS $row){
	$password= $row['Password'] ;
}
if($cpass == $password){
	$sql = "UPDATE `employee` SET `Password`='$npass' WHERE id =$mid";
	$conn->query($sql);
	$_SESSION['msg']= 'Your password updated successfully.<br>';
	header('location:employee_portal.php');
}else{
	$_SESSION['msg']= 'Incorrect current password.<br>';
	header('location:employee_change_pass_form.php');
}



?>