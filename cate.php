<html>
    <head>
        <title></title>
  <style>

*{
    box-sizing: border-box;
    margin:0;
    padding: 0;
}
    header{
    display: flex;
    width:100%;
    height:40px;
    background-color: rgb(30, 126, 210);
    justify-content: space-between;
    align-content: center;
    font-family: Arial;
    z-index: 10;

}

.logo{
    color: white;
    font-size: 30px;
    line-height: 35px;
    margin-left: 20px;;
    padding: 0, 100px;
    font-weight: bold;
    
    
}


.tag{
    font-size: large;
    font-family: Helvetica;
    color:rgb(46, 13, 13);
    text-transform: capitalize;
}

    input[type=submit]{
        font-family: sans-serif;
    text-align: center;
    min-width: 200px;
    padding:20px;
    margin-left: 20px;;
    height:50px;
    background-color: rgb(30, 126, 210);;
    color:white;
    border-radius: 10px;
    text-transform: capitalize;
    transition: 0.5s;
    }
    .pannel{
    width:80%;
    height:150px;
    display: flex;
    justify-content: space-between;
    margin-left: auto ;
    margin-right: auto ;
}
.product{
    width:100%;
    height:100%;
    border:2px solid grey;
    display:flex;
   
}

.product img{
    height:100%;
    width:2---00px;
}

.product p{
    font-family: sans-serif;
    text-transform:uppercase;
    font-size: 10px;
    color: black;
    margin-left:20px;
}

.product a{
    text-decoration:none;
    font-size:15px;
    color:blue;
    background-color:yellow;

}
  </style>
    </head>
    <body>
        <header>
        <div class="logo">MediHelp</div>
        </header>
        <p class="tag">Shop by Categories</p>
        <form method="post" action="#">
        <input type="submit" name="daily" value="Daily">
        <input type="submit" name="mens" value="Menscare">
        <input type="submit" name="womens" value="woman">
        <input type="submit" name="aurvidic" value="aurvedic">
        <input type="submit" name="home" value="home care">
        
    </form>

    <?php
    $server_name="localhost";
    $user="root";
    $pass="";
    $database="products";
    
    $conn=mysqli_connect($server_name,$user,$pass,$database,3306);
    
    if(!$conn){
        die("connection failed:" .mysqli_connect_error());
    
    }
    $sql="";
    if(ISSET($_POST['daily'])){
        $sql="SELECT * from categories where ptype='daily'";
    }

    if(ISSET($_POST['mens'])){
        $sql="SELECT * from categories where ptype='mens'";
    }

    if(ISSET($_POST['womens'])){
        $sql="SELECT * from categories where ptype='womenscare'";
    }
    
    if(ISSET($_POST['aurvedic'])){
        $sql="SELECT * from categories where ptype='aurvidic'";
    }
    
    
    if(ISSET($_POST['home'])){
        $sql="SELECT * from categories where ptype='home'";
    }
      
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        echo $num;
?>


<?php
		while($rows=mysqli_fetch_assoc($result))
		{
		?>
<div class="pannel">
    <div class="product">
    <div><img src="<?php echo $rows['ppath'];?>"></div>
           <div?> <p>name of product:</p>
        <p><?php echo $rows['pname'];?></p> <br>
        <p>price:</p>
        <p><?php echo $rows['pprice'];?></p>
        <a href="cart.php?viewname=<?php echo $rows['pname'];?>">Add to cart</a>
        </div>

        <div>

       
        </div>
            </div>
            </div>

        
 <?php
		}
    
 ?>


    </body>
</html>