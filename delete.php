<?php

$server_name="localhost";
    $user="root";
    $pass="";
    $database="products";
    
    $conn=mysqli_connect($server_name,$user,$pass,$database,3306);
    
    if(!$conn){
        die("connection failed:" .mysqli_connect_error());
    
    }

if(isset($_GET['viewname'])){
    $name=$_GET['viewname'];
$sql="delete from cart where name='$name'";
$result=mysqli_query($conn,$sql);
if($result){
    echo "sucess";
}
else{
    echo "not";
}

}
?>