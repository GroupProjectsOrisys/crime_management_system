<!DOCTYPE html>
<html>
	<head>
	<title>Crime Management System</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="<?php echo base_url(); ?>css/homeStyle.css">
    <link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
	<style>
	</style>
	</head>
	<body class="admin">
	<h1>Admin Home</h1>
	<div class="row menubar">
	<div class="col menubar">
	<ul>
        
		<li><a href="#">Manage Users</a>
			<div class="sublink submenu">
			   <ul>
				<li><a href="<?php echo base_url(); ?>CrimeC/viewP_admin">Public</a></li>
				<li><a href="<?php echo base_url(); ?>CrimeC/viewPolice_admin">Police</a></li>
                <li><a href="<?php echo base_url(); ?>CrimeC/viewCourt_admin">Court</a></li>
			  </ul>
			</div>
		</li>
		<li><a href="<?php echo base_url()?>CrimeC/viewlogin">Logout</a></li>
	</div>
	</body>
</html>