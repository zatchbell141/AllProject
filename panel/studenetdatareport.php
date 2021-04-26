<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>&nbsp;Yash&nbsp;Infotech</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
       <link href="assets/css/scorllbar.css" rel="stylesheet" />
       <link href="assets/css/cont.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php
 include "session.php";
 ?>
<div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;Yash&nbsp;Infotech</a>
                </div>
                <!--<div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                       
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>-->
				
            </div>
			
        </div>
		<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="assets/img/find_user.png" class="img-responsive" />
                     
                    </li>


                     <li>
                        <a href="index.php"><i class="fa fa-desktop "></i>Dashboard</a>
                       
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-user"></i>Staff<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addtechers.php">Add Teachers</a>
                            </li>
                           <li>
                                 <a href="schedules.php">Schedules</a>
                            </li>
                             <li>
                                <a href="attendence.php">Attendence</a>
                            </li>
                           <li>
                                <a href="staffreports.php">Techers Reports</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-qrcode"></i>Student Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addstudents.php">Add Students</a>
                            </li>
                           <li>
                                <a href="importstudent.php">Import Data</a>
                            </li>
                           <li>
                                <a href="studenetdatareport.php">Students Reports</a>
                            </li>
                        </ul>
                    </li>
                      <li>
                        <a href="#"><i class="fa fa-user "></i>Enquiry<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="receipt.php">Add Enquiry</a>
                            </li>
                           <li>
                                <a href="receipt.php">Follow Up</a>
                            </li>
                           <li>
                                <a href="receipt.php">Enquiry Reports</a>
                            </li>
                        </ul>
                    </li>
                      <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Receipt<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="receipt.php">Receipt</a>
                            </li>
                           <li>
                                <a href="receipt.php">Backlog</a>
                            </li>
                           <li>
                                <a href="receipt.php">Convocation</a>
                            </li>
                        </ul>
                    </li>
                       <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Subject<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="receipt.php">Add Subjects</a>
                            </li>
                           <li>
                                <a href="receipt.php">Update Subject</a>
                            </li>
                           <li>
                                 <a href="receipt.php">Subject Reports</a>
                            </li>
                        </ul>
                    </li>
                   <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Reports<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                             <li>
                               <a href="receipt.php">All Reports</a>
                            </li>
                            <li>
                               <a href="receipt.php">Techers Reports</a>
                            </li>
                           <li>
                                 <a href="receipt.php">Subject Reports</a>
                            </li>
                           <li>
                                <a href="receipt.php">Enquiry Reports</a>
                            </li>
                            <li>
                               <a href="receipt.php">Receipt Reports</a>
                            </li>
                           <li>
                                 <a href="receipt.php">Backlog Reports</a>
                            </li>
                           <li>
                                <a href="receipt.php">Convocation Reports</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                     <a href="studentq.php"><i class="fa fa-edit "></i>Student Query</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-edit "></i>Logout</a>
                    </li>
                   <!-- <li>
                        <a href="#"><i class="fa fa-edit "></i>UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Notifications</a>
                            </li>
                            <li>
                                <a href="#">Elements</a>
                            </li>
                            <li>
                                <a href="#">Free Link</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-table "></i>Table Examples</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Forms </a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-qrcode "></i>Tabs & Panels</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>Mettis Charts</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Last Link </a>
                    </li>
                    <li>
                        <a href="blank.html"><i class="fa fa-table "></i>Blank Page</a>
                    </li>
                </ul>

            </div>-->
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo $_SESSION['login_user']?></h2>
                    </div>
                </div>
                <!-- /. ROW  -->
				 
            <hr />
           <div class="container box">
             <h5>Students Data</h5>
                        <ul class="nav nav-tabs">
                             </li>
                                  <li class="active"><a href="#attendence" data-toggle="tab">Attendence</a>
                            </li>
                            <li ><a href="#home" data-toggle="tab">FYBCA</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">SYBCA</a>
                            </li>
                            <li class=""><a href="#messages" data-toggle="tab">TYBCA</a>
                           

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade " id="home">
                                <br>
                                <h4>FYBCA</h4>
                               <div class="ex3">
                             <table class="table">
            <tr>
              <th>StudentId</td>
                <th>Course Code</td>
                <th>Course Name</td>
                <th>Fullname</td>
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
                <th>Delete</td>
                
            </tr>
            <tr>
              <?php
                                    include 'Conn.php';
                                    $sql="select * from studentdt where coursename='Bachelor of Computer Applications-E-First Year'";
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
                                             <td><?php echo $row['fullname'];?></td>
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
                                            <td><a href="addstd.php?varname=<?php echo $row['studentid'];?>">Update to SYBCA</a></td>
                                            <td><a href="delstudent.php?varname=<?php echo $row['studentid'];?>">Delete</a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>      
            </tr>
          </table>
                            </div>
                        </div>
                            <div class="tab-pane fade" id="profile">
                                <br>
                                <h4>SYBCA</h4>
                                <div class="ex3">
                                    <table class="table">
            <tr>
              <th>StudentId</td>
                <th>Course Code</td>
                <th>Course Name</td>
                     <th>Fullname</td>
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
                <th>Delete</td>
                
            </tr>
<tr>
    <?php
                                    include 'Conn.php';
                                    $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- Second Year'";
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
                                              <td><?php echo $row['fullname'];?></td>
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
                                            <td><a href="delstudent.php?varname=<?php echo $row['studentid'];?>">Delete</a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>      
</tr>
</table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="messages">
                                <br>
                                <h4>TYBCA</h4>
                               <div class="ex3">
                                    <table class="table">
                                         <tr>
              <th>StudentId</td>
                <th>Course Code</td>
                <th>Course Name</td>
                     <th>Fullname</td>
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
                <th>Delete</td>
                
            </tr>
<tr>
    <?php
                                    include 'Conn.php';
                                    $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- Third Year'";
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
                                              <td><?php echo $row['fullname'];?></td>
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
                                            <td><a href="delstudent.php?varname=<?php echo $row['studentid'];?>">Delete</a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>      
</tr>
                                    </table>
                                </div>
                            </div>
                                 <div class="tab-pane fade active in" id="attendence">
                                    <br>
                                <h4>Attendence Sheet Print</h4>
                                <form action="print.php" method="post">
                               <table class="table">
                                <tr>
                                    <th>FYBCA</th>
                                </tr>
                                <tr>
                                   <td colspan="2">
                                        Date:<input type="text" class="form-control"  name="lbdate" value="<?php echo date("d-m-Y");?>" readonly>                                           
                                    </td>
                                     <td >
                                        End Date:<input type="date" class="form-control"  name="lbenddate">                                           
                                    </td>
                                </tr>
                                <tr>
                                     <td><input type = "submit" class="btn btn-danger"  value ="submit" name="txtdateend"></td>
                                 </form>
                                </tr>
                               </table>
                               <form action="sybcaattprint.php" method="post">
                               <table class="table">
                                <tr>
                                    <th>SYBCA</th>
                                </tr>
                                <tr>
                                   <td colspan="2">
                                        Date:<input type="text" class="form-control"  name="lbdate" value="<?php echo date("d-m-Y");?>" readonly>                                           
                                    </td>
                                     <td >
                                        End Date:<input type="date" class="form-control"  name="lbenddate">                                           
                                    </td>
                                </tr>
                                <tr>
                                     <td><input type = "submit" class="btn btn-danger"  value ="submit" name="txtdateend"></td>
                                 </form>
                                </tr>
                               </table>
                            
                                <form action="tybcaattprint.php" method="post">
                               <table class="table">
                                <tr>
                                    <th>TYBCA</th>
                                </tr>
                                <tr>
                                   <td colspan="2">
                                        Date:<input type="text" class="form-control"  name="lbdate" value="<?php echo date("d-m-Y");?>" readonly>                                           
                                    </td>
                                     <td >
                                        End Date:<input type="date" class="form-control"  name="lbenddate">                                           
                                    </td>
                                </tr>
                                <tr>
                                     <td><input type = "submit" class="btn btn-danger"  value ="submit" name="txtdateend"></td>
                                 </form>
                                </tr>
                               </table>
                            </div>

                        </div>
           </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>