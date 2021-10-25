<?php

session_start();
$employee= $_POST['employee_id'];
$attandences= $_POST['attain'];
$date= $_POST['date'];


include_once 'db_con.php';
$conn = connect();


foreach($attandences as $attandence)  {
 
  $in_ch=mysqli_query($conn,"insert into employee_attandence(Employee_id, Attandence, Day) values ('$employee', '$attandence', '$date')");   
  print_r($in_ch);
  exit;
            $_SESSION['msg']= 'Success<br>';
            header('location:employee_attandence_form.php');
}  


?>  

