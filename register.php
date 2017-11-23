<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
 <link href="stylesheets/bootstrap.css" rel="stylesheet">
    <link href="stylesheets/main.css" rel="stylesheet">
	
	<script src="js/jquery.min.js"></script>  
	<script src="js/collapse.js"></script> 
	<script src="js/dropdown.js"></script> 
	<script src="js/transition.js"></script> 

</head>

<body>
<div class="row">
<div class="col-xs-4"></div>
<div class="col-xs-4">


<form method="post">
<div align="center">
<div class="card">
<div class="header">
<h1 id="signup_header" align="center"> Sign Up</h1>
</div>

</div>
<table align="center" id="table" width="95%" >
<tr>

 <th><h3>Name</h3></th>
 <th><input type="text" name="name"  required="required" />  </th>
</tr>

<tr>
 <th><h3>Username:</h3></th>
 <th><input type="varchar" name="username" placeholder="Username" required="required" />  </th>
</tr>
<tr>
 <th><h3>Password:</h3></th>
 <th><input type="password" name="password" title="password must be atleast 6 character long" required="required" />  </th>
</tr>
<tr>

<tr>
 <th><h3>Phone no</h3></th>
 <th><input type="text" name="phoneno"  required="required" />  </th>
</tr>
<tr>

<tr>
 <th><h3>Email</h3></th>
 <th><input type="email" name="email" required="required" />  </th>
</tr>
 </table>
<br />
<input class="btn btn-info btn btn-block" type="submit" name="sign" value="Done"/> </th>
<br />
<br />
</form>
</div>
</div class="col-xs-4"></div>
</div>
</body>
</html>
<?php
session_start();

?>
<?php
include("connect.php");
include("details_connect.php");
if(isset($_POST['sign']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$phoneno=$_POST['phoneno'];
	$email=$_POST['email'];
	$query="insert into user_info(username,password,phoneno,email) values('$username','$password','$phoneno', '$email')";
	if(strlen($password)<6)
	{
       echo "<script>alert('Password must be atleast 6 character long!!')</script>"; 	
	}
	else
	{
	  
		$run=mysqli_query($conn,$query);
		echo "<script>
	alert('You have registered Successfully');
	window.location.href = 'operator.php';
	</script>";	
	    	}
}
?>
