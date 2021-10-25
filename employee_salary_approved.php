<?php 
	session_start();
	if(isset($_GET['appid'])){
			$app_id = $_GET['appid'];


			
			include_once 'db_con.php';
			$conect = connect(); 
			
			$sql = "UPDATE `salary_confirmed` SET `is_approved` = 1 WHERE `salary_confirmed`. employee_id = '$app_id'";
			
			If($conect->query($sql)){
				$_SESSION['msg'] = "Received successfully.";
			}else{
				$_SESSION['msg'] = "Error ".$connect->error;
			}
	}

header("location:employee_salary_confirm_list.php");

?>