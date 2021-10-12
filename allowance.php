<?php

session_start();
if($_POST){
    $seba_type      = $_POST['seba_type'];
    $month      = $_POST['month'];
    $fname     	= $_POST['fname'];
    $lname  	= $_POST['lname'];
    $father      = $_POST['father'];
    $mother      = $_POST['mother'];
    $spouse      = $_POST['spouse'];
    $nid      = $_POST['nid'];
    $dob      = $_POST['dob'];
    $gender      = $_POST['gender'];
    $religion      = $_POST['religion'];
    $village      = $_POST['village'];
    $ward      = $_POST['ward'];
    $upazilla		= $_POST['upazilla'];
    $thana		= $_POST['thana'];
    $district       = $_POST['district'];
    $permanent_village       = $_POST['permanent_village'];
    $permanent_ward      = $_POST['permanent_ward'];
    $permanent_upazilla       = $_POST['permanent_upazilla'];
    $permanent_thana      = $_POST['permanent_thana'];
    $permanent_district       = $_POST['permanent_district'];
    $phone      = $_POST['phone'];

    


    if($seba_type == ''){
        $_SESSION['msg']= 'Please Select Service Type.<br>';
        header('location:allowance_form.php');
        exit;
    }


    if($fname == ''){
        $_SESSION['msg']= 'Please insert your First name.<br>';
        header('location:allowance_form.php');
        exit;
    }
    if($lname == ''){
        $_SESSION['msg']= 'Please insert your Surname.<br>';
        header('location:allowance_form.php');
        exit;
    }
    if($father == ''){
        $_SESSION['msg']= 'Please insert your Father name.<br>';
        header('location:allowance_form.php');
        exit;
    }
    if($mother == ''){
        $_SESSION['msg']= 'Please insert your Mother name.<br>';
        header('location:allowance_form.php');
        exit;
    }
     if($spouse == ''){
        $_SESSION['msg']= 'Please insert your Husband/Wife name.<br>';
        header('location:allowance_form.php');
        exit;
    }
     if($nid == ''){
        $_SESSION['msg']= 'Please insert your Nid No/Birth Certificate No.<br>';
        header('location:allowance_form.php');
        exit;
    }
     if($dob == ''){
        $_SESSION['msg']= 'Please insert your Birthdy.<br>';
        header('location:allowance_form.php');
        exit;
    }
    if($gender == ''){
        $_SESSION['msg']= 'Please Select your Gender.<br>';
        header('location:allowance_form.php');
        exit;
    }
    

    if($religion == ''){
        $_SESSION['msg']= 'Please Insert your Religion.<br>';
        header('location:allowance_form.php');
        exit;
    }
    if($village == ''){
        $_SESSION['msg']= 'Please Insert your Present Village Name.<br>';
        header('location:allowance_form.php');
        exit;
    }
    if($ward == ''){
        $_SESSION['msg']= 'Please Insert your Ward No.<br>';
        header('location:allowance_form.php');
        exit;
    }
    if($upazilla == ''){
        $_SESSION['msg']= 'Please Insert your Upazilla.<br>';
        header('location:allowance_form.php');
        exit;
    }
    if($thana == ''){
        $_SESSION['msg']= 'Please Insert your Thana.<br>';
        header('location:allowance_form.php');
        exit;
    }
    if($district == ''){
        $_SESSION['msg']= 'Please Insert your District.<br>';
        header('location:allowance_form.php');
        exit;
    }
    if($permanent_village == ''){
        $_SESSION['msg']= 'Please Insert your Permanent Village.<br>';
        header('location:allowance_form.php');
        exit;
    }
    if($permanent_ward == ''){
        $_SESSION['msg']= 'Please Insert your Permanent Ward.<br>';
        header('location:allowance_form.php');
        exit;
    }
    if($permanent_upazilla == ''){
        $_SESSION['msg']= 'Please Insert your Permanent Upazilla.<br>';
        header('location:allowance_form.php');
        exit;
    }
    if($permanent_thana == ''){
        $_SESSION['msg']= 'Please Insert your Permanent Thana.<br>';
        header('location:allowance_form.php');
        exit;
    }
    if($permanent_district == ''){
        $_SESSION['msg']= 'Please Insert your Permanent District.<br>';
        header('location:allowance_form.php');
        exit;
    }
    
    if($phone == ''){
        $_SESSION['msg']= 'Please Insert your Phone Number.<br>';
        header('location:allowance_form.php');
        exit;
    }
  
        include_once 'db_con.php';
        $conn = connect();

       
            $sql="INSERT INTO allowance (service_name, month, first_name, last_name, father, mother, spouse, nid, dob, gender, religion, present_village, present_ward, present_upazilla, present_thana, present_district, permanent_village, permanent_ward, permanent_thana, permanent_upazilla, permanent_district, phone )
				VALUES ('$seba_type','$month', '$fname', '$lname', '$father', '$mother', '$spouse', '$nid', '$dob','$gender', '$religion', '$village', '$ward', '$upazilla', '$thana', '$district', '$permanent_village', '$permanent_ward','$permanent_upazilla', '$permanent_thana',  '$permanent_district', '$phone')";


            $conn->query($sql);
            $_SESSION['msg']= 'Registered Successfully. Wait for Approved<br>';
            header('location:allowance_form.php');
//        }
//    }
}
?>