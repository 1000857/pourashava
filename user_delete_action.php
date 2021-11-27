
<?php 


$uid= $_GET['user_id'];

include_once 'db_con.php';
$conect = connect();


$sql = "DELETE FROM member WHERE `member`. id = '$uid'";
$conect->query($sql);

$_SESSION['msg']= 'User deleted successfully';
    header('location:user_list.php');


?>