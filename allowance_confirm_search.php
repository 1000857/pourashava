

<?php
	session_start();
	//Search product
	$search = $_GET['search'];
	//echo $search;exit;
	$sql = "SELECT allowance.id as id, allowance.first_name as fname, allowance.nid as nid, allowance.dob as dob, allowance.phone as phone, allowance_confirmed.is_approved,allowance_confirmed.applicant_id, allowance_confirmed.month, allowance_confirmed.amount FROM allowance_confirmed
        INNER JOIN allowance ON allowance_confirmed.applicant_id = allowance.id WHERE first_name = '$search' OR nid = '$search' OR phone = '$search'";
	//Use Database configuration to connect.
	include_once 'db_con.php';
	$conn = connect();
	
	if($result = $conn->query($sql)){
		foreach($result AS $row){
			$data[] = $row;
		}
		$_SESSION['files'] = $data;
		header('location:allowance_confirmed_list.php');
	}
	
?>