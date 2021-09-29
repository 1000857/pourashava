<?php 

session_start();
$uid= $_SESSION['user_id'];

include_once 'db_con.php';
$conn = connect();
$sql ="DELETE FROM `member` WHERE id = '$uid'";

$conn->query($sql);

include_once 'logout.php'; 


?>