<?php 
	session_start();
	if(isset($_GET['appid'])){
			$app_id = $_GET['appid'];
			
			include_once 'db_con.php';
			$conect = connect(); 
			
			$sql = "UPDATE `rickshaw` SET `is_approved` = 0 WHERE `rickshaw`. id = '$app_id'";
			
			
			If($conect->query($sql)){
				$_SESSION['msg'] = "Application Declined.";
			}else{
				$_SESSION['msg'] = "Error ".$connect->error;
			}
	}

header("location:rickshaw_list.php");

?>