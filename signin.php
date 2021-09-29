<?php 

session_start();
	if($_POST){
		$email 	  = $_POST['email'];
		$password 	  = $_POST['password'];
		$_SESSION['msg'] = '';
		if(!isset($_SESSION['count'])){
			$_SESSION['count'] = 0;
		}
		
	if($email == ''){
				$_SESSION['msg']= 'Please insert your Email.<br>';
				header('location:signin_form.php');
				exit;
		}
		
	if($password == ''){
			$_SESSION['msg']= 'Please insert your Password.<br>';
			header('location:signin_form.php');
			exit;
	}
	
	include_once 'db_con.php';
	$conn = connect();
	
	$sql = "SELECT * FROM member WHERE Email= '$email' AND Password= '$password'";
	
	$result = $conn->query($sql);
		
		if($result->num_rows > 0){
			
			foreach($result AS $row){
				$_SESSION['user_name'] = $row['First_name'];
				$_SESSION['user_role'] = $row['User_role'];
				$_SESSION['user_id'] = $row['id'];
			}
			$_SESSION['loggedin'] = true;
			unset($_SESSION['count']);
							
			header('location:index.php');
		}else{
			$_SESSION['count']++;
			if($_SESSION['count'] >= 3){
				setcookie('loginCounter', true, time() + (60*3));
				$_SESSION['count'] = 0;
			}
			$_SESSION['msg']= 'Invalid login!<br>';
			header('location:signin_form.php');
		}	
	}

?>