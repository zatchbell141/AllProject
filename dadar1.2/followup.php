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
                            <h1 class="page-header">Follow Up</h1>
                        </div>

                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Follow Up
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                         <form action="followup.php" method="post" autocomplete="off">
                                              <table class="table table-striped">
                                                <tr>
                                                  <td>Student Name:<input type="text" name="txtserch" class="form-control" list="studentid" placeholder="ID" required></td>
                                                  <datalist id="studentid">
                                                      <?php
                                                                include 'Includes/Conn.php';
                                                                 $query1="select * from enquiry order by id desc";
                                                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                                                 foreach($gradenameresult as $grd)
                                                                 {
                                                                      
                                                                 ?>
                                                                 <option value="<?php echo $grd['name'];?>"><?php echo $grd['name'];?></option>
                                                                 <?php
                                                                 }
                                                                 ?>
                                                    </datalist>
                                                </tr>
                                                <tr>
                                                  <td><button class="btn btn-primary" name="btnserch">Search</button></td>
                                                   </form>
                                                </tr>
                                              </table>
                                                              
                                                             <?php
                                                                if(isset($_POST['btnserch']))
                                                                {
                                                                                           include 'Includes/Conn.php';
                                                                                           $id=$_POST['txtserch'];
                                                                                           $ssql="select * from enquiry where name='$id'";
                                                                                           $sresult=$con->query($ssql);
                                                                                           $srow=$sresult->fetch_assoc();
                                                                                      
                                                                }
                                                                
                                                              ?>
                                        </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Student Details</h3>
                                </div>
                              <div class="panel-body">
                                <form action="followup.php" method="post" autocomplete="off">
                                 <table class="table table-striped">
                                    <tr>
                                      <td colspan="3">Student ID:<input type="text" name="txtstudentid" class="form-control" readonly value="<?php echo $srow['id']?>"readonly></td>
                                    </tr>
                                    <tr>
                                      <th colspan="3">Date:<input type="text" name="txtdate" class="form-control" value="<?php echo date('d-m-Y');?>"readonly></th>
                                    </tr>
                                    <tr>
                                       <td>Fullname:<input type="text" name="txtfullname" class="form-control" value="<?php echo $srow['name'];?>" placeholder="Fullname" readonly></td>
                                        <td>Reasons:<select name="txtresn" class="form-control" required>
                                          <option value=" ">Select Reasons</option>
                                          <option value="Answered">Answered</option>
                                          <option value="Not Picking">Not Picking</option>
                                          <option value="Not Reachable">Not Reachable</option>
                                          <option value="Not Answering">Not Answering</option>
                                          <option value="Other">Other</option>
                                          </select></td>
                                   
                                      <td>Description:<input type="text" name="txtdescrip" class="form-control" placeholder="Description"></td>
                                    </tr>
                                    <tr>
                                      <!--<td colspan="1">Staff Name:<input type="text" class="form-control" name="txtsaff" value="<?php echo $staff;?>" readonly></td>-->
                                      <td colspan="3">Contact No:<input type="text" class="form-control" name="txtcontact" value="<?php echo $srow['phno'];?>" readonly></td>
                                    </tr>
                                    <tr>
                                      <td colspan="3"><input type="submit" name="btnsubmit" class="btn btn-primary" value="Add Followup"></td>
                                      </form>
                                    </tr>
                                     <tr>
                                        <td colspan="3"><?php include 'Includes/addfollowup.php';?></td>
                                      </tr>
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
