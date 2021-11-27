
<?php 


$eid= $_GET['emp_id'];

include_once 'db_con.php';
$conect = connect();


$sql = "DELETE FROM employee WHERE `employee`. id = '$eid'";
$conect->query($sql);

$_SESSION['msg']= '<i style="color:green; margin-left:20px; font-size:20px;font-family:calibri ;"> Employee Deleted</i><br>';
    header('location:employee_list.php');


?>