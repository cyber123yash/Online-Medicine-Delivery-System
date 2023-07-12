<?php
    $server_name="localhost";
    $user="root";
    $pass="";
    $database="products";
    
    $conn=mysqli_connect($server_name,$user,$pass,$database,3306);
    
    if(!$conn){
        die("connection failed:" .mysqli_connect_error());
    
    }
    else{
        echo "conn";
    }
if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $sql="select * from user where uemail='$email' and upass='$pass'";
    $result=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($result);
    $num=mysqli_num_rows($result);
    echo $num;
    if($num==1){
        if($data['utype']=='user'){
            header("Location:userpannel.html");

        }

        if($data['utype']=='admin'){
            header("Location:adminpannel.html");

        }

        if($data['utype']=='shop'){
            header("Location:shoppannel.html");

        }

        if($data['utype']=='advisor'){
            header("Location:advisorpannel.html");

        }

    }
    else

    {
        echo "not";
    }
}


    ?>