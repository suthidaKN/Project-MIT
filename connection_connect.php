<?php

$servername = "localhost";
$username = "ITM_64";
$password = "ITM_64";
$dbname = "itm_64";   
$conn = new mysqli($servername,$username,$password);
mysqli_set_charset($conn, "utf8");
if($conn -> connect_error){
    die("Connection failed: ".$conn->connect_error);
}
if(!$conn->select_db($dbname)){
    die("Connection failed : ".$conn->connect_error);
}
?>