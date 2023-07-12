
<html>
<head>
<style>
    .pannel{
        width:100%;
        height:300px;
    }

    .product{

        display:flex;
    }

    .product img{
        height:100%;
        width:200px;
        margin-right:40px;
    }

    .product p{
        text-transform:capitalize;
    }

    .product a{
        text-decoration:none;
        font-size:20px;
        background:yellow;
    }
</style>

</head>

<body>
<?php

$server_name="localhost";
    $user="root";
    $pass="";
    $database="products";
    
    $conn=mysqli_connect($server_name,$user,$pass,$database,3306);
    
    if(!$conn){
        die("connection failed:" .mysqli_connect_error());
    
    }

        $sql="SELECT * from cart";
    
      
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        
?>


<?php
		while($rows=mysqli_fetch_assoc($result))
		{
		?>
<div class="pannel">
    <div class="product">
    <div><img src="<?php echo $rows['path'];?>"></div>
           <div?> <p>name of product:</p>
        <p><?php echo $rows['name'];?></p> <br>
        <p>price:</p>
        <p><?php echo $rows['price'];?></p>
        <a href="delete.php?viewname=<?php echo $rows['name'];?>">Delete item</a>
        </div>

        <div>
        <?php 
        }
    
        ?>
        </body>
        <html>