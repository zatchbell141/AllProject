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
                            <h1 class="page-header">Enquiry</h1>
                        </div>
                                <div class="col-lg-12">
                                     <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Enquiry
                                        </div>
                                        <div class="panel-body">
                                            <form action="addenquiry.php" autocomplete="off" method="POST">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td>Name:<input type="text" name="txtname" class="form-control" pattern="[a-zA-Z]*" placeholder="Name"></td>
                                                    <td>Father name:<input type="text" name="txtfathername" class="form-control" pattern="[a-zA-Z]*" placeholder="Father name"></td>
                                                    <td>Lastname:<input type="text" name="txtlastname" class="form-control" pattern="[a-zA-Z]*" placeholder="Lastname"></td>
                                                    <td>Percentage:<input type="text" name="txtpercentage" class="form-control" required placeholder="Percentage"></td>
                                                </tr>
                                                <tr>
                                                <td>College:<input type="text" class="form-control" name="txtcollege" placeholder="College" pattern="[a-zA-Z]*"></td>
                                                <td>Stream:<input type="text" class="form-control" name="txtstream" placeholder="Stream" pattern="[a-zA-Z]*"></td>
                                                <td>Reference:<input type="text" class="form-control" name="txtemail" placeholder="Reference" pattern="[a-zA-Z]*"></td>
                                                <td>Contact No:<input type="text" class="form-control" name="txtcontact" placeholder="Contact No" pattern="[7-9]{1}[0-9]{9}"></td>
                                         </tr>
                                        <tr>
                                            <td colspan="4">Address:<input type="text" class="form-control" name="txtaddress" placeholder="Address">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"><input type="submit" name="btnsubmit" class="btn btn-primary"></td>
                                            </form> 
                                        </tr>
                                        <tr>
                                             <td colspan="4"><?php include 'Includes/addenquiry.php';?></td>
                                        </tr>
                                            </table>
                                        </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Enquiry Details
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                             <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Sr.No</th>
                                                        <th>Name</th>
                                                        <th>Address</th>
                                                        <th>College</th>
                                                        <th>Stream</th>
                                                        <th>Contact</th>
                                                        <th>Percentage</th>
                                                        <th>Reference</th>
                                                        <th>Status</th>
                                                        <th>Date</th>
                                                        <th>Admitted</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php
                                                    include 'Includes/Conn.php';
                                                    $sql="select * from enquiry  ORDER BY id DESC";
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
                                                                <td><?php echo $row['Address'];?></td>
                                                                <td><?php echo $row['college'];?></td>
                                                                <td><?php echo $row['Stream'];?></td>
                                                                <td><?php echo $row['phno'];?></td>
                                                                
                                                                <td><?php echo $row['per'];?></td>
                                                                <td><?php echo $row['reference'];?></td>
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
                                                                <td><?php echo $row['date'];?></td>
                                                                <td><button class="btn btn-danger"  onClick="location.href = 'admitedenq.php?varname=<?php echo $row['id'];?>';">Admit</button></td>
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
