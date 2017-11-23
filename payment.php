<?php
session_start();
$ca=$_SESSION['user'];
$board=$_SESSION['brd'];
$dep=$_SESSION['department'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Payment</title>
<link href="stylesheets/bootstrap.min.css" rel="stylesheet">

	
<script src="js/jquery.min.js"></script>  
 
<script src="js/bootstrap.min.js"></script> 
</head>
</head>

<body>
<form method="post">
<div class="row" >
<div class="jumbotron text-center"><h1>Pay Here</h1></div>
 <div class="col-xs-4" ></div>
 <div class="col-xs-4" align="center" >
 
  

<div class=" card">
<table class="table-bordered" width="80%">
<tr >
<td >CA Number: </td>
<td><?php echo $ca;?></td>

</tr>
<tr >
<td >Distributer: </td>
<td><?php echo $board;?></td>

</tr>


<tr>
<td>Select Recharge Amount(min Rs.500) : </td>
<td><input type="number" name="amount" /></td>
</tr>
<tr>
<td>Payment Mode : </td>
<td><select name="elecb" >
<option> Choose Payment Mode </option>
<option> Credit Card</option>
<option> RuPay Card</option>
<option> Debit Card</option>
<option> Internet Banking</option>
</select></td>

</tr>

<tr>

<td colspan="2" align="center"><input type="submit" name="recharge" value="Proceed to Pay" /></td>
</tr>
</table>
</div>
<div class="col-xs-4" ></div>
</div>
</div>
</form>
<?php
if(isset($_POST['recharge']))
{
	$amount=$_POST['amount'];
	if($dep=="E")
	{
	}
	else if($dep=="W")
	{
	}
	echo "<script>
	alert('Your Payment has been proceeded to Bank Secure Page');
	window.location.href = 'index.php';
	</script>";	
}
?>
</body>
</html>