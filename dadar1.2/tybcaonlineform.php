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
                            <h1 class="page-header">TYBCA Online Form Details</h1>
                        </div>

                        <div class="col-lg-12">

                             <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title">TYBCA Gap Online Form Details</h3>
                                </div>
                                <div class="panel-body">
                                     <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                              <tr>
                                                 <th>Sr.No</th>
                                                 <th>Student Photos</th>
                                                 <th>Fullname</th>
                                                 <th colspan="5" style="Text-Align:center">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                 <?php
                                    include 'Includes/Conn.php';
                                    $sql="select distinct a1.id,a1.stdphoto,a1.fullname from addonline a1,receipt r1 where a1.admyrs='2020-2021 Year' and a1.fullname=r1.fullname and a1.course='Bachelor of Computer Applications- R- Third Year' and a1.active='1' and r1.year='TYBCA' order by a1.id desc";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            ?>
                                            <td><?php echo $no;?></td>
                                            <td><img src="https://stdm.bcaedu.in/BCAForm/<?php echo $row['stdphoto'];?>" height="200"  width="150"></td>
                                            <td><?php echo $row['fullname'];?></td>
                                             <!--<td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'editstudt.php?varname=<?php echo $row['id'];?>';">Edit</button></td>-->
                                             <td><button class="btn btn-info"  onClick="location.href = 'viewstudentdata.php?varname=<?php echo $row['id'];?>';">View</button></td>
                                             <td><button class="btn btn-danger"   onClick="deleteme(<?php echo $row['id']; ?>)">Delete</button></td>
                                             <td><button class="btn btn-danger"  onClick="location.href = 'canceladmission.php?varname=<?php echo $row['id'];?>';">Admission Cancelled</button></td>
                                             <td><button class="btn btn-success"  onClick="location.href = 'admit.php?varname=<?php echo $row['id'];?>';">Admit</button></td>
                                             <td><button class="btn btn-primary"  onClick="location.href = 'sndsmsadm.php?varname=<?php echo $row['id'];?>';">Send SMS Completed Admission Process</button></td>
                                             </tr>
                                            <?php
                                        }
                                    }
                                            ?>
                                            </tr>
                                            </tbody>
                                       </table>
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
