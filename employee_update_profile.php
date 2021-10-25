<?php 

session_start();
if($_POST){
	$fname    = $_POST['fname'];
	$lname    = $_POST['lname'];
    $bdate    = $_POST['bdate'];
	
    $phone    = $_POST['phone'];
    
	$uid      = $_SESSION['user_id'];

	include_once 'db_con.php';
	$conn = connect();

	$sql = "UPDATE `employee` SET `First_name`='$fname',`Last_name`='$lname',`Birthday`='$bdate',`Phone`='$phone' WHERE id=$uid";

	if($conn->query($sql)){
			$_SESSION['msg']= 'Your profile updated successfully.<br>';
			header('location:employee_portal.php');
	}else{
			$_SESSION['msg']= 'Your profile was not updated.<br>';
			header('location:employee_update_profile_form.php');
	}

}
?>