<?php

session_start();

if($_POST){
    $seba_type      = $_POST['seba_type'];
    $owner_name      = $_POST['owner_name'];
    $father      = $_POST['father'];
    $mother      = $_POST['mother'];
    $nid      = $_POST['nid'];
    $dob      = $_POST['dob'];
    $reg      = $_POST['reg'];
    $present_address      = $_POST['present_address'];
    $permanent_address      = $_POST['permanent_address'];
   
    $email       = $_POST['email'];
    $phone      = $_POST['phone'];
    $id = $_POST['uid'];
    
    


    if($seba_type == ''){
        $_SESSION['msg']= 'Please Select Service Type.<br>';
        header('location:rickshaw_form.php');
        exit;
    }


    if($owner_name == ''){
        $_SESSION['msg']= 'Please insert Owners name.<br>';
        header('location:rickshaw_form.php');
        exit;
    }
   
    if($father == ''){
        $_SESSION['msg']= 'Please insert your Father name.<br>';
        header('location:rickshaw_form.php');
        exit;
    }
    if($mother == ''){
        $_SESSION['msg']= 'Please insert your Mother name.<br>';
        header('location:rickshaw_form.php');
        exit;
    }
     
     if($nid == ''){
        $_SESSION['msg']= 'Please insert your Nid No/Birth Certificate No.<br>';
        header('location:rickshaw_form.php');
        exit;
    }
     if($dob == ''){
        $_SESSION['msg']= 'Please insert your Birthdy.<br>';
        header('location:rickshaw_form.php');
        exit;
    }
    if($reg == ''){
        $_SESSION['msg']= 'Please Select your Gender.<br>';
        header('location:rickshaw_form.php');
        exit;
    }
    if($present_address == ''){
        $_SESSION['msg']= 'Please Select your Present address.<br>';
        header('location:rickshaw_form.php');
        exit;
    }
    if($permanent_address == ''){
        $_SESSION['msg']= 'Please Select your Permanent address.<br>';
        header('location:rickshaw_form.php');
        exit;
    }
   
   
    if($email == ''){
        $_SESSION['msg']= 'Please Insert your Email.<br>';
        header('location:rickshaw_form.php');
        exit;
    }
    if($phone == ''){
        $_SESSION['msg']= 'Please Insert your Phone Number.<br>';
        header('location:rickshaw_form.php');
        exit;
    }
    
    }
    /*if($photo == ''){
        $_SESSION['msg']= 'Please Insert Passport Size Photo.<br>';
        header('location:form.php');
        exit;
    }*/

    //---- Image Upload 
    $_SESSION['msg'] = '';
    $target_dir = "images/application/rickshaw/";
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
        header('location:rickshaw_form.php');
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

       
            $sql="INSERT INTO rickshaw (service_type, owner_name, father, mother, nid, dob,reg, present_address, permanent_address, phone, email, pic, user_id  )
                VALUES ('$seba_type', '$owner_name', '$father', '$mother', '$nid', '$dob', '$reg', '$present_address','$permanent_address','$phone','$email','$fileName','$id')";


            $conn->query($sql);
            $_SESSION['msg']= 'Registered Successfully. Wait for Approved<br>';
            header('location:rickshaw_form.php');
//        }
//    }

?>