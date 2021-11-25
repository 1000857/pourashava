<?php
session_start();
if($_POST){
	$name 	=$_POST['name'];
	$email =$_POST['email'];
	$phone 	=$_POST['phone'];
	$complain =$_POST['complain'];
	$id = $_POST['uid'];

	if($name == ''){
		$_SESSION['msg'] = '<i style="color:red;font-size:20px;font-family:calibri ;"> Please insert Your Full Name.</i><br>';
        header('location:complain_form.php');
        exit;
	} 
	if($email == ''){
		$_SESSION['msg'] = '<i style="color:red;margin-left:400px;font-size:20px;font-family:calibri ;"> Please insert Email.</i><br>';
        header('location:complain_form.php');
        exit;
	}
	if($phone == ''){
		$_SESSION['msg'] = '<i style="color:red; font-size:20px;font-family:calibri ;"> Please Enter Your Phone Number.</i><br>';
        header('location:complain_form.php');
        exit;
	}  
	if($complain == ''){
		$_SESSION['msg'] = '<i style="color:red;margin-left:400px;font-size:20px;font-family:calibri ;"> Please Write Your Complain.</i><br>';
        header('location:complain_form.php');
        exit;
	}  
}
include_once 'db_con.php';
        $conn = connect();

       
            $sql="INSERT INTO complain (name,email,phone,description,user_id)
                VALUES ('$name','$email','$phone', '$complain','$id')";


            $conn->query($sql);
            $_SESSION['msg']= '<i style="color:green;margin-left:400px;font-size:20px;font-family:calibri ;"> Success.</i><br>';
            header('location:complain_form.php');
?>