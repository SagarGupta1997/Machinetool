<?php 
@session_start();
//require("connection.php");
if(mysqli_connect("fdb17.awardspace.net","2470219_machinetool","Sagar#123"))
{
$con=mysqli_connect("fdb17.awardspace.net","2470219_machinetool","Sagar#123");
}
mysqli_select_db($con,"2470219_machinetool");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<title>Machine Tool SIGN IN</title>
 <link href="l.png" rel="icon" type="image/png" >
<link rel="stylesheet" href="sigin.css" type="text/css"/>
</head>
<body>
<p>
	
<div id="first">
	<a href="index.php"><img src="l.png" class="img" style="position:relative;top:0px;left:530px;"/></a>
        
     <?php
if(isset($_POST['submit'])){
$email=$_POST['email'];
$query="select email from User_detail where email='$email'";
$result=mysqli_query($con,$query);
$array=mysqli_fetch_array($result,MYSQLI_ASSOC);
if(isset($array)){
        $_SESSION['email']=$email;
         $otp=mt_rand (1000,10000);
          $message="Welcome TO Machine Tool \n Your OTP is $otp";
        if( mail($email,"MACHINE TOOL",$message)){
         $_SESSION['otp']=$otp;
       echo"<script>window.open('otp.php','_self')</script>";
       }
}
else
{
echo "<h3 style='position:relative;top:0px;left:480px;color:black;border:1px solid red;width:300px;'>Your Entered  Email Id does not exist</h3> "; 
}

}
?> 
        

   
	<div id="form" style="height:320px;">
  
	
	
<table>	
	<form action="forget.php" method="post" >
	<tr><td style="font-size:30px;font-weight:bold;text-align: center;">
		Password assistance
	</td></tr><br/>
	<tr><td> Enter the email address or mobile phone number associated with your Machine Tool account</td></tr>
		<tr><td><input class="input" onClick="onclik()" name="email" type="email" value="<?php echo $_POST['email']; ?>" placeholder=" Email id" required /></td> </tr>
	 <tr><td><input class="button" type="submit" value="Continue" name="submit"/></td></tr></form>
		<tr><td><hr/></td></tr>
		<tr> <td align="center">New to Machine Tool</td></tr>
		<tr><td><a href="sign.php"><button   class="button">create your machine tool account</button></a></td></tr>
		
		</table>
		
		
</div>
	
<div style="position:relative;top:460px;left:200px;width:900px;" id="footer" ><hr style="color:red;">
   <h4 align="center"><b><i>© 2018-2019 Machine Tool.ax.dm.</i></b></h4></div>

	
	
	
</div>


</body>
</html>
