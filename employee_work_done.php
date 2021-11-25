<?php 
	session_start();
	if(isset($_GET['appid'])){
			$app_id = $_GET['appid'];

			
			include_once 'db_con.php';
			$conect = connect(); 
			
			$sql = "UPDATE `employee_assign` SET `is_done` = 1 WHERE `employee_assign`. employee_id = '$app_id'";
			
			If($conect->query($sql)){
				$_SESSION['msg'] = "Received successfully.";
			}else{
				$_SESSION['msg'] = "Error ".$connect->error;
			}
	}

header("location:working_assign.php");

?>