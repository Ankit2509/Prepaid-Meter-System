<?php
session_start();
$department=$_SESSION['department'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usage</title>
 <link href="stylesheets/bootstrap.min.css" rel="stylesheet">
	
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>  
	
</head>

<body>
<div class="row" >
<div class="jumbotron text-center"><h1>Usage Monitor</h1></div>
 <div class="col-xs-4" ></div>
 <div class="col-xs-4" align="center" >
 
  

<div class=" card">
<table class='table-bordered' width="100%">
	 <tr>
	 <td>Date</td><td>Units</td>
	 </tr>
<?php
$con=mysqli_connect("localhost","root","","payment");
?>
<?php
echo $department;
if($department=="E")
$fetch_data="select * from elec_use order by date desc";
else if($department=="W") 
$fetch_data="select * from jal_use order by date desc";
 $run=mysqli_query($con,$fetch_data);
 
 while($row_wise_data=mysqli_fetch_array($run))
 {
	 $date=$row_wise_data[1];
	 $units=$row_wise_data[2];
	 echo"
	 
	 <tr>
	 <td>$date</td><td>$units</td>
	 </tr>
	 
	 ";
	 
 }
 

?>
</table>
	 </div>
	 <div class='col-xs-4'></div>
</div>
</div>
</body>
</html>