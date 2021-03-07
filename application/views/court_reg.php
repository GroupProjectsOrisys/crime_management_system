<!DOCTYPE html>
<title>crime</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>/css/Style.css">
<style>

</style>
<h1>Court Registeration Form</h1>

<form method="post" action="<?php echo base_url(); ?>CrimeC/insert_court">
<div>
<table>
<tr>
	<td>Court Id:</td>
	<td><input type="text" placeholder="Court Id" name="court_id" ></td>
</tr>
<tr>
	<td>Court Name:</td>
	<td><input type="text" placeholder="Court  Name" name="court_name"></td>
</tr>
<tr>
	<td>Pincode:</td>
	<td><input type="text" placeholder="Pincode" name="pincode"></td>
</tr>
<tr>
	<td>District</td>
	<td><input type="text" placeholder="District" list="district" name="district"></td>
</tr>
	<datalist id="district">
		<option>Trivandrum</option>
		<option>Kollam</option>
		<option>Pathanamthitta</option>
		<option>Kottayam</option>
		<option>Alappuzha</option>
		<option>Idukki</option>
		<option>Ernakulam</option>
		<option>Thrissur</option>
		<option>Palakkad</option>
		<option>Kozhikod</option>
		<option>Malappuram</option>
		<option>Wayanad</option>
		<option>Kannur</option>
		<option>Kasargod</option>
	</datalist>
<tr>
	<td>Phone Number:</td>
	<td><input type="text" placeholder="Phone number" name="mob"></td>
</tr>
<tr>
	<td>Email:</td>
	<td><input type="email" placeholder="email" name="email"></td>
</tr>
<tr>
	<td>Password:</td>
	<td><input type="password" placeholder="Password" name="password"></td>
</tr>
<tr>
	<td><input class="btn2" type="submit" value="Register"></td>
</tr>
</table>
</div>

</form>
</body>
</html>