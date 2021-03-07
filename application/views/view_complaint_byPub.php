<!DOCTYPE html>
<html>
    <head>
        <title>Crime Management System</title>
        <link rel="stylesheet"   href="<?php echo base_url() ?>css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet"   href="<?php echo base_url(); ?>/css/style.css">
    </head>
    <style>
        
        </style>
    <body>
    <h1> VIEW ADD CASES</h1>
     <a href="<?php echo base_url()?>CrimeC/public_home" class="btn btn-success">Back To Home</a>
        <table class="table table-bordered border-secondary text-center bg-secondary">
            <thead class="table-secondary">
               <tr>
                <th class="col">complaint</th>
                <th class="col">complaint Date</th>
                <th class="col">Delete Action</th>
               </tr>
            </thead>
            <tbody>
            <?php
           if(isset($user_data))
    {
    foreach($user_data->result() as $row)
    {
    ?>
            <tr class="text-white">
            <td><?php echo $row->complaint;?></td>
            <td><?php echo $row->cur_date; ?></td>
            <td><a href="<?php echo base_url(); ?>CrimeC/delete_complaint_byPub/<?php echo $row->complaint_id; ?>">Delete</a></td>
            </tr>
            <?php
              }
            }
            /*else
            {
                ?>
                <tr>
                <td colspan="5">No Data found</td>
                </tr>
               <?php
            }*/
            ?>
            </tbody>
        </table>
    </body>
</html>