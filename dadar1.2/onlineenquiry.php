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
                            <h1 class="page-header">Online Enquiry</h1>
                        </div>


                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Online Enquiry
                                        </div>
                                        <div class="panel-body">
                                             <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>Follow Up</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Contact</th>
                                                            <th>Address</th>
                                                            <th>Date</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                     <?php
                                                    include 'Includes/Conn.php';
                                                    $sql="select * from onlineenqury  ORDER BY id DESC";
                                                    $result=$con->query($sql);
                                                    if($result->num_rows>0)
                                                    {
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                            
                                                            ?>
                                                            <tr class="success">
                                                                <td><button class="btn btn-danger"  onClick="location.href ='Includes/sendsms.php?varname=<?php echo $row['id'];?>'">Send SMS</button></td>
                                                                <td><?php echo $row['fullname'];?></td>
                                                                <td><?php echo $row['email'];?></td>
                                                                <td><?php echo $row['contact'];?></td>
                                                                <td><?php echo $row['address'];?></td>
                                                                <td><?php echo $row['date'];?></td>
                                                                
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
