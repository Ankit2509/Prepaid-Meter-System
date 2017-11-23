

<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="stylesheets/bootstrap.css" rel="stylesheet">
    <link href="stylesheets/main.css" rel="stylesheet">
<title>Change Password</title>
</head>
<div class="container">
<div class="btn-group btn-group-justified">
  <a href="custpro.php" class="btn btn-primary">Customer Profile</a>
  <a href="rechdet.php" class="btn btn-primary">Recharge Detail</a>
  <a href="changepass.php" class="btn btn-primary">Change Password</a>
  <a href="logout.php" class="btn btn-primary">Logout</a>
</div>
</div>
<div class="row" id="login expand">
 <div class="col-xs-4"></div>
 <div class="col-xs-4">
<form method="post">


 <div style align="center">
 <div class="card">
 <div class="header">
 <h2 align="center">Change Password</h2>
 </div>
<table align="center" width="95%">
<tr>
 <th> <input type="text" name="username" placeholder="Enter User name"/></th></tr>
<tr> <th> <input type="password" name="password_old" placeholder="Enter old Password"/></th></tr>
<tr>  <th> <input type="password" name="password_new" placeholder="Enter new Password"/></th>

</tr>
</table>
<br>
<input type="submit" class="btn btn-info btn-block" name="login" value="Change"></input>
<br>
</div>

</form>
</div>
</div>
<div class="col-xs-4"></div>
</html>
