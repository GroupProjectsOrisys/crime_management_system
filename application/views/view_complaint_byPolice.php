<!DOCTYPE html>
<html>
    <head>
        <title>Crime Management System</title>
        <link rel="stylesheet"   href="<?php echo base_url() ?>css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet"   href="<?php echo base_url(); ?>/css/stylepublic.css">
    </head>
    <style>
        
    </style>
    <body class="bi">
    <h1>Complaints Added</h1>
    <a href="<?php echo base_url()?>CrimeC/police_home" class="btn btn-success">Back To Home</a>
        <table class="table table-bordered border-secondary text-center bg-secondary">
            <div>
            <thead class="table-secondary">
               <tr>
                <th class="col">Complaint ID</th>
                <th class="col">Complainer Name</th>
                <th class="col">Complaint</th>
                <th class="col">Current Date</th>
                <th class="col">TakeAction</th> 
                <th class="col">Solve</th>
                <th class="col">PassToCourt</th>               
               
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
            <td><?php echo $row->complaint_id; ?></td>
            <td><?php echo $row->complainter_name; ?></td>
            <td><?php echo $row->complaint; ?></td>
            <td><?php echo $row->cur_date; ?></td>
            <?php 
            if($row->case_status=='1')
            {
                ?>
                <td>Processing</td>
                <td><a href="<?php echo base_url(); ?>CrimeC/solvedCase_byPolice/<?php echo $row->complaint_id; ?>">Solve</a></td>
                <td><a href="<?php echo base_url();?>CrimeC/pass_to_court_byPolice/<?php echo $row->complaint_id; ?>">Pass To Court</a></td> 
            <?php
            }
            else if($row->case_status=='2')
            {
                ?>
                <td colspan="3">Case Solved</td>
            <?php
                }
                else if($row->case_status=='3')
                {
                    ?>
                    <td colspan="3">Pass to Court-
                        <a href="<?php echo base_url()?>/CrimeC/add_case_report/<?php echo $row->complaint_id; ?>">Add Report</a></td>

                      
            <?php
                }
                else
                {
            ?>
            <td><a href="<?php echo base_url(); ?>CrimeC/take_action_byPolice/<?php echo $row->complaint_id; ?>">TakeAction</a></td>
            <td><a href="<?php echo base_url(); ?>CrimeC/solvedCase_byPolice/<?php echo $row->complaint_id; ?>"">Solve</a></td>
            <td><a href="<?php echo base_url();?>CrimeC/pass_to_court_byPolice/<?php echo $row->complaint_id; ?>"">Pass To Court</a></td> 
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
        </div>
        </table>
    </body>
</html>
