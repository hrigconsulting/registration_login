<?php

if(isset($_POST['submit']))
{ 
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('registration') or die(mysql_error());
 $mail=$_POST['email'];
 $q=mysql_query("select * from users where email='".$mail."' ") or die(mysql_error());
 $p=mysql_affected_rows();
 if($p!=0) 
 {
  $res=mysql_fetch_array($q);
  $to=$res['email'];
  $subject='Remind password';
  $message='Your password : '.$res['password']; 
  $headers='From:hrigconsulting@gmail.com';
  $m=mail($to,$subject,$message,$headers);
  if($m)
  {
    echo 'Check your inbox in mail';
  }
  else
  {
   echo'mail is not send';
  }
 }
 else
 {
  echo'You entered mail id is not present';
 }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<p></p>
<p></p>
<p></p>
<div class="container">
      
      <!--<form class="form-signin" method="POST">-->
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading" align="center">Forgot Password</h2>
        <div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">@</span>
		  <input type="text" name="email" class="form-control" placeholder="Email ID" required>
		</div>
        <button class="btn btn-lg btn-primary btn-block" input type='submit' name='submit'/>Forgot Password</button>
        <a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a>
      </form>
</div>

<!--<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Email id:</td><td><input type='text' name='email'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>-->

</body>
</html>

