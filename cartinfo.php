 <?php
  @session_start();
  require("connection.php");
$con=con_db();
mysqli_select_db($con,"2470219_machinetool");
if(!isset($_SESSION['no_cart'])){
$_SESSION['no_cart']=0;
$_SESSION['i']=1;
}
 ?> 
 
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Machine Tool</title>
  <link href="l.png" rel="icon" type="image/png" >

  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="machine tool is e-commerce website"/>
    <meta name="keywords" content="machinetool"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
   <style type="text/css">
      body{
		 min-width:900px;
	  }
       a:link{
           color:white;
       }
      a:hover{
         text-decoration: none;
          color:brown;
      }
	 
         a:visited{
         color:white;
         text-decoration:none;
         }
         #1 a:hover{
         font-style:italic;
         
         }
         .product:link{
         color:blue;
         font-size:20px;
         font-style:italic;
         
         }
         .product:hover{
         
         color:brown;
         }
         .product:visited{
           color:blue;
         
         }
         
         
  </style>
    

</head>
<body style="height:auto;">
<!----------------------------------------------------------------navbar--------------------------------------------------------->
                        
 
<div class="container-fluid"  >

        <div class="row" style="background-color:crimson;position:;z-index:1;">
        <div class="col-sm-2">
            <a href="index.php" > <h3 style="color:white;font-family:Comic Sans MS;"><i><b>Machine Tool</b></i></h3></a>
        </div>
        
         <div class="col-sm-5">
         <form action="index.php" method="get" >
  <div class="input-group" style="margin-top:15px;">
    <input type="text" class="form-control" placeholder="Search for products" name="keywords" required>
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
        
      </div>
        <div class="col-sm-1"></div>
<div class="col-sm-1" style="margin:15px;" id="1"><h6>
<?php

    if(!isset($_SESSION['email'])){
    echo "<a href='actsign.php' style='font-size:20px;'>signup&login</a>";
      
    }
    else 
       echo "<details style='z-index:2;'> <summary style='color:white;'>Hi!{$_SESSION['name']}</summary>
       <a href='useprofile.php' style='font-size:14px;'>Your Account</a><br>
       <a href='logout.php' style='font-size:14px;'>logout</a>
       
       </deatails>
             ";


?>

</h6>
            </div>
  <div class="col-sm-1" style="margin:18px;"><a href="cartinfo.php"  >
      <span class="glyphicon glyphicon-shopping-cart"></span><b> <i>Cart <?php  echo $_SESSION['no_cart'] ;?></i></b>
        </a></div>    
            
</div>
    
<div class="row" style="background-color:white;">
   
    
    </div> 
	<div class="row">
	<div class="col-sm-12">
	<nav class="navbar navbar-inverse" style="background-color:crimson;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
     
        <li class="dropdown" style="padding-left:110px;" >
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><b>Car Part</b> <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <?php 
		     $query="select BRAND from BRAND where CAT_NAME='CAR_PART' ";
			 $product=mysqli_query($con,$query);
			 while($cat=mysqli_fetch_array($product,MYSQLI_ASSOC)){
                         
                         echo "<li><a href='index.php?keywords={$cat['BRAND']}'>{$cat['BRAND']}</a></li>";
                         }
			 
		   
		   
		   ?>
          </ul>
        </li>
		<li class="dropdown" style="padding-left:110px;">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><b>Tractor Part</b> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php 
		     $query="select BRAND from BRAND where CAT_NAME='TRACTOR_PART' ";
			 $product=mysqli_query($con,$query);
			 while($cat=mysqli_fetch_array($product,MYSQLI_ASSOC)){
                         
                         echo "<li><a href='index.php?keywords={$cat['BRAND']}'>{$cat['BRAND']}</a></li>";
                         }
			 
		  ?>
          </ul>
        </li>
		<li class="dropdown" style="padding-left:110px;">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><b>Lubricant Oil</b> <span class="caret"></span></a>
          <ul class="dropdown-menu">
             <?php 
		     $query="select BRAND from BRAND where CAT_NAME='LUBRICANT_OIL' ";
			 $product=mysqli_query($con,$query);
			 while($cat=mysqli_fetch_array($product,MYSQLI_ASSOC)){
                         
                         echo "<li><a href='index.php?keywords={$cat['BRAND']}'>{$cat['BRAND']}</a></li>";
                         }
			 
		   ?>
          </ul>
        </li>
		<li class="dropdown" style="padding-left:110px;">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><b>Water Pump</b> <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <?php 
		     $query="select BRAND from BRAND where CAT_NAME='WATER_PUMP' ";
			 $product=mysqli_query($con,$query);
			 while($cat=mysqli_fetch_array($product,MYSQLI_ASSOC)){
                         
                         echo "<li><a href='index.php?keywords={$cat['BRAND']}'>{$cat['BRAND']}</a></li>";
                         }
			 
		  ?>
            
          </ul>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
	</div>
	</div>	


    
   

    <div class="row">
        <div class="col-sm-12">
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="position:relative;top:15px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="121.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="122.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="123.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
        
        
        </div>
 <?php
 if(isset($_SESSION['email'])){
 
 $email=$_SESSION['email'];
 $query="select * from shopping_cart where email='$email' ";
 $result=mysqli_query($con,$query);
 echo "<br><br>";
 $x=1;
 
 $total=0;
$item=$_SESSION['no_cart'];
 while($array=mysqli_fetch_row($result)){
   $query="select * from admin where productid='$array[0]'";
   $result1=mysqli_query($con,$query);
   $brray=mysqli_fetch_row($result1);
   $total=$total+$array[2]*$brray[6];
  }
 $query="select * from shopping_cart where email='$email' ";
 $result=mysqli_query($con,$query);
 while($array=mysqli_fetch_row($result))
 {
   $query="select * from admin where productid='$array[0]'";
   $result1=mysqli_query($con,$query);
   $brray=mysqli_fetch_row($result1);
   if($x==1){
   echo "<div class='row'><div class='col-sm-3'>
   <form style='border:1px solid #CECECE;' action='#' metthod='get' >
   <table align='center'>
   <caption style='text-align:center;color:brown;'><b>Total_Items:$item</b></caption>
   <caption style='text-align:center;color:brown;'><b>Total_Amount:$total</b></caption>
  <tr> <td><input type='submit' value='Proceed To check Out' name='buy' style='width:150px;background-color:white;' /></td></tr>
  <tr><td><br></td></tr>
   </table>
   </form>
   </div>";}
   else
   {
   echo "<div class='row' >\n<div class='col-sm-3'></div>\n";
   
   }
  echo "<div class='col-sm-9'  class='col-sm-9' style='border:1px solid #CECECE;text-align:center;'>
   <table>
   <tr><td style='position:relative;left:400px;'><a href='product.php?product_id=$brray[0]' class='product' target='_blank'>$brray[9]</a></td></tr>
   <tr><td><a href='product.php?product_id=$brray[0]' target='_blank' style='text-align:center;color:black;'><img src='PRODUCT_IMAGE/$brray[3]'  width='120px' height='120px' /></a>
  </td>
  <td style='text-align:justify;'><b>Price:</b>₹$brray[6]<br><b>Number Of Items:</b>$array[2]<br></td>
  <td style='position:relative;left:300px;'><a  href='delete.php?product_id=$array[0]&delete=yes&quantity=$array[2]' class='product'> Delete</a></td>
  </tr>
   </table>
   </div></div>";
   
   
   
   $x++;
   
   }
   
   
   
  }
  if(!isset($_SESSION['email'])&&$_SESSION['no_cart']>0){
 
 echo "<br><br>";
 $x=1;
 
 $total=0;
$item=$_SESSION['no_cart'];
echo $_SESSION['i'];
 for($i=1;$i<$_SESSION['i'];$i++){
   $assic="cart_".$i;
   $quantity=$_SESSION[ $assic]['quantity'];
   $productid=$_SESSION[$assic]['product_id'];
   $query="select * from admin where productid='$productid'";
   $result1=mysqli_query($con,$query);
   $array=mysqli_fetch_row($result1);
   $total=$array[6]*$quantity+$total;
 
  }
  
  for($i=1;$i<$_SESSION['i'];$i++)
  {  
     $assic="cart_".$i;
     $quantity=$_SESSION[ $assic]['quantity'];
    $productid=$_SESSION[$assic]['product_id'];
   $query="select * from admin where productid='$productid'";
   $result1=mysqli_query($con,$query);
   $array=mysqli_fetch_row($result1);
   if($x==1){
   echo "<div class='row'><div class='col-sm-3'>
   <form style='border:1px solid #CECECE;' action='#' metthod='get' >
   <table align='center'>
   <caption style='text-align:center;color:brown;'><b>Total_Items:$item</b></caption>
   <caption style='text-align:center;color:brown;'><b>Total_Amount:$total</b></caption>
  <tr> <td><input type='submit' value='Proceed To check Out' name='buy' style='width:150px;background-color:white;' /></td></tr>
  <tr><td><br></td></tr>
   </table>
   </form>
   </div>";}
   else
   {
   echo "<div class='row' >\n<div class='col-sm-3'></div>\n";
   
   }
  echo "<div class='col-sm-9'  class='col-sm-9' style='border:1px solid #CECECE;text-align:center;'>
   <table>
   <tr><td style='position:relative;left:400px;'><a href='product.php?product_id=$array[0]' class='product' target='_blank'>$array[9]</a></td></tr>
   <tr><td><a href='product.php?product_id=$array[0]' target='_blank' style='text-align:center;color:black;'><img src='PRODUCT_IMAGE/$array[3]'  width='120px' height='120px' /></a>
  </td>
  <td style='text-align:justify;'><b>Price:</b>₹$array[6]<br><b>Number Of Items:</b>$quantity<br></td>
  <td style='position:relative;left:300px;'><a  href='delete.php?product_id=$array[0]&i=$i&delete=yes&quantity=$quantity' class='product'> Delete</a></td>
  </tr>
   </table>
   </div></div>";
   
   
   
   $x++;
   
   }
   
   
   
  }
 
 if($_SESSION['no_cart']==0){
 echo "<div class='row'><div class='col-sm-12' style='text-align:center;color:blue;'><br><br><h2>Your Shopping Cart is empty.<br>Dear Customer shop Now;</h2></div></div>";
 
 }
 

 
 ?>
		
	<div class="row"  style="background-color:crimson;position:relative;top:50px;">
    
    <div class="col-sm-12"   style="text-align:center;">
        
       <h3><a href="index.php"  >   Machine Tool</a></h3>
        <h4 >© 2018-2019 Machine Tool.ax.dm. </h4>
        
        
        </div>
    
    </div>
    
    </div>
<!---------------------------------------------navbarend---------------------------------------------------------------------------------->
   
   
    
</body>
</html>
