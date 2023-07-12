<?php
    $server_name="localhost";
    $user="root";
    $pass="";
    $database="products";
    
    $conn=mysqli_connect($server_name,$user,$pass,$database,3306);
    
    if(!$conn){
        die("connection failed:" .mysqli_connect_error());
    
    }
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sql="insert into user(uname,umobile,uemail,upass) values ('$name',$mobile,'$email','$pass')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "insert sucess";

    }
    else

    {
        echo "not";
    }
}


    ?>