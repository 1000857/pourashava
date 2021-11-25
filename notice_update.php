<?php 

session_start();
$notice = $_POST['notice'];
$notice_des = $_POST['notice_des'];
$noid = $_POST['noticeid'];
	
	
	

	include_once 'db_con.php';
	$conn = connect();

	$sql = "UPDATE `notice` SET `title`='$notice', `description`='$notice_des' WHERE id=$noid";
	

	if($conn->query($sql)){
			$_SESSION['msg']= 'Notice updated successfully.<br>';
			header('location:notice_update_form.php');
	}else{
			$_SESSION['msg']= 'Notice not updated.<br>';
			header('location:notice_update_form.php');
	}


?>