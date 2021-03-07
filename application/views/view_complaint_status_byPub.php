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
    <h1> CASES STATUS</h1>
     <a href="<?php echo base_url()?>CrimeC/public_home" class="btn btn-success">Back To Home</a>
        <table class="table table-bordered border-secondary text-center bg-secondary">
            <thead class="table-secondary">
               <tr>
                <th class="col">Complaint ID</th>
                <th class="col">complaint</th>
                <th class="col">complaint Date</th>
                <th class="col">Case Status</th>
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
            <td><?php echo $row->complaint_id; ?></td>
            <td><?php echo $row->complaint;?></td>
            <td><?php echo $row->cur_date; ?></td>
            <?php
            if($row->case_status=='1')
            {
            ?>
            <td style="color:blue">Processing</td>
            <?php
            }
            else if($row->case_status=='2')
            {
            ?>
            <td style="color:green">Case is Closed</td>
            <?php
            }
            else if($row->case_status=='3')
            {
            ?>
            <td style="color:yellow">Pass To Court</td>
            <?php
            }
            else if($row->case_status=='4')
            {
            ?>
            <td style="color:yellow">processing by court</td>
            <?php
            }
            else if($row->case_status=='5')
            {
            ?>
            <td style="color:yellow">case is closed by court</td>
            <?php
            }
            else
            {
            ?>
            <td style="color:red">Pending</td>
            <?php
            }
            ?>
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