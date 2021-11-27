<?php

session_start();
if($_POST){
    
   
    $eid      = $_POST['eid'];
    $fname     	= $_POST['fname'];
    $lname  	= $_POST['lname'];
    $bdate      = $_POST['bdate'];
   
    $email		= $_POST['email'];
    $phone		= $_POST['phone'];
    $epid = $_POST['eidd'];
    

        /*$subject       = $_POST['subject'];*/



    

    if($eid == ''){
        $_SESSION['msg']= 'Please insert Employee ID.<br>';
        header('location:employee_update_form.php?emp_id='.$epid);
        exit;
        }
    if($fname == ''){
       $_SESSION['msg']= 'Please insert your First name.<br>';
        header('location:employee_update_form.php?emp_id='.$epid);
        exit;
        }
    if($lname == ''){
       $_SESSION['msg']= 'Please insert your Surname.<br>';
        header('location:employee_update_form.php?emp_id='.$epid);
        exit;
    }
    if($bdate == ''){
        $_SESSION['msg']= 'Please insert your Birth Day.<br>';
        header('location:employee_update_form.php?emp_id='.$epid);
        exit;
    }
    
    if($email == ''){
        $_SESSION['msg']= 'Please insert your email.<br>';
        header('location:employee_update_form.php?emp_id='.$epid);
        exit;
    }
    if($phone == ''){
        $_SESSION['msg']= 'Please insert your Phone Number.<br>';
        header('location:employee_update_form.php?emp_id='.$epid);
        exit;
    }
    
//    if($subject == ''){
//        $_SESSION['msg']= 'Please Enter Your Job Post.<br>';
//        header('location:signup_form.php');
//        exit;
//    }
//
    


    
  
    
        include_once 'db_con.php';
        $conn = connect();

        $sql = "SELECT * FROM employee WHERE Email = '$email' OR Employee_id = '$eid'";
        $output= $conn->query($sql);


        if($output-> num_rows > 0){
            $_SESSION['msg']= 'Employee ID/Email already exists.<br>';
           header('location:employee_update_form.php?emp_id='.$epid);
            exit;
        }
            $sql="UPDATE `employee` SET `Employee_id`='$eid',`First_name`='$fname',`Last_name`='$lname',`Birthday`='$bdate',`Email`='$email',`Phone`='$phone' WHERE id='$epid'";

            

            $conn->query($sql);
            $_SESSION['msg']= '<i style="color:green; margin-left: 50px; font-size:20px;font-family:calibri ;"> Registered Successfully. Thank You!</i><br>';
            header('location:employee_update_form.php?emp_id='.$epid);
        
    }

?>