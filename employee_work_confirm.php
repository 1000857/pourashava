<?php

session_start();

$workss      = $_POST['work'];
$amount      = $_POST['amount'];
$complain_id = $_POST['complain_id'];

include_once 'db_con.php';
$conn = connect();

$date = date("Y-m-d");
foreach ($workss as $works) {
    $in_ch = mysqli_query($conn, "insert into employee_assign(complain_id, employee_id, date, amount) 
                                        values ('$complain_id','$works', '$date', '$amount')");

}

$sql = "UPDATE complain SET status='Assigned' WHERE id = '$complain_id'";
$conn->query($sql);

$_SESSION['msg'] = '<i style="color:green; font-size:20px;font-family:calibri ;"> Success.</i><br>';
header('location:complain_list.php');

?>  
