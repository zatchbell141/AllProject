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
                            <h1 class="page-header">TYBCA Signup Details</h1>
                        </div>

                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title">TYBCA Signup Details</h3>
                                </div>
                                <div class="panel-body">
                                     <div class="table-responsive">
                                     <table class="table table-striped">
                                         <tr><td><td><button class="btn btn-danger"  onClick="location.href ='sendotallsignup.php?varname=FYBCA'">Send SMS to All</button></td></td></tr>
                                         
                                     </table>
                                     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Fullname</th>
                                                <th>Contact No</th>
                                                <th>Send SMS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include 'Includes/Conn.php';
                                            $sql="select * from signup where yrs='TYBCA' ORDER BY id DESC";
                                            $result=$con->query($sql);
                                            if($result->num_rows>0)
                                            {
                                                while($row=$result->fetch_assoc())
                                                {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['name']." ".$row['lastname']?></td>
                                                <td><?php echo $row['contact']?></td>
                                                <td><button class="btn btn-danger"  onClick="location.href ='follupsignup.php?varname=<?php echo $row['id'];?>'">Send SMS</button></td>
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
