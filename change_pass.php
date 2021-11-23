<?php 

session_start();

$cpass     	= $_POST['cpass'];
$npass  	= $_POST['npass'];
$mid      = $_SESSION['user_id'];

if($cpass == ''){
			$_SESSION['msg']= '<i style="color:red; font-size:20px;font-family:calibri ;"> Insert your current password.</i><br>';
			header('location:change_pass_form.php');
			exit;
		}
if($npass == ''){
			$_SESSION['msg']= '<i style="color:red; font-size:20px;font-family:calibri ;"> Insert your new password. </i><br>';
			header('location:change_pass_form.php');
			exit;
		}
include_once 'db_con.php';
$conn = connect();

$sql = "SELECT Password FROM member WHERE id ='$mid'";
$output= $conn->query($sql);

Foreach ($output AS $row){
	$password= $row['Password'] ;
}
if($cpass == $password){
	$sql = "UPDATE `member` SET `Password`='$npass' WHERE id =$mid";
	$conn->query($sql);
	$_SESSION['msg']= '<i style="color:green; font-size:20px;font-family:calibri ;"> Your password updated successfully.</i><br>';
	header('location:index.php');
}else{
	$_SESSION['msg']= '<i style="color:red; font-size:20px;font-family:calibri ;"> Incorrect current password. </i><br>';
	header('location:change_pass_form.php');
}



?>