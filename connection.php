<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='wtk';

$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed.".$conn->connect_error);
}

?>