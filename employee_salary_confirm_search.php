

<?php
	session_start();
	//Search product
	$search = $_GET['search'];
	//echo $search;exit;
	

	$sql = "SELECT employee.id as id, employee.First_name as fname, employee.Email as Email, employee.Phone as Phone, employee.Post as Post, salary_confirmed.month, salary_confirmed.amount, salary_confirmed.is_approved, salary_confirmed.employee_id FROM salary_confirmed
        INNER JOIN employee ON salary_confirmed.employee_id = employee.employee_id WHERE First_name = '$search' OR Email = '$search' OR Phone = '$search'";
	//Use Database configuration to connect.
	include_once 'db_con.php';
	$conn = connect();
	
	if($result = $conn->query($sql)){
		foreach($result AS $row){
			$data[] = $row;
		}
		$_SESSION['files'] = $data;
		header('location:employee_salary_confirm_list.php');
	}
	
?>