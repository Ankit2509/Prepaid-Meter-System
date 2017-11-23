<?php
session_start();
$board=$_SESSION['bord'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Team USA">

    <title>CRDD</title>

    <link href="stylesheets/bootstrap.css" rel="stylesheet">
    <link href="stylesheets/main.css" rel="stylesheet">
	
	<script src="js/jquery.min.js"></script>  
	<script src="js/collapse.js"></script> 
	<script src="js/dropdown.js"></script> 
	<script src="js/transition.js"></script>
   
	
    

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
		<div class="col-xs-12 center jumbotron__title">
			<?php
			echo $board;
			?>
		</div>
	</div>
	
	<div class="row" style="border-top:3px solid green">
		<div class="col-xs-2 visible-xs visible-sm">
			
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

			  <li >
              			  <li class="dropdown">

				<a href="shop.html" class="dropdown-toggle" >About Us<b class="caret"></b></a>
				
			  </li>
			  <li class="dropdown">
				<a href="blog.html" class="dropdown-toggle">Buisnesses<b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="blog-right-sidebar.html">Power Generation</a></li>
				  <li><a href="blog-left-sidebar.html">Transmission</a></li>
				  <li><a href="blog.html">Distribution</a></li>
				  <li><a href="single-post.html">Solar Power</a></li>
				  <li><a href="single-post.html">Projects</a></li>
				</ul>
			  </li>
			  </ul>
			  <div class="hidden-xs hidden-sm col-md-4">
				
			  </div>
			  
			  <ul class="nav navbar-nav">
			  <li class="dropdown">
				<a href="about-us.html" class="dropdown-toggle">Sustainablity<b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="about-us.html">Biodiversity</a></li>
				  <li><a href="pricing.html">Social Capital</a></li>
				  <li><a href="about-us.html">New Technologies</a></li>
				  
				</ul>
			  </li>
			  <li class="dropdown">
				<a href="features.html" class="dropdown-toggle">Careers <b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="features.html">Life at TATA Power</a></li>          
				  <li><a href="features.html">Join US</a></li>
				  <li><a href="features.html">Important Notices</a></li>
				  
				  
				 
				 
				</ul>
			  </li>
			  
			 
			</ul>
			
			
		  </div><!-- /.navbar-collapse -->
		</nav>

</div>
    </div>
	
  </div>   

  
</header>
<!--Header ends-->



<body>
<form method="post">

<div class="row" id="login expand">
 <div class="col-xs-8"></div>
 <div class="col-xs-4">
 <div class="card">
 <div class="header">
 <h2 align="center">User Log-in</h2>

<table align="center" width="95%">
<tr>
 <th> <input type="text" name="username" placeholder="Enter User name"/></th>
 <th> <input type="password" name="password" placeholder="Enter Passwprd"/></th>
</tr>
</table>
<br>
<input type="submit" class="btn btn-info btn-block" name="login" value="Log-in"></input>
<br>
<a href="register.php" style="margin-left:175px">Register here</a>
</div>

</div>


 </div>
 
 
 </div>
</form>

</body>


<?php
include("connect.php");
include("details_connect.php");
 if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query="select username and password from user_info where username='$username' and password='$password'";
	$run=mysqli_query($conn,$query);
	if(mysqli_num_rows($run)>0)
	{
	   
		echo "<script>window.location.href = 'user_details.php';</script>";
	}
	else
	  echo "<script>alert('Invalid Email Or Password!!')</script>";
	


}
?>

