<?php session_start(); ?>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    

      $doctor_id = $_POST['doctor_id'];
      $appointment_time = $_POST['appointment_time'];
      include_once('db_connection.php');

      $sql = "SELECT id FROM appointment WHERE appointment_time= '$appointment_time' AND user_id = '$doctor_id'";
      

        $result = $db_con->query($sql);
        
        $appoint_id = $result->fetch_array()[0] ?? '';
        
      
      $status = $_POST['status']; 
      
      $user_id = $_SESSION['user_id'];
      
      
      

      include_once('db_connection.php');

      $sql = "INSERT INTO time(appointment_id,user_id,appointment_time,status) VALUES ('$appoint_id','$user_id','$appointment_time','$status')";
      

     $db_con->query($sql);

     $sql = "UPDATE appointment SET status = 1 WHERE appointment_time = '$appointment_time' AND user_id = '$doctor_id'";
     $db_con->query($sql);

     header('location:show_patient_appointment_info.php?msg=You Appointed Successfully');exit;

  }else{}


    ?>