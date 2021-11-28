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
    $id = $_POST['uid'];


    if($seba_type == ''){
        $_SESSION['msg']= '<i style="color:red; font-size:20px;font-family:calibri ;"> Please Select Service Type.</i><br>';
        header('location:form.php');
        exit;
    }


    if($fname == ''){
        $_SESSION['msg']= '<i style="color:red;margin-left:400px;font-size:20px;font-family:calibri ;"> Please insert your First name.</i><br>';
        header('location:form.php');
        exit;
    }
    if($lname == ''){
        $_SESSION['msg']= '<i style="color:red;margin-left:400px;font-size:20px;font-family:calibri ;">Please insert your Surname.</i><br>';
        header('location:form.php');
        exit;
    }
    if($father == ''){
        $_SESSION['msg']= '<i style="color:red;margin-left:400px;font-size:20px;font-family:calibri ;">Please insert your Father name</i><br>';
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
    /*if($photo == ''){
        $_SESSION['msg']= 'Please Insert Passport Size Photo.<br>';
        header('location:form.php');
        exit;
    }*/

    //---- Image Upload 
    $_SESSION['msg'] = '';
    $target_dir = "images/application/";
    $fileName= basename($_FILES["photo"]["name"]);
    $target_file = $target_dir . $fileName;

    
    $uploadOk = 1; // Flag
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $_SESSION['msg'] = "File is not an image.<br>";
            $uploadOk = 0;
        }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
        $_SESSION['msg'] = "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["photo"]["size"] > 500000000) {
        $_SESSION['msg'] = "Sorry, your file is too large.<br>";
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        $_SESSION['msg'] = "Sorry, only JPG,PNG and JPEG files are allowed.";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $_SESSION['msg'] = "Sorry, your file was not uploaded.";
        header('location:form.php');
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }   
    





        include_once 'db_con.php';
        $conn = connect();

       
            $sql="INSERT INTO service (service_name, nid, birth_day, first_name, last_name, gender, father, mother, husband_wife, occupation, education, relegion, present_village, present_ward, present_thana, present_upozilla, present_district, permanent_village, permanent_ward, permanent_thana, permanent_upozilla, permanent_district, mobile, email, other, pic, user_id  )
				VALUES ('$seba_type', '$nid', '$dob', '$fname', '$lname', '$gender', '$father', '$mother','$spouse', '$job', '$education', '$religion', '$village', '$ward', '$thana', '$upazilla', '$district', '$permanent_village', '$permanent_ward', '$permanent_thana', '$permanent_upazilla', '$permanent_district', '$phone','$email', '$other', '$fileName', '$id')";


            $conn->query($sql);
            $_SESSION['msg']= '<i style="color:green; margin-left: 50px; font-size:20px;font-family:calibri ;"> Registered Successfully. Wait for Approved</i><br>';
            header('location:form.php');
//        }
//    }
}
?>