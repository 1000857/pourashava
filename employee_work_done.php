<?php 
	session_start();
	if(isset($_GET['appid'])){
			$app_id = $_GET['appid'];

			
			include_once 'db_con.php';
			$conect = connect(); 
			
			$sql = "UPDATE `employee_assign` SET `is_done` = 1 WHERE id = '$app_id'";
			
			If($conect->query($sql)){
				$_SESSION['msg'] = '<i style="color:green; margin-left:20px; font-size:20px;font-family:calibri ;"> Work Done.</i><br>';
			}else{
				$_SESSION['msg'] = "Error ".$conect->error;
			}
	}

header("location:working_assign.php");

?>