<?php

session_start();

$allowances=$_POST['allow'];
$month= $_POST['month'];
$amount= $_POST['amount'];

include_once 'db_con.php';
$conn = connect();

foreach($allowances as $allowance)  {  
  $in_ch=mysqli_query($conn,"insert into allowance_confirmed(applicant_id, month, amount) values ('$allowance', '$month', '$amount')");   
  
            $_SESSION['msg']= '<i style="color:green; font-size:20px;font-family:calibri ;"> Success.</i><br><br>';
            header('location:allowance_confirmed_list.php');
}  


?>  

