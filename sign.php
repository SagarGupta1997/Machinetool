<?php 

@session_start();

//require("connection.php");
if(mysqli_connect("fdb17.awardspace.net","2470219_machinetool","Sagar#123"))
{
$con=mysqli_connect("fdb17.awardspace.net","2470219_machinetool","Sagar#123");
}
mysqli_select_db($con,"2470219_machinetool");

?>



<!DOCTYPE html>
<html>
<head>
<title>Machine Tool Registration</title>
 <link href="l.png" rel="icon" type="image/png" >



<style>
div{

height:400px;
position:absolute;
top:150px;
left:480px;
border:1px solid #CECECE;
}
#footer{
height:20px;
left:200px;
width:900px;
border:0px solid #CECECE;
}
table
{

height:405px;
}
tr
{
height:20px;
font-weight:bold;
width:500px;
}

</style>
</head>
<body>

<div style="position:absolute;top:20px;height:50px;border:0;left:530px;"><a href="index.php"><img src="l.png" ></a></div>
<div style="position:absolute;top:110px;height:50px;border:0;left:550px;"><h3>
<?php
if(isset($_POST['submit'])){
  $name=$_POST['NAME'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $pwd=$_POST['password'];
  $query="select * from User_detail where email='$email'";
  $run=mysqli_query($con,$query);
  $info=mysqli_fetch_array($run,MYSQLI_ASSOC);
  if($info['email']==$email){
    echo "Email Id Already Exists";
    }
  else
      {  
         $otp=mt_rand (1000,10000);
          $message="Welcome TO Machine Tool \n Your OTP is $otp";
         
         $_SESSION['name']=$name;
         $_SESSION['mobile']=$mobile;
          $_SESSION['email']=$email;
           $_SESSION['password']=$pwd;
            $_SESSION['otp']=$otp;
            if(mail($email,"MACHINE TOOL",$message)){
        echo "<script>window.open('otp.php','_self')</script>";
        }
      }
}

?>

</h3>

   </div>
<div>
  
   
   
<form      method="post" action="<?php echo $_SERVER['PHP_SELF'] ; ?>"  >
<table cellspacing="1px" cellpadding="4px"  >
<tr>
<td colspan="3" style="position:absolute;left:30px;font-size:30px;">Create Account</td>
</tr>
<tr >
<td>NAME:</td><td><input class="form"type="text" placeholder="Name" name="NAME" required /></td>
</tr>
<tr>
<td>Mobile:</td>
<td colspan="2"><input class="form"type="text" placeholder="Mobile Number" name="mobile" required /></td>
</tr><tr>
<td>Email Address:</td>
<td><input type="email"  class="form"name="email" required  /></td>
</tr>
<tr><td>Password:</td>
<td colspan="2">
<input  type="password" class="form"placeholder="Atleast-6-Characters" name="password" required /></td>
</tr>
<tr>
<td colspan="3"><input style="position:relative;left:10px;background-color:white;width:250px;"type="submit"  placeholder="Submit" name="submit" /></td>

</tr>
</table>

</form>

</div>


<div style="position:relative;top:570px;" id="footer" ><hr style="color:red;">
   <h4 align="center"><b><i>© 2018-2019 Machine Tool.ax.dm.</i></b></h4></div>





</body>
</html>
