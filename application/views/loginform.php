<!DOCTYPE html>
<html>
  <head>
  	<title>crime management system</title>
  	<link rel="stylesheet" href="<?php echo base_url();?>css/loginStyle.css">
  	<style>

  	</style>
  </head>
  <body>
  	<form class="log" action="<?php echo base_url()?>CrimeC/login_validation" method="post"> 
  		<h2>LOGIN</h2>
  		<input type="text" name="email_mob" placeholder="Email or Mobile"><br>
  		<input type="password" name="password" placeholder="password"><br>
  		<input class="btn_login" type="submit" name="login" value="Login">
  	</form>
  </body>
</html>