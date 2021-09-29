<?php 

session_start();
if($_POST){
	$fname    = $_POST['fname'];
	$lname    = $_POST['lname'];
    $bdate    = $_POST['bdate'];
	$email    = $_POST['email'];
    $phone    = $_POST['phone'];
    
	$uid      = $_SESSION['user_id'];

	include_once 'db_con.php';
	$conn = connect();

	$sql = "UPDATE `member` SET `First_name`='$fname',`Last_name`='$lname',`Birthday`='$bdate',`Email`='$email',`Phone`='$phone' WHERE id=$uid";

	if($conn->query($sql)){
			$_SESSION['msg']= 'Your profile updated successfully.<br>';
			header('location:update_profile_form.php');
	}else{
			$_SESSION['msg']= 'Your profile was not updated.<br>';
			header('location:update_profile_form.php');
	}

}
?>