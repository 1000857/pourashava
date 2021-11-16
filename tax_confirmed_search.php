

<?php
	session_start();
	//Search product
	$search = $_GET['search'];
	//echo $search;exit;
	$sql = "SELECT house.id as id, house.name as fname, house.nid as nid, house.dob as dob, house.phone as phone, tax.year, tax.amount, FROM tax
        INNER JOIN house ON tax.applicant_id = house.id WHERE name = '$search' OR nid = '$search' OR phone = '$search'";
	//Use Database configuration to connect.
	include_once 'db_con.php';
	$conn = connect();
	
	if($result = $conn->query($sql)){
		foreach($result AS $row){
			$data[] = $row;
		}
		$_SESSION['files'] = $data;
		header('location:tax_confirmed_list.php');
	}
	
?>