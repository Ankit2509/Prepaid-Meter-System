<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Team USA">

    <title>Centralised Resource Distribution Department</title>

    <link href="stylesheets/bootstrap.css" rel="stylesheet">
    <link href="stylesheets/main.css" rel="stylesheet">
	
	<script src="js/jquery.min.js"></script>  
	<script src="js/collapse.js"></script> 
	<script src="js/dropdown.js"></script> 
	<script src="js/transition.js"></script> 
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!--Header starts--> 

<div class="top">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 right" style="padding:0px">
        <div class="top__menu">
          <ul class="nav  nav-pills">
			<li><a href="#" target="blank">Old Site</a></li>
            <li><a href="#">Contact Us</a></li>
            <li class="dropdown  js--mobile-dropdown">
              <a class="dropdown-toggle" href="#">
                English <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Hindi</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<header class="header">
  <div class="container">
	<div class="row">
		<div class="col-xs-12 center jumbotron__title" style="text-align:center">
			Centralised Resource Distribution Department
			<p class="jumbotron__subtitle" style="text-align:center">(Pre-paid meter system)</p>
		</div>
	</div>
	
	<div class="row" style="border-top:3px solid green">
		<div class="col-xs-2 visible-xs visible-sm">
			<div class="header-logo-small">
			  <a href="#"><img alt="Logo" src="images/logo.jpg" width="80" height=""></a>
			</div>
		</div>
		<div class="col-xs-8 visible-xs visible-sm"></div>
		<div class="col-xs-2 visible-xs visible-sm">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle  collapsed" data-toggle="collapse" data-target="#collapsible-navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			</div>
		  </div>
		<div class="col-md-2 hidden-xs hidden-sm"></div>  
	    <div class="col-xs-12 col-md-10 center">
		 <nav class="navbar navbar-default" role="navigation">
		  <!-- Collect the nav links, forms, and other content for toggling -->
		  
		  <div class="collapse navbar-collapse" id="collapsible-navbar">
			
			<ul class="nav  navbar-nav ">

			  <li class="dropdown">
				<a href="index.php" class="dropdown-toggle">About Us</a>
				
			  </li>
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle">Complain</a>
				
			  </li>
			  </ul>
			  <div class="hidden-xs hidden-sm col-md-4">
				<div class="header-logo" >
				  <a href="#"><img alt="Logo" src="images/logo.jpg" width="160" height=""></a>
				</div>
			  </div>
			  
			  <ul class="nav navbar-nav">
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle">Log-In</a>
				
			  </li>
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle">Register</a>
				
			  </li>
			  
			  <!--li class="hidden-xs  hidden-sm">
				<a href="#" class="js--toggle-search-mode"><span class="glyphicon  glyphicon-search  glyphicon-search--nav"></span></a>
			  </li-->
			</ul>
			
			
		  </div><!-- /.navbar-collapse -->
		</nav>

</div>
    </div>
	
  </div>   

  
</header>
<!--Header ends--><br><br/>
 
 <div class="row" >
 <div class="col-xs-8">
 <h1 style="margin-left:20px; color:green">About Us</h1>
 <br>
 <h3 style="margin-left:20px; color:green">Smart City</h3>
 <p style="margin-left:20px">
 A smart city is an urban development vision to integrate information and communication technology (ICT) and Internet of things (IoT) technology in a secure fashion to manage a city's assets. These assets include local departments' information systems, schools, libraries, transportation systems, hospitals, power plants, water supply networks, waste management, law enforcement, and other community services. A smart city is promoted to use urban informatics and technology to improve the efficiency of services. ICT allows city officials to interact directly with the community and the city infrastructure and to monitor what is happening in the city, how the city is evolving, and how to enable a better quality of life. Through the use of sensors integrated with real-time monitoring systems, data are collected from citizens and devices – then processed and analyzed. The information and knowledge gathered are keys to tackling inefficiency.
 <br>
 <h3 style="margin-left:20px; color:green">Implementation</h3>
 <p style="margin-left:20px">
 The idea is to switch from the current post-paid electricity/water meter system to pre-paid electricity/water meter system. In
 the pre-paid electricity/water meter system, the advantage would be an ease over the monitoring, control and reduction of the
 power consumption for each individial household. This would result in the reduction of the consumtion of these basic amenities
 on a very large scale. The cost of implementation of the new meters would be accounted for within a few years. The consumer would
 be more consious towards the reduction of their respective consumptions.
 </div>
 <div class="col-xs-4">
 <form method="post">
 <div>
 <a href="#electricity" class="btn btn-warning btn-block" data-toggle="collapse"><span class="glyphicon glyphicon-flash"></span> Electricity Recharge</a> <br>
 <div id="electricity" class="collapse">
 <table class="table " >
 <tr ><td align="center" colspan="2" >
<select name="elecb" style="margin-left:150px" >
<option> Choose Electricity Board </option>
<option> Tata Power DDL</option>
<option>BYPL</option>
<option> BRPL</option>
<option> Haryana Board</option>
</select></td></tr>
<tr>
<td>CA No. :</td>
<td><input type="text" name="ca_elec"/></td></tr>
<tr><td  ><input  type="submit" class="btn btn-default" name="elec_login"  value="Login" /></td>
<td ><input  type="submit" class="btn btn-default" name="elec"  value="Submit"/></td>

</tr>
 </table> 
</div>
<a href="#water" class="btn btn-info btn-block" data-toggle="collapse">Water Recharge</a>
 <br>
 <div id="water" class="collapse">
 <table class="table " >
 <tr ><td   colspan="2">
<select name=" jalb"  style="margin-left:150px">
<option> Choose Water Board </option>
<option> Delhi Jal Board</option>
<option> UP Jal Board</option>
<option> Haryana Jal Board</option>
<option> Gujarat Jal Board</option>
</select></td></tr>
<tr>
<td>Consumer No. :</td>
<td><input type="text" name="ca_jal"/></td></tr>
<tr>
<td ><input  type="submit" class="btn btn-default" name="jal_login"  value="Login"/>
<td><input  type="submit" class="btn btn-default" name="jal"  value="Submit"/></td></tr>
 </table> 
</div>
</div> 
</form>
 </div>
 </div>
 </div>
 
 <?php
 $test=0;
 include("connect.php");
 if(isset($_POST['elec']) and $test==0)
{
	$board=$_POST['elecb'];
	$ca_no=$_POST['ca_elec'];
	$_SESSION['user']=$ca_no;
	$_SESSION['brd']=$board;
	$_SESSION['bord']=$board;
	$_SESSION['department']="E";
	$test=1;
	
	$query="select username from elec_user where username='$ca_no'";
	$run=mysqli_query($con,$query);
	if(mysqli_num_rows($run)>0)
	{
		echo "<script>window.location.href = 'payment.php';</script>";
	}
	else
		echo"<script>alert('Wrong Credentials')</script>";
}
else if(isset($_POST['jal']) and $test==0)
{
	
	$board1=$_POST['jalb'];
	$ca_no1=$_POST['ca_jal'];
	$_SESSION['user']=$ca_no1;
	$_SESSION['brd']=$board1;
	$_SESSION['bord']=$board1;
	$_SESSION['department']="W";
	$query1="select username from jal_user where username='$ca_no1'";
	$run1=mysqli_query($con,$query1);
	if(mysqli_num_rows($run1)>0)
	{
		echo "<script>window.location.href = 'payment.php';</script>";
	}
	else
		echo"<script>alert('Wrong Credentials')</script>";
	
}
if(isset($_POST['elec_login']) or isset($_POST['jal_login']))
{
	echo "<script>window.location.href = 'operator.php';</script>";
}
?>
</body>