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
            $sql="INSERT INTO member (First_name, Last_name, Birthday, Gender, Email, Phone, Password)
				VALUES ('$fname', '$lname', '$bdate', '$gender', '$email', '$phone', '$password')";


            $conn->query($sql);
            $_SESSION['msg']= '<i style="color:green;font-size:20px;font-family:calibri ;"> Registered Successfully. Thank You! </i><br>';
            header('location:signup_form.php');
        }
    }
}
?>