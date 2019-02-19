<?php
  @session_start();
  if(!(isset($_SESSION['email']))){
  header("location:index.php");
  }
 $con=(mysqli_connect("fdb17.awardspace.net","2470219_machinetool","Sagar#123"));
mysqli_select_db($con,"2470219_machinetool");

 ?>                       
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>

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
         #nav1 a:link,#nav a:link{
           color:white;
       }
    #nav1 a:hover, #nav a:hover{
         text-decoration: none;
          color:brown;
      }
	 
      #nav1 a:visited,#nav a:visited{
         color:white;
         text-decoration:none;
         }
      #user:hover{
      color:black;
       }
       
  </style>
    

</head>
<body style="height:auto;">
<!----------------------------------------------------------------navbar--------------------------------------------------------->
                        
 
<div class="container-fluid"  >

        <div class="row" style="background-color:crimson;position:;z-index:1;" id="nav1">
        <div class="col-sm-2">
            <a href="index.php" > <h3 style="color:white;font-family:Comic Sans MS;"><i><b>Machine Tool</b></i></h3></a>
        </div>
        
         <div class="col-sm-5">
         <form>
  <div class="input-group" style="margin-top:15px;">
    <input type="text" class="form-control" placeholder="Search for products" required>
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
        
        <div class="col-sm-1"></div>
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
  <div class="col-sm-1" style="margin:18px;"><a href="#"  >
      <span class="glyphicon glyphicon-shopping-cart"></span><b> <i>Cart <?php  echo $_SESSION['no_cart'] ;?></i></b>
        </a></div>    
            
</div>
    
<div class="row" style="background-color:white;">
   
    
    </div> 
	<div class="row" >
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
                         
                         echo "<li><a href='#'>{$cat['BRAND']}</a></li>";
                         }
			 
		   
		   
		   ?>
          </ul>
        </li>
        </li>
		<li class="dropdown" style="padding-left:110px;">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><b>Tractor Part</b> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php 
		     $query="select BRAND from BRAND where CAT_NAME='TRACTOR_PART' ";
			 $product=mysqli_query($con,$query);
			 while($cat=mysqli_fetch_array($product,MYSQLI_ASSOC)){
                         
                         echo "<li><a href='#'>{$cat['BRAND']}</a></li>";
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
                         
                         echo "<li><a href='#'>{$cat['BRAND']}</a></li>";
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
                         
                         echo "<li><a href='#'>{$cat['BRAND']}</a></li>";
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
<div class="row" style="position:relative;top:50px;" >
<div class="col-sm-2">
</div>
<a href="#"  id="user">
<div class="col-sm-2" style="border:2px solid gray;text-align:center;" >

<img  src="payment.png" width="50px"  height="30px"/>
<p><b><i>Payment Option</i></b></p>

</div>
<div class="col-sm-2">
</div>
</a>
<a href="changeinfo.php"  id="user">
<div class="col-sm-2" style="border:2px solid gray;text-align:center;" >

<img  src="sign.png" width="50px" height="30px"/>
<p><b><i>change Your Info</i></b></p>

</div>
</a>
<div class="col-sm-2">
</div>

<a href="#"  id="user">
<div class="col-sm-2" style="border:2px solid gray;text-align:center;" >

<img  src="address.png" width="50px" height="30px"/>
<p><b><i>change Your Address</i></b></p>

</div>
</a>


</div>
                
                
                
                
	<div class="row"  style="background-color:crimson;position:relative;top:100px;" id="nav">
      
    
    <div class="col-sm-12"  style="text-align:center;" >
        
       <h3><a href="index.php" a>   Machine Tool</a></h3>
        <h4 >© 2018-2019 Machine Tool.ax.dm. </h4>
        
        
        </div>
    
    </div>
    
    </div>
<!---------------------------------------------navbarend---------------------------------------------------------------------------------->
   
   
    
</body>
</html>
