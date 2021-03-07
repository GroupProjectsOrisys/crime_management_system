<!DOCTYPE html>
<html>
    <head>
        <title>Crime Management System</title>
        <link rel="stylesheet"   href="<?php echo base_url() ?>css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet"   href="<?php echo base_url() ?>css/stylepublic.css">
    </head>
    <body class="bi">
    <h1>Public Users</h1>
    <a href="<?php echo base_url()?>CrimeC/admin_home" class="btn btn-success">Back To Home</a>
        <table class="table table-bordered border-secondary text-center bg-secondary">
            <thead class="table-secondary">
               <tr>
                <th class="col">Name</th>
                <th class="col">Gender</th>
                <th class="col">Age</th>
                <th class="col">Address</th> 
                <th class="col">Pincode</th>
                <th class="col">District</th>
                <th class="col">Mobile</th>
                <th class="col">Email</th>
                <th class="col">Action</th>
               </tr>
            </thead>
            <tbody>
            <?php
            if($n->num_rows()>0)
            {
                foreach($n->result() as $row)
                {
                    ?>
            <tr class="text-white">
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->gender; ?></td>
            <td><?php echo $row->age; ?></td>
            <td><?php echo $row->address; ?></td>
            <td><?php echo $row->pincode; ?></td>
            <td><?php echo $row->district; ?></td>
            <td><?php echo $row->mob; ?></td>
            <td><?php echo $row->email; ?></td>
            <?php
                if($row->status =='1')
                {

            ?>
                    <td>Approved/<a href="<?php echo base_url(); ?>CrimeC/reject_public/<?php echo $row->login_id; ?>">Reject</a></td>
            
            <?php
                }
                else if($row->status=='2')
                {  
            ?>
                    <td>Rejected/<a href="<?php echo base_url(); ?>CrimeC/approve_public/<?php echo $row->login_id; ?>">Approve</a></td>
            
            <?php
                }
                else
                {
            ?>
                    <td><a href="<?php echo base_url(); ?>CrimeC/approve_public/<?php echo $row->login_id; ?>">Approve</a>/<a href="<?php echo base_url(); ?>CrimeC/reject_public/<?php echo $row->login_id; ?>">Reject</a></td>
            </tr>

              <?php
                }
              }
            }
            else
            {
                ?>
                <tr>
                <td colspan="5">No Data found</td>
                </tr>
               <?php
            }
            ?>
            </tbody>
        </table>
    </body>
</html>