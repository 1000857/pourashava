

<?php
	session_start();
	//Search product
	$search = $_GET['seba_type'];
	$sql = "SELECT * FROM `service` 
			WHERE service_name ='$search'";
	//Use Database configuration to connect.
	include_once 'db_con.php';
	$conn = connect();
	$result = $conn->query($sql);
	if($result->num_rows>0){
		foreach($result AS $row){
			$data[] = $row;
		}
		$_SESSION['files'] = $data;
		header('location:application_list.php');
	}else{
		$_SESSION['msg']= 'No Data Found';
		header('location:application_list.php');
	}
	
?>