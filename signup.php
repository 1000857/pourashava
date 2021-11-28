<?php

session_start();
if($_POST){
    $fname     	= $_POST['fname'];
    $lname  	= $_POST['lname'];
    $bdate      = $_POST['bdate'];
    $gender      = $_POST['gender'];
    $email		= $_POST['email'];
    $phone		= $_POST['phone'];
    $password       = $_POST['password'];
    /*$subject       = $_POST['subject'];*/




   if($fname == ''){
       $_SESSION['msg']= '<i style="color:red;font-size:20px;font-family:calibri ;">
      Please insert your First name </i>.<br>';
        header('location:signup_form.php');
        exit;
        }
    if($lname == ''){
       $_SESSION['msg']= '<i style="color:red;font-size:20px;font-family:calibri ;">Please insert your Surname </i>.<br>';
        header('location:signup_form.php');
        exit;
    }
    if($bdate == ''){
        $_SESSION['msg']= '<i style="color:red;font-size:20px;font-family:calibri ;">Please insert your Birth Day </i>.<br>';
        header('location:signup_form.php');
        exit;
    }
    if($gender == ''){
        $_SESSION['msg']= '<i style="color:red;font-size:20px;font-family:calibri ;"> Please select your Gender </i>.<br>';
        header('location:signup_form.php');
        exit;
    }
    if($email == ''){
        $_SESSION['msg']= '<i style="color:red;font-size:20px;font-family:calibri ;"> Please insert your email </i>.<br>';
        header('location:signup_form.php');
        exit;
    }
    if($phone == ''){
        $_SESSION['msg']= '<i style="color:red;font-size:20px;font-family:calibri ;"> Please Insert Your Phone Number </i>.<br>';
        header('location:signup_form.php');
        exit;
    }
      //---- Image Upload 
    $_SESSION['msg'] = '';
    $target_dir = "images/member/";
    $fileName= basename($_FILES["photo"]["name"]);
    $target_file = $target_dir . $fileName;
echo $target_file;
exit;
    
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
        header('location:signup_form.php');
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }   

    if($password == ''){
        $_SESSION['msg']= '<i style="color:red;font-size:20px;font-family:calibri ;"> Please Enter a Password </i>.<br>';
        header('location:signup_form.php');
        exit;
    }
    
    if (strlen($password ) <= '8') {
        $_SESSION['msg']= '<i style="color:red;font-size:20px;font-family:calibri ;"> Your Password Must Contain At Least 8 Characters! </i> <br>';
        header('location:signup_form.php');
        exit;
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $_SESSION['msg']= '<i style="color:red;font-size:20px;font-family:calibri ;"> Your Password Must Contain At Least 1 Number!</i><br>';
        header('location:signup_form.php');
        exit;
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $_SESSION['msg']= '<i style="color:red;font-size:20px;font-family:calibri ;"> Your Password Must Contain At Least 1 Capital Letter! </i><br>';
        header('location:signup_form.php');
        exit;
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $_SESSION['msg']= '<i style="color:red;font-size:20px;font-family:calibri ;"> Your Password Must Contain At Least 1 Lowercase Letter! </i><br>';
        header('location:signup_form.php');
        exit;
    } else {


        include_once 'db_con.php';
        $conn = connect();

        $sql = "SELECT * FROM member WHERE Email = '$email'";
        $output= $conn->query($sql);

        if($output-> num_rows > 0){
            $_SESSION['msg']= 'Email already exists.<br>';
           header('location:signup_form.php');
            exit;
        }else{

            $sql="INSERT INTO member (First_name, Last_name, Birthday, Gender, Email, Phone, Password, pic)
				VALUES ('$fname', '$lname', '$bdate', '$gender', '$email', '$phone', '$password', '$fileName')";


            $conn->query($sql);
            $_SESSION['msg']= '<i style="color:green;font-size:20px;font-family:calibri ;"> Registered Successfully. Thank You! </i><br>';
            header('location:signup_form.php');
        }
    }
}
?>