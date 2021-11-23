<?php
session_start();
if($_POST){
	$notice 	=$_POST['notice'];
	$notice_des =$_POST['notice_des'];

	if($notice == ''){
		$_SESSION['msg'] = '<i style="color:red;font-size:20px;font-family:calibri ;"> Please insert Notice Title.</i><br>';
        header('location:notice_form.php');
        exit;
	} 
	if($notice_des == ''){
		$_SESSION['msg'] = '<i style="color:red;margin-left:400px;font-size:20px;font-family:calibri ;"> Please insert Notice Description.</i><br>';
        header('location:notice_form.php');
        exit;
	} 
}
include_once 'db_con.php';
        $conn = connect();

       
            $sql="INSERT INTO notice (title, description )
                VALUES ('$notice', '$notice_des')";


            $conn->query($sql);
            $_SESSION['msg']= '<i style="color:green;margin-left:400px;font-size:20px;font-family:calibri ;"> Success.</i><br>';
            header('location:notice_form.php');
?>