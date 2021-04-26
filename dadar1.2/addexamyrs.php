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
                            <h1 class="page-header">Add Exam Year</h1>
                        </div>
                        <div class="col-lg-12">
                            <form action="addexamyrs.php" method="POST">
                                <table class="table table-striped">
                                    <tr>
                                        <td>Exam Year:<input type="text" name="txtexamyrs" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" name="btnexamyrs" class="btn btn-primary" value="Add Exam Year"></td>
                                    </tr>
                                    <tr>
                                        <td><?php include 'Includes/addexam.php';?></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Exam Details
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php
                                                include 'Includes/Conn.php';
                                                $sql="SELECT * FROM `examyear` ORDER BY id DESC";
                                                $result=$con->query($sql);
                                                if($result->num_rows>0)
                                                {
                                                    $no=0;
                                                    while($row=$result->fetch_assoc())
                                                    {
                                                        $no++;
                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $row['name'];?></td>
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
