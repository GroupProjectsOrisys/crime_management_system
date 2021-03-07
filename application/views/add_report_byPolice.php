<!DOCTYPE html>
<title>crime</title>
<link rel="stylesheet"   href="<?php echo base_url() ?>css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/css/Style.css">
<style>

</style>
<h1>CASE REGISTRATION TO COURT</h1>

<form method="post" action="<?php echo base_url(); ?>CrimeC/add_reportToCourt" enctype="multipart/form-data">
<div>
<table>
	<?php
if(isset($user_data))
{
foreach($user_data->result() as $row1)
{
?>
	<tr>
		<input type="hidden" name="comp_id" value="<?php echo $row1->complaint_id; ?>" readonly>
		<td>Complainter Name:</td>
		<td><input type="text" placeholder="Complainter Name" name="complainter_name" value="<?php echo $row1->complainter_name;?>" readonly></td>
	</tr>
	<tr>
		<td>Complaint:</td>
		<td><input type="text" placeholder="Complaint" name="complaint" value="<?php echo $row1->complaint;?>" readonly></td>
	</tr>
	<tr>
		<td>Police Station Name:</td>
		<td><input type="text" placeholder="Police Station" name="police_station_name" value="<?php echo $row1->station_name;?>" readonly ></td>
	</tr>
	<?php
}
}?>

	<tr>
		<td>Upload Case Report:</td>
		<td><input type="file" placeholder="Choose file" name="case_file"></td>
	</tr>

	<tr>
	<td><td colspan="3"><input type="submit" value="Submit to Court"></td></td>
	</tr>
</table>
</div>

</form>
</body>
</html>