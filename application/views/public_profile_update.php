<!DOCTYPE html>
<html>
<head>
<title>update form</title>
<link rel="stylesheet"   href="<?php echo base_url() ?>css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/Style.css">
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
<h1>PUBLIC UPDATE FORM</h1>
<form action="<?php echo base_url() ?>CrimeC/public_update" method="post" class="form">
<table >
	<?php
	if(isset($user_data))
	{
	foreach($user_data->result() as $row1)
	{
	?>
	<tr>
		<th>Name :</th>
		<td>
		<input type="text" placeholder="Name" name="name" value="<?php echo $row1->name;?>"></td>
	</tr>
	<tr>
		<th>Gender:</th>
		<td>
		<select name="gender">
		<option><?php echo $row1->gender;?></option>
		<option>Male</option>
		<option>Female</option>
		</select></td>
	</tr>
	<tr>
		<th>Age</th>
		<td>
		<input type="text" placeholder="Age" name="age" value="<?php echo $row1->age;?>"></td>
	</tr>
	<tr>
		<th>Address</th>
		<td>
		<textarea placeholder="Address" name="address" ><?php echo $row1->address;?></textarea></td>
	</tr>
	<tr>
		<th>Pincode:</th>
		<td>
		<input type="text" placeholder="pincode" name="pincode" value="<?php echo $row1->pincode;?>"></td>
	</tr>
	<tr>
		<th>Phone number:</th>
		<td>
		<input type="text" placeholder="phone number" name="phone" value="<?php echo $row1->mob;?>"></td>
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
		<th>Email:</th>
		<td>
		<input type="text" placeholder="Email" name="email" value="<?php echo $row1->email;?>"></td>
	</tr>
	<tr>
		<td><td colspan="2"><input class="btn btn-primary" type="submit" name="update" value="Update"></td></td>
	</tr>
</table>
<?php
}
}
?>
<a href="<?php echo base_url()?>CrimeC/public_home" class="btn btn-success btn1">Back To Home</a>
</form>
</body>
</html>