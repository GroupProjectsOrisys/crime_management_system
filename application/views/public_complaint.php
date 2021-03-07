<!DOCTYPE html>
<title>crime</title>
<link rel="stylesheet"   href="<?php echo base_url() ?>css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/css/addStyle.css">
<style>
</style>
<h1>ADD CASE FORM</h1>
<body class="bi">
<form class="add" method="post" action="<?php echo base_url()?>CrimeC/insert_complaint">
<div>
<table>
    <?php
    if(isset($user_data))
    {
    foreach($user_data->result() as $row1)
    {
    ?>
<tr>
    <td>complainterName:</td>
    <td><input type="text" placeholder="complainter Name" name="complainter_name" value="<?php echo $row1->name; ?>" readonly></td>
</tr>
<?php
}
}
?>
<tr>
    <td>complaint:</td>
    <td><input type="text" placeholder="complaint" name="complaint"></td>
</tr>

    <tr>
    <td><td><input class="btn-primary" type="submit" value="Add"></td></td>
</tr>
</table>
</div>
<a href="<?php echo base_url()?>CrimeC/public_home" class="btn btn-success btn1">Back To Home</a>
</form>
</body>
</html>