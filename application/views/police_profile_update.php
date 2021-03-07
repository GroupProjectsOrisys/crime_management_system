<!DOCTYPE html>
<html>
<head>
<title>login_form</title>
<link rel="stylesheet"   href="<?php echo base_url() ?>css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
<style>



</style>
</head>
<body>
<!---
<nav class="menubar">
<ul>
<li><a href="<?php echo base_url()?>controller1/homepage">Home</a></li>
<li><a href="<?php echo base_url()?>controller1/view_notification">View Notification</a></li>
<li><a href="<?php echo base_url()?>controller1/login_student_page">Student Home Page</a>
<li><a href="#">Logout</a>

</ul>
</nav>
------>
<h1>POLICE UPDATE FORM</h1>
<form action="<?php echo base_url() ?>CrimeC/police_update" method="post" class="form">
<table>
<?php
if(isset($user_data))
{
foreach($user_data->result() as $row1)
{
?>
<tr>
	<th>Station ID</th>
	<td>
	<input type="text" placeholder="Station id" name="station_id" value="<?php echo $row1->station_id;?>" readonly></td>
</tr>
<tr>
	<th>Station Name</th>
	<td>
	<input type="text" placeholder="Station Name" name="station_name" value="<?php echo $row1->station_name;?>"></td>
</tr>
<tr>
	<th>District</th>
	<td>
	<select  name="district" >
		<option><?php echo $row1->district;?></option>
		<option>Trivandrum</option>
		<option>Kollam</option>
		<option>Pathanamthitta</option>
		<option>Kottayam</option>
		<option>Alappuzha</option>
	</select></td>
</tr>
<tr>
	<th>Pincode</th>
	<td>
	<input type="text" placeholder="pincode" name="pincode" value="<?php echo $row1->pincode;?>"></td>
</tr>
<tr>
	<th>Phone number</th>
	<td>
	<input type="text" placeholder="phone number" name="phone" value="<?php echo $row1->phone_num;?>"></td>
</tr>
<tr>
	<th>Email</th>
	<td>
	<input type="text" placeholder="Email" name="email" value="<?php echo $row1->email;?>"></td>
</tr>
<tr>
	<td><td colspan="2"><input type="submit" name="update" value="Update" class="btn btn-primary"></td></td>
</tr>

</table>
<?php
}
}
?>
<a href="<?php echo base_url()?>CrimeC/police_home" class="btn btn-success btn1">Back To Home</a>
</form>

</body>
</html>
