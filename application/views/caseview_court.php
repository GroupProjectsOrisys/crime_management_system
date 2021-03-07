<!DOCTYPE html>
<html>
    <head>
        <title>Crime Management System</title>
         <link rel="stylesheet"   href="<?php echo base_url() ?>css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet"   href="<?php echo base_url(); ?>/css/style.css">
    </head>
    <style>
        table,th,td{
            border:1px solid;
            border-collapse: collapse;
            padding:10px;
        }
    </style>
    <body>
    <h1>Case View by Court</h1>
     <a href="<?php echo base_url()?>CrimeC/court_home" class="btn btn-success">Back To Home</a>
        <table class="table table-bordered border-secondary text-center bg-secondary">
            <div class="tab">
            <thead class="table-secondary">
               <tr>
                <th class="col">Complainter Name</th>
                <th class="col">Complaint</th>
                <th class="col">Police Station Name</th>
                <th class="col">Registerd Date</th> 
                <th class="col">Case Report</th>
                <th class="col" colspan="2">Actions</th>               
               
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
            <td><?php echo $row->complainter_name; ?></td>
            <td><?php echo $row->complaint; ?></td>
            <td><?php echo $row->policestation_name; ?></td>
            <td><?php echo $row->cur_date; ?></td>
             <td><a href ="<?php echo base_url('/upload/');
                    if($row->case_file)
                        echo $row->case_file;
                    else echo "nofile";?>"
                target="_blank" class="btn btn-dark">Download</a></td>
            <?php 
            if($row->courtCases_status=='1')
            {
                ?>
                <td>Processing</td>
                <td><a href="<?php echo base_url(); ?>CrimeC/solvedCase_byCourt/<?php echo $row->report_id; ?>">Solve</a></td>
            <?php
            }
            else if($row->courtCases_status=='2')
            {
                ?>
                <td colspan="3">Case Solved</td>
            <?php
                }
                
                else
                {
            ?>
            <td><a href="<?php echo base_url(); ?>CrimeC/take_action_byCourt/<?php echo $row->report_id; ?>">TakeAction</a></td>
            <td><a href="<?php echo base_url(); ?>CrimeC/solvedCase_byCourt/<?php echo $row->report_id; ?>"">Solve</a></td>
            
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
