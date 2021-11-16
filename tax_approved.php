<?php 
	session_start();
	if(isset($_GET['appid'])){
			$app_id = $_GET['appid'];

			
			include_once 'db_con.php';
			$conect = connect(); 
			
			$sql = "UPDATE `tax` SET `is_approved` = 1 WHERE `tax`. applicant_id = '$app_id'";
			
			If($conect->query($sql)){
				$_SESSION['msg'] = "Received successfully.";
			}else{
				$_SESSION['msg'] = "Error ".$connect->error;
			}
	}

header("location:tax_confirmed_list.php");

?>