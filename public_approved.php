<?php 
	session_start();
	if(isset($_GET['appid'])){
			$app_id = $_GET['appid'];
			
			include_once 'db_con.php';
			$conect = connect(); 
			
			$sql = "UPDATE `service` SET `is_approved` = 1 WHERE `service`. id = '$app_id'";
			
			
			If($conect->query($sql)){
				$_SESSION['msg'] = "Application approved successfully.";
			}else{
				$_SESSION['msg'] = "Error ".$connect->error;
			}
	}

header("location:application_list.php");

?>