<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Membership Registration Portal</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
    <div class="input-group">
  	  <label>Title(Mr/Mrs/Ms/Prof./Dr/Others)</label>
  	  <input type="text" name="title" value="<?php echo $title; ?>">
  	</div>
    
    <div class="input-group">
  	  <label>Surname</label>
  	  <input type="text" name="surname" value="<?php echo $surname; ?>">
  	</div>
    
    <div class="input-group">
  	  <label>Other  Names</label>
  	  <input type="text" name="othername" value="<?php echo $othername; ?>">
  	</div>
    
    <div class="input-group">
  	  <label>Residential Address (Not P.O. Address)</label>
  	  <input type="text" name="res_address" value="<?php echo $res_address; ?>">
  	</div>
    
    <div class="input-group">
  	  <label>Mailing Address</label>
  	  <input type="text" name="m_address" value="<?php echo $m_address; ?>">
  	</div>
    
    <div class="input-group">
  	  <label>GSM Phone</label>
  	  <input type="text" name="phone" value="<?php echo $phone; ?>">
  	</div>
    
    <div class="input-group">
  	  <label>Nationality</label>
  	  <input type="text" name="national" value="<?php echo $national; ?>">
  	</div>
    
    <div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
    
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="submit">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>