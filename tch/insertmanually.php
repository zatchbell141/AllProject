<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'Includes/header.php';?>
</head>

<body>

   <?php include 'Includes/loader.php';?>

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="images/logo1.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo1.png" alt=""></span>
                    <span class="brand-title">
                       <!--  <img src="images/logo-text.png" alt=""> --><b style="color: white">YASH INFOTECH</b>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
       <?php include 'Includes/topmenu.php';?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       <?php include 'Includes/menu.php';?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <!-- Topbar -->
            <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Insert Manully</a></li>
                    </ol>
                </div>
            </div>
         
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Insert Manully</h4>
                  <form  action="insertmanually.php" method="post" autocomplete="off">
               <table class="table table-striped table-bordered">
                <tr>
                  <td>Name:<input type="text" class="form-control" name="txtstudname" placeholder="Name" pattern="[A-Za-z]*" title="Please enter a characters" required></td>
                  <td>Lastname:<input type="text" class="form-control" name="txtstudlast" placeholder="Lastname" pattern="[A-Za-z]*" title="Please enter a characters" required></td>
                  <td>Fathername:<input type="text" class="form-control" name="txtstudfather" placeholder="Fathername" pattern="[A-Za-z]*" title="Please enter a characters" required></td>
                  <td>Mothername:<input type="text" class="form-control" name="txtstudmother" placeholder="Mothername" pattern="[A-Za-z]*" title="Please enter a characters" required></td>
                </tr>
                <tr>
                  <td>Course Code:<input type="text" class="form-control" name="txtstudcode" placeholder="Course Code" value="044" readonly></td>
                  <td>Course<select name="txtstudcoursename" class="form-control"  required>
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
                    <td>Status:<select name="txtstudstatus" class="form-control" required>
                  <option value="Married">Married</option>
                  <option value="Unmarried">Unmarried</option>
                  </select></td>
                  <td>Local Address:<input type="text" class="form-control" name="txtstudlocaladd" placeholder="Local Address" required></td>
                  <td>Permant Address:<input type="text" class="form-control" name="txtstudperment" placeholder="Permant Address" required></td>
                  <td>State:<input type="text" class="form-control" name="txtstudstate" placeholder="State" required></td>
                  
                </tr>
                <tr>
                  <td>Pin Code:<input type="text" class="form-control" name="txtstudpin" placeholder="Pin Code" required></td>
                  <td>Caste:<input type="text" class="form-control" name="txtstudcaste" placeholder="Caste" required></td>
                  <td>Contact No:<input type="text" class="form-control" name="txtstudcontact" placeholder="Contact No" pattern="[789][0-9]{9}" title="Please Enter 10 digit..!"  required></td>
                  <td>Email:<input type="text"class="form-control"  name="txtstudemail" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter in correct format..!!" required></td>
                </tr>
                <tr>
                  <td>PRN:<input type="text" class="form-control" name="txtstudprn" placeholder="PRN" required></td>
                  <td>TRN:<input type="text" class="form-control" name="txtstudtrn" placeholder="TRN" required></td>
                  <td>Qulification:<input type="text" class="form-control" name="txtstudquli" placeholder="Qualification" pattern="[A-Za-z]*" title="Please enter a characters" required></td>
                  <td>Medium:<input type="text" class="form-control" name="txtstudmedium" placeholder="Medium" pattern="[A-Za-z]*" title="Please enter a characters" required></td>
                </tr>
                <tr>
                    <td colspan="4">Student Photos:<input type="file" name="txtphoto" class="form-control"></td>
                </tr>
                <tr>
                  <td>Admission Status:<input type="text" class="form-control" name="txtstudadmission" placeholder="Admission Status" value="In Process" readonly></td>
                  <td>Aadhar Card No:<input type="text" class="form-control" name="txtstudaadhar" placeholder="Aadhar Card No" pattern="\d{12}" title="Enter  12 digit aadhar card No" required></td>
                  <td>Center Form No:<input type="text" class="form-control" name="txtcenterno" placeholder="Center Form No" value="231" readonly></td>
                  <td>Admission Year:<input type="text" class="form-control" name="txtadmissionyrs" placeholder="Admission Year"  required></td>
                  </form>
                </tr>
                <tr>
                    <td colspan="4"><input type="submit" name="btnsubmit" class="btn btn-primary" value="Add Students"></td>
                </tr>
                
                
                <tr>
                   <td colspan="4"><?php include 'Includes/addstudentdata.php';?></td>
                </tr>
              </table>
                </div>
              </div>
            </div>
           </div>
        </div>
              <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Student Details</h4>
                                <div class="table-responsive">
                         <table class="table table-striped table-bordered zero-configuration table-hover">
                                <thead>
                                    <tr>
                                    <th>Student Photos</td>
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
                                             $admid=$row['admissionyrs'];
                                             $bcasql="select * from admissionyrs where id='$admid'";
                                             $bcaresult=$con->query($bcasql);
                                             $bcarow=$bcaresult->fetch_assoc();
                                            ?>
                                            <tr class="table-success">
                                            <td>&nbsp;</td>
                                            <td><?php echo $row['studentid'];?></td>
                                            <td><?php echo $row['coursecode'];?></td>
                                            <td><?php echo $row['coursename'];?></td>
                                             <td><?php echo $bcarow['name'];?></td>
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
                                            <td><a class="btn btn-outline-warning" href="editstudentrecord.php?varname=<?php echo $row['studentid'];?>">Edit</a></td>
                                             <td><button class="btn btn-outline-danger"  onClick="deleteme(<?php echo $row['studentid']; ?>)">Delete</button>
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
                  </div>
              </div>
 <!---Container Fluid-->
       <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by AV(Yash Infotech)</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
     </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
<?php include 'Includes/script.php';?>

</body>

</html>