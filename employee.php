<?php

session_start();
if($_POST){
    $user      = $_POST['user'];
    $eid      = $_POST['eid'];
    $fname     	= $_POST['fname'];
    $lname  	= $_POST['lname'];
    $bdate      = $_POST['bdate'];
    $gender      = $_POST['gender'];
    $email		= $_POST['email'];
    $phone		= $_POST['phone'];
    $password       = $_POST['password'];
    /*$subject       = $_POST['subject'];*/



    if($user == ''){
       $_SESSION['msg']= 'Please insert Employee Position.<br>';
        header('location:employee_signup_form.php');
        exit;
        }
    if($eid == ''){
        $_SESSION['msg']= 'Please insert Employee ID.<br>';
        header('location:employee_signup_form.php');
        exit;
        }
    if($fname == ''){
       $_SESSION['msg']= 'Please insert your First name.<br>';
        header('location:employee_signup_form.php');
        exit;
        }
    if($lname == ''){
       $_SESSION['msg']= 'Please insert your Surname.<br>';
        header('location:employee_signup_form.php');
        exit;
    }
    if($bdate == ''){
        $_SESSION['msg']= 'Please insert your Birth Day.<br>';
        header('location:employee_signup_form.php');
        exit;
    }
    if($gender == ''){
        $_SESSION['msg']= 'Please select your Gender.<br>';
        header('location:employee_signup_form.php');
        exit;
    }
    if($email == ''){
        $_SESSION['msg']= 'Please insert your email.<br>';
        header('location:employee_signup_form.php');
        exit;
    }
    if($phone == ''){
        $_SESSION['msg']= 'Please insert your Phone Number.<br>';
        header('location:employee_signup_form.php');
        exit;
    }
    if($password == ''){
        $_SESSION['msg']= 'Please Enter a Password.<br>';
        header('location:employee_signup_form.php');
        exit;
    }
//    if($subject == ''){
//        $_SESSION['msg']= 'Please Enter Your Job Post.<br>';
//        header('location:signup_form.php');
//        exit;
//    }
//
    


    if (strlen($password ) <= '8') {
        $_SESSION['msg']= 'Your Password Must Contain At Least 8 Characters!<br>';
        header('location:employee_signup_form.php');
        exit;
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $_SESSION['msg']= 'Your Password Must Contain At Least 1 Number!<br>';
        header('location:employee_signup_form.php');
        exit;
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $_SESSION['msg']= 'Your Password Must Contain At Least 1 Capital Letter!<br>';
        header('location:employee_signup_form.php');
        exit;
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $_SESSION['msg']= 'Your Password Must Contain At Least 1 Lowercase Letter!<br>';
        header('location:employee_signup_form.php');
        exit;
    } 

$_SESSION['msg'] = '';
    $target_dir = "images/employee/";
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
        header('location:employee_signup_form.php');
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

        $sql = "SELECT * FROM employee WHERE Email = '$email' OR Employee_id = '$eid'";
        $output= $conn->query($sql);


        if($output-> num_rows > 0){
            $_SESSION['msg']= 'Employee ID/Email already exists.<br>';
           header('location:employee_signup_form.php');
            exit;
        }
            $sql="INSERT INTO employee (Post, Employee_id, First_name, Last_name, Birthday, Gender, Email, Phone, Password, Pic)
				VALUES ('$user','$eid','$fname', '$lname', '$bdate', '$gender', '$email', '$phone', '$password','$fileName')";


            $conn->query($sql);
            $_SESSION['msg']= 'Registered Successfully. Thank You!<br>';
            header('location:employee_signup_form.php');
        
    }

?>