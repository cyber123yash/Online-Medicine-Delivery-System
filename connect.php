<?php
$server_name="localhost";
$user="root";
$pass="";
$database="products";

$conn=mysqli_connect($server_name,$user,$pass,$database,3306);

if(!$conn){
    die("connection failed:" .mysqli_connect_error());

}
?>