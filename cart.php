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
$sql="select * from categories where pname='$name'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_assoc($result);
$name=$rows['pname'];
$price=$rows['pprice'];
$type=$rows['ptype'];
$path=$rows['ppath'];
$sql="insert into cart(name,price,type,path) values('$name','$price','$type','$path')";
$result1=mysqli_query($conn,$sql);
if($result1){
    header("Location:displaycart.php");
}
}
?>
<html>
    <head>
        <style>
            .pannel{
                widht:80%
                height:200px;
                left-margin:auto;
                right-margin:auto;
            }

            .product{
                margin-top:20px;
            }
           .product  .img{
            height:100px;
            width:200px;
           }
        </style>
    </head>
<body>
    

</body>
</html>
