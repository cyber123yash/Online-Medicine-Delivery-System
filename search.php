<?php 
session_start();
$_SESSION['user']="shubha";
include 'connect.php';
if(isset($_POST['search'])){
   echo $_SESSION['user'];
}
?>