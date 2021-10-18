<?php 
	session_start();
	if(isset($_GET['appid'])){
			$app_id = $_GET['appid'];
			
			include_once 'db_con.php';
			$conect = connect(); 
			
			$sql = "UPDATE `allowance_confirmed` SET `is_approved` = 1 WHERE `allowance_confirmed`. id = '$app_id'";
			
			
			If($conect->query($sql)){
				$_SESSION['msg'] = "Received successfully.";
			}else{
				$_SESSION['msg'] = "Error ".$connect->error;
			}
	}

header("location:allowance_confirmed_list.php");

?>