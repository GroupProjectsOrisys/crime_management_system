<!DOCTYPE html>
<html>
<head>
<title>Crime Management System</title>
<link rel="stylesheet"   href="<?php echo base_url() ?>css/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>css/homeStyle.css">
<style>

</style>
</head>
<body class="bi">
<div class="menubar">
   <h2> PUBLIC HOME</h2>
   <ul>
    <li><a href="<?php echo base_url();?>CrimeC/public_profile_update_form">Profile Updation</a></li>
        <li><a href="#">Cases</a>
        <div class="submenu">
        <ul>
            <li><a href="<?php echo base_url();?>CrimeC/add_complaint">Add</a></li>
            <li><a href="<?php echo base_url();?>CrimeC/view_complaint_byPub">view</a></li>
            <!---------<li><a href="<?php echo base_url();?>CrimeC/public_home">logout</a></li>----------->
        </ul>
        </div>
         </li>
    <li><a href="<?php echo base_url();?>CrimeC/view_complaint_status_byPub">Case Status</a></li>
    <li><a href="<?php echo base_url();?>CrimeC/viewlogin">Logout</a></li>
   </ul>
   </div>
   <section class="public">
      <table class="tb1">
  <?php
  if(isset($user_data))
  {
  foreach($user_data->result() as $row1)
  {
  ?>
  <tr>
    <th>Name :</th>
    <td>
    <input class="text1" type="text" placeholder="Name" name="name" value="<?php echo $row1->name;?>" readonly></td>
  </tr>
  <tr>
    <th>Gender :</th>
    <td>
       <input type="text" class="text1"  placeholder="gender" name="gender" value="<?php echo $row1->gender;?>" readonly>
    </td>
  </tr>
  <tr>
    <th>Age :</th>
    <td>
    <input type="text" class="text1"  placeholder="Age" name="age" value="<?php echo $row1->age;?>" readonly></td>
  </tr>
  <tr>
    <th>Address :</th>
    <td>
    <textarea class="text1"  placeholder="Address" name="address" readonly><?php echo $row1->address;?></textarea></td>
  </tr>
  <tr>
    <th>Pincode :</th>
    <td>
    <input class="text1"  type="text" placeholder="pincode" name="pincode" value="<?php echo $row1->pincode;?>" readonly></td>
  </tr>
  <tr>
    <th>Phone number :</th>
    <td>
    <input class="text1"  type="text" placeholder="phone number" name="phone" value="<?php echo $row1->mob;?>" readonly></td>
  </tr>
  <tr>
    <th>District :</th>
    <td>
      <input class="text1" type="text" placeholder="phone number" name="phone" value="<?php echo $row1->district;?>" readonly>
    </td>
  </tr>
  <tr>
    <th>Email :</th>
    <td>
    <input class="text1" type="text" placeholder="Email" name="email" value="<?php echo $row1->email;?>" readonly></td>
  </tr>
</table>
<?php
}
}
?>
   </section>
  </body>
</html>