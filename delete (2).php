<?php 
 @session_start();
  if(mysqli_connect("fdb17.awardspace.net","2470219_machinetool","Sagar#123"))
{
$con=mysqli_connect("fdb17.awardspace.net","2470219_machinetool","Sagar#123");

}
mysqli_select_db($con,"2470219_machinetool");
  
 if(isset($_GET['delete'])){
 if(isset($_SESSION['name'])){
 $productid=$_GET['product_id'];
 $quantity=$_GET['quantity'];
 $_SESSION['no_cart']=$_SESSION['no_cart']-$quantity;
 $query="delete from shopping_cart where productid='$productid'";
 if(mysqli_query($con,$query)){
 echo "<script>window.open('cartinfo.php','_self')</script>";
 }
 }
 
 
 else
 {
 $i=$_GET['i'];
 $assic="cart_".$i;
 $quantity=$_GET['quantity'];
 $productid=$_GET['product_id'];
 $_SESSION['no_cart']=$_SESSION['no_cart']-$quantity;
 unset($_SESSION[$assic]);
 
 if(!isset($_SESSION[$assic])){
 echo "<script>window.open('cartinfo.php','_self')</script>";
 
 }
 }
 }
 
 ?>
 