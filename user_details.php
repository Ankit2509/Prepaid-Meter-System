<?php
session_start();
$ca=$_SESSION['user'];
 include("connect.php");
	
	$query="select name,mobile and email from elec_user where username='$ca'";
	$run=mysqli_query($con,$query);
	if(mysqli_num_rows($run)>0)
	{
		echo "<script>window.location.href = 'payment.php';</script>";
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="stylesheets/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheets/main.css" rel="stylesheet">


	
<script src="js/jquery.min.js"></script>  
 
<script src="js/bootstrap.min.js"></script> 
</head>

<body>
<title>USER</title>
</head>
<div class="container">
<div class="btn-group btn-group-justified">
  <a href="user_details.php" class="btn btn-primary">Customer Profile</a>
  <a href="usage.php" class="btn btn-primary">Recharge Detail</a>
  <a href="monitor.php" class="btn btn-primary">Monitoring</a>
  <a href="changepass.php" class="btn btn-primary">Change Password</a>
  <a href="logout.php" class="btn btn-primary">Logout</a>
</div>
</div>
<form method="post">
<div class="row" >

 <div class="col-xs-4" ></div>
 <div class="col-xs-4" align="center" >
 
 
<div class=" card">
<table class="table-bordered" width="80%">
<tr >
<td  align="center">Customer's Name: </td>
<td align="center"><?php echo "abc";?></td>

</tr>
<tr >
<td  align="center">CA Number: </td>
<td align="center"><?php echo $ca;?></td>

</tr>


<tr>
<td align="center">Supply Address: </td>
<td align="center"><textarea rows="7" cols="25" style="resize:none"  readonly="readonly" name="address" id="address">23,chawri bazar,delhi</textarea></td>
</tr>
<tr>
<td align="center">Registered Mobile No. : </td>
<td align="center"><input type="text" name="phone"  id="phone" readonly="readonly"  /></td>

</tr>

<tr>
<tr>
<td align="center">Registered Email Id : </td>
<td align="center"><input type="text" name="email"  id="email" readonly="readonly"  /></td>

</tr>

<td colspan="2" align="center"><input type="submit" name="edit" value="Edit" class="btn btn-info"/></td>
</tr>
</table>
</div>
<div class="col-xs-4" ></div>
</div>
</div>
</form>
</body>
<?php
if(isset($_POST['edit']))
{
	echo "<script>
	$(#address).html('<textarea');
	</script>";
}
?>
</html>