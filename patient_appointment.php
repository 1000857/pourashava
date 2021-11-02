<?php session_start(); ?>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    

      $doctor_id = $_POST['doctor_id'];
      $time = $_POST['time'];
      include_once 'db_con.php';
      $conn= connect();
      $sql = "SELECT id FROM appointment WHERE time= '$time' AND doctor_id = '$doctor_id'";
      

        $result = $conn->query($sql);
        
        $id = $result->fetch_array()[0] ?? '';
        
      
     
      
      $user_id = $_SESSION['user_id'];
      
      
      

      include_once('db_con.php');

      $sql = "INSERT INTO p_appointment(user_id,appointment_id,time) VALUES ('$user_id','$id','$time')";
      

     $conn->query($sql);

     $sql = "UPDATE appointment SET is_approved = 1 WHERE time = '$time' AND doctor_id = '$doctor_id'";
     $conn->query($sql);
     $_SESSION['msg']= 'Registered Successfully. Wait for Approved<br>';
      header('location:show_patient_appointment_info.php');
    

  }else{}


    ?>