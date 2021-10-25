<?php

session_start();
if($_POST){
    $user      = $_POST['user'];
    $fname     	= $_POST['fname'];
    $lname  	= $_POST['lname'];
    $bdate      = $_POST['bdate'];
    $gender      = $_POST['gender'];
    $email		= $_POST['email'];
    $phone		= $_POST['phone'];
    $password       = $_POST['password'];
    /*$subject       = $_POST['subject'];*/



    if($user == ''){
       $_SESSION['msg']= 'Please insert Type.<br>';
        header('location:admin_signup_form.php');
        exit;
        }
    if($fname == ''){
       $_SESSION['msg']= 'Please insert your First name.<br>';
        header('location:admin_signup_form.php');
        exit;
        }
    if($lname == ''){
       $_SESSION['msg']= 'Please insert your Surname.<br>';
        header('location:admin_signup_form.php');
        exit;
    }
    if($bdate == ''){
        $_SESSION['msg']= 'Please insert your Birth Day.<br>';
        header('location:admin_signup_form.php');
        exit;
    }
    if($gender == ''){
        $_SESSION['msg']= 'Please select your Gender.<br>';
        header('location:admin_signup_form.php');
        exit;
    }
    if($email == ''){
        $_SESSION['msg']= 'Please insert your email.<br>';
        header('location:admin_signup_form.php');
        exit;
    }
    if($phone == ''){
        $_SESSION['msg']= 'Please insert your Phone Number.<br>';
        header('location:admin_signup_form.php');
        exit;
    }
    if($password == ''){
        $_SESSION['msg']= 'Please Enter a Password.<br>';
        header('location:admin_signup_form.php');
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
        header('location:admin_signup_form.php');
        exit;
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $_SESSION['msg']= 'Your Password Must Contain At Least 1 Number!<br>';
        header('location:admin_signup_form.php');
        exit;
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $_SESSION['msg']= 'Your Password Must Contain At Least 1 Capital Letter!<br>';
        header('location:admin_signup_form.php');
        exit;
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $_SESSION['msg']= 'Your Password Must Contain At Least 1 Lowercase Letter!<br>';
        header('location:admin_signup_form.php');
        exit;
    } else {


        include_once 'db_con.php';
        $conn = connect();

        $sql = "SELECT * FROM member WHERE Email = '$email'";
        $output= $conn->query($sql);

        if($output-> num_rows > 0){
            $_SESSION['msg']= 'Email already exists.<br>';
           header('location:admin_signup_form.php');
            exit;
        }else{
            $sql="INSERT INTO member (User_role, First_name, Last_name, Birthday, Gender, Email, Phone, Password )
				VALUES ('$user','$fname', '$lname', '$bdate', '$gender', '$email', '$phone','$password')";


            $conn->query($sql);
            $_SESSION['msg']= 'Registered Successfully. Thank You!<br>';
            header('location:admin_signup_form.php');
        }
    }
}
?>