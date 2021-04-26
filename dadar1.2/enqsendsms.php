<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'Includes/header.php';?>
    </head>
    <body>

        <div id="wrapper">
 		<?php include 'Includes/menu.php';?>
           
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">SMS Sender</h1>
                        </div>


                        <div class="col-lg-12">
                             <div class="panel panel-default">
                                <div class="panel-heading">
                                    SMS Sender
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sr.no</th>
                                        <th>Name</th>
                                        <th>Stream</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                        <th>Send SMS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    include 'Includes/Conn.php';
                                    
                                    $sql="select * from enquiry where admitted='0' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            ?>
                                            <tr class="success">
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['Stream'];?></td>
                                                <td><?php echo $row['phno'];?></td>
                                                <td><?php
                                                    $status=$row['admitted'];
                                                    if($status=='1')
                                                    {
                                                        echo '<b style="color:Green">Admitted</b>';
                                                    }
                                                    else
                                                    {
                                                       echo '<b style="color:red">Not Admitted</b>'; 
                                                    }
                                                ?></td>
                                                <td><button class="btn btn-danger"  onClick="location.href = 'sendsms.php?varname=<?php echo $row['id'];?>'">Send SMS</button></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                            ?>
                                
                               </tbody>
                                </table>
                             </div>
                                    </div>
                                </div>
                             </div>
                        </div>

                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

       <?php include 'Includes/footor.php';?>
    </body>
</html>
