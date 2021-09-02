
<?php

function connect(){
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbName = 'pourashava';

    $con = new mysqli($host,$user,$pass,$dbName);
    return $con;

}


?>
