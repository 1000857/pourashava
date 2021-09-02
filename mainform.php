<?php

session_start();
if($_POST){
    $seba_type      = $_POST['seba_type'];
    $fname     	= $_POST['fname'];
    $lname  	= $_POST['lname'];
    $father      = $_POST['father'];
    $mother      = $_POST['mother'];
    $spouse      = $_POST['spouse'];
    $nid      = $_POST['nid'];
    $dob      = $_POST['dob'];
    $gender      = $_POST['gender'];
    $job      = $_POST['job'];
    $education      = $_POST['education'];
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
    $email       = $_POST['email'];
    $phone      = $_POST['phone'];
    $other       = $_POST['other'];
    $photo       = $_POST['photo'];


    if($seba_type == ''){
        $_SESSION['msg']= 'Please Select Service Type.<br>';
        header('location:form.php');
        exit;
    }


    if($fname == ''){
        $_SESSION['msg']= 'Please insert your First name.<br>';
        header('location:form.php');
        exit;
    }
    if($lname == ''){
        $_SESSION['msg']= 'Please insert your Surname.<br>';
        header('location:form.php');
        exit;
    }
    if($father == ''){
        $_SESSION['msg']= 'Please insert your Father name.<br>';
        header('location:form.php');
        exit;
    }
    if($mother == ''){
        $_SESSION['msg']= 'Please insert your Mother name.<br>';
        header('location:form.php');
        exit;
    }
     if($spouse == ''){
        $_SESSION['msg']= 'Please insert your Husband/Wife name.<br>';
        header('location:form.php');
        exit;
    }
     if($nid == ''){
        $_SESSION['msg']= 'Please insert your Nid No/Birth Certificate No.<br>';
        header('location:form.php');
        exit;
    }
     if($dob == ''){
        $_SESSION['msg']= 'Please insert your Birthdy.<br>';
        header('location:form.php');
        exit;
    }
    if($gender == ''){
        $_SESSION['msg']= 'Please Select your Gender.<br>';
        header('location:form.php');
        exit;
    }
    if($job == ''){
        $_SESSION['msg']= 'Please Insert your Occupassion.<br>';
        header('location:form.php');
        exit;
    }
    if($education == ''){
        $_SESSION['msg']= 'Please Insert your Education Qualifiction.<br>';
        header('location:form.php');
        exit;
    }
    if($religion == ''){
        $_SESSION['msg']= 'Please Insert your Religion.<br>';
        header('location:form.php');
        exit;
    }
    if($village == ''){
        $_SESSION['msg']= 'Please Insert your Present Village Name.<br>';
        header('location:form.php');
        exit;
    }
    if($ward == ''){
        $_SESSION['msg']= 'Please Insert your Ward No.<br>';
        header('location:form.php');
        exit;
    }
    if($upazilla == ''){
        $_SESSION['msg']= 'Please Insert your Upazilla.<br>';
        header('location:form.php');
        exit;
    }
    if($thana == ''){
        $_SESSION['msg']= 'Please Insert your Thana.<br>';
        header('location:form.php');
        exit;
    }
    if($district == ''){
        $_SESSION['msg']= 'Please Insert your District.<br>';
        header('location:form.php');
        exit;
    }
    if($permanent_village == ''){
        $_SESSION['msg']= 'Please Insert your Permanent Village.<br>';
        header('location:form.php');
        exit;
    }
    if($permanent_ward == ''){
        $_SESSION['msg']= 'Please Insert your Permanent Ward.<br>';
        header('location:form.php');
        exit;
    }
    if($permanent_upazilla == ''){
        $_SESSION['msg']= 'Please Insert your Permanent Upazilla.<br>';
        header('location:form.php');
        exit;
    }
    if($permanent_thana == ''){
        $_SESSION['msg']= 'Please Insert your Permanent Thana.<br>';
        header('location:form.php');
        exit;
    }
    if($permanent_district == ''){
        $_SESSION['msg']= 'Please Insert your Permanent District.<br>';
        header('location:form.php');
        exit;
    }
    if($email == ''){
        $_SESSION['msg']= 'Please Insert your Email.<br>';
        header('location:form.php');
        exit;
    }
    if($phone == ''){
        $_SESSION['msg']= 'Please Insert your Phone Number.<br>';
        header('location:form.php');
        exit;
    }
    if($other == ''){
        $_SESSION['msg']= 'Please Insert attachment if any.<br>';
        header('location:form.php');
        exit;
    }
    if($photo == ''){
        $_SESSION['msg']= 'Please Insert Passport Size Photo.<br>';
        header('location:form.php');
        exit;
    }





        include_once 'db_con.php';
        $conn = connect();

       
            $sql="INSERT INTO service (service_name, nid, birth_day, first_name, last_name, gender, father, mother, husband_wife, occupation, education, relegion, present_village, present_ward, present_thana, present_upozilla, present_district, permanent_village, permanent_ward, permanent_thana, permanent_upozilla, permanent_district, mobile, email, other, pic  )
				VALUES ('$seba_type', '$nid', '$dob', '$fname', '$lname', '$gender', '$father', '$mother','$spouse', '$job', '$education', '$religion', '$village', '$ward', '$thana', '$upazilla', '$district', '$permanent_village', '$permanent_ward', '$permanent_thana', '$permanent_upazilla', '$permanent_district', '$phone','$email', '$other', '$photo')";


            $conn->query($sql);
            $_SESSION['msg']= 'Registered Successfully. Wait for Approved<br>';
            header('location:form.php');
//        }
//    }
}
?>