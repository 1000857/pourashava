<?php

session_start();

$workss=$_POST['work'];
$date= $_POST['date'];
$title= $_POST['title'];
$amount= $_POST['amount'];




include_once 'db_con.php';
$conn = connect();

foreach($workss as $works)  {  
  $in_ch=mysqli_query($conn,"insert into work(employee_id, date,work, amount) values ('$works', '$date','$title', '$amount')");   
 


            $_SESSION['msg']= '<i style="color:green; font-size:20px;font-family:calibri ;"> Success.</i><br>';
            header('location:work_distribution_form.php');
}  


?>  
