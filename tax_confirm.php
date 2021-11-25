<?php

session_start();

$taxes=$_POST['tax'];
$year= $_POST['year'];
$amount= $_POST['amount'];

include_once 'db_con.php';
$conn = connect();

foreach($taxes as $taxing)  {  
  $in_ch=mysqli_query($conn,"insert into tax(applicant_id, year, amount) values ('$taxing', '$year', '$amount')");   
  
            $_SESSION['msg']= '<i style="color:green; font-size:20px;font-family:calibri ;"> Success.</i><br>';
            header('location:tax_list.php');
}  


?>  

