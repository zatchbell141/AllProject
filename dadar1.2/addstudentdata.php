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
                            <h1 class="page-header">Add Student</h1>
                        </div>
                        <div class="col-lg-12">
                            <form action="addstudentdata.php" method="POST" autocomplete="off">
                                <table class="table table-striped">
                                    <tr>
                                      <td>Name:<input type="text" class="form-control" name="txtstudname" placeholder="Name" required></td>
                                      <td>Lastname:<input type="text" class="form-control" name="txtstudlast" placeholder="Lastname" required></td>
                                      <td>Fathername:<input type="text" class="form-control" name="txtstudfather" placeholder="Fathername" required></td>
                                      <td>Mothername:<input type="text" class="form-control" name="txtstudmother" placeholder="Mothername" required></td>
                                    </tr>
                                    <tr>
                                      <td>Course Code:<input type="text" class="form-control" name="txtstudcode" placeholder="Course Code" value="044" readonly></td>
                                      <td>Course:<select name="txtstudcoursename" class="form-control"  required>
                                      <option value="Bachelor of Computer Applications-E-First Year">Bachelor of Computer Applications-E-First Year</option>
                                      <option value="Bachelor of Computer Applications- R- Second Year">Bachelor of Computer Applications- R- Second Year</option>
                                      <option value="Bachelor of Computer Applications- R- Third Year">Bachelor of Computer Applications- R- Third Year</option>
                                      </select></td>
                                      <td>Date of Birth:<input type="date" class="form-control" name="txtstuddob" placeholder="Date of Birth" required></td>
                                      <td>Gender:<select name="txtstudgender"  class="form-control" required>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                      </select></td>
                                    </tr>
                                    <tr>
                                         <td>Married status:<select name="txtstudstatus" class="form-control" required>
                                      <option value="Married">Married</option>
                                      <option value="Unmarried">Unmarried</option>
                                      </select></td>
                                      <td>Local Address<input type="text" class="form-control" name="txtstudlocaladd" placeholder="Local Address" required></td>
                                      <td>Permant Address<input type="text" class="form-control" name="txtstudperment" placeholder="Permant Address" required></td>
                                      <td>States:<input type="text" class="form-control" name="txtstudstate" placeholder="State" required></td>
                                      
                </tr>
                <tr>
                  <td>Pin Code:<input type="text" class="form-control" name="txtstudpin" placeholder="Pin Code" required></td>
                  <td>Caste:<input type="text" class="form-control" name="txtstudcaste" placeholder="Caste" required></td>
                  <td>Contact No:<input type="text" class="form-control" name="txtstudcontact" placeholder="Contact No" required></td>
                  <td>Email:<input type="text"class="form-control"  name="txtstudemail" placeholder="Email" required></td>
                </tr>
                <tr>
                  <td>PRN:<input type="text" class="form-control" name="txtstudprn" placeholder="PRN" required></td>
                  <td>TRN:<input type="text" class="form-control" name="txtstudtrn" placeholder="TRN" required></td>
                  <td>Qualification:<input type="text" class="form-control" name="txtstudquli" placeholder="Qualification" required></td>
                  <td>Medium:<input type="text" class="form-control" name="txtstudmedium" placeholder="Medium" required></td>
                </tr>
                <tr>
                  <td>Admission Status:<input type="text" class="form-control" name="txtstudadmission" placeholder="Admission Status" value="In Process" readonly></td>
                  <td>Aadhar Card:<input type="text" class="form-control" name="txtstudaadhar" placeholder="Aadhar Card" required></td>
                  <td colspan="2">Center Code:<input type="text" class="form-control" name="txtcenterno" placeholder="Center Form No" value="231" readonly></td>
                  
                  </form>
                </tr>
                <tr>
                    <td colspan="4"><input type="submit" name="btnaddstudent" class="btn btn-primary" value="Add Students"></td>
                </tr>
                <tr>
                    <td colspan="4"><?php include 'Includes/addstudentdatas.php';?></td>
                </tr>
                                </table>
                            </form>
                        </div>

                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Students Details
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>StudentId</td>
                                                    <th>Course Code</td>
                                                    <th>Course Name</td>
                                                    <th>Admission Years</td>
                                                    <th>Lastname</td>
                                                    <th>Firstname</td>
                                                    <th>Fathername</td>
                                                    <th>Mothername</td>
                                                    <th>Date of Birth</td>
                                                    <th>Gender</td>
                                                     <th>Status Married</td>
                                                    <th>LocalAddress</td>
                                                    <th>PermantAddress</td>
                                                    <th>Caste</td>
                                                    <th>State</td>
                                                    <th>Pincode</td>
                                                    <th>Contact</td>
                                                    <th>Email</td>
                                                    <th>PRN</td>
                                                    <th>TRN</td>
                                                    <th>Qualification</td>
                                                    <th>Medium</td>
                                                    <th>Admission Status</td>
                                                    <th>Aadhar</td>
                                                    <th>Edit</td>
                                                    <th>Delete</td>
                                                </tr>
                                            </thead>
                                             <tbody>
                                     <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from studentdt where active=1 ORDER BY studentid DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['studentid'];?></td>
                                            <td><?php echo $row['coursecode'];?></td>
                                            <td><?php echo $row['coursename'];?></td>
                                             <td><?php echo $row['admissionyrs'];?></td>
                                            <td><?php echo $row['lastname'];?></td>
                                            <td><?php echo $row['firstname'];?></td>
                                            <td><?php echo $row['fathername'];?></td>
                                            <td><?php echo $row['mothername'];?></td>
                                            <td><?php echo $row['dob'];?></td>
                                            <td><?php echo $row['gender'];?></td>

                                            <td><?php echo $row['statusm'];?></td>
                                            <td><?php echo $row['localaddress'];?></td>
                                            <td><?php echo $row['permaddress'];?></td>
                                            <td><?php echo $row['caste'];?></td>
                                            <td><?php echo $row['state'];?></td>
                                            <td><?php echo $row['pincode'];?></td>
                                            <td><?php echo $row['mob'];?></td>
                                            <td><?php echo $row['email'];?></td>

                                            <td><?php echo $row['prn'];?></td>
                                            <td><?php echo $row['trn'];?></td>
                                            <td><?php echo $row['qualification'];?></td>
                                            <td><?php echo $row['medium'];?></td>
                                            <td><?php echo $row['admissionstatus'];?></td>
                                            <td><?php echo $row['aadhar'];?></td>
                                            <td><a href="editstudentrecord.php?varname=<?php echo $row['studentid'];?>">Edit</a></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="deleteme(<?php echo $row['studentid']; ?>)">Delete</button>
                                             </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Are You Sure you want to delete:"+" "+delid)){
                                             window.location.href='delstudent.php?varname=' +delid+'';
                                             return true;
                                             }
                                             } 
                                             </script>
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
