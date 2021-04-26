<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>YashInfo Tech</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
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
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;YashInfoTech</a>
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
                        <a href="Addadmin.php"><i class="fa fa-user "></i>Add Admin</a>
                        <a href="teachers.php"><i class="fa fa-user"></i>Teachers</a>
                        <a href="activeusers.php"><i class="fa fa-table "></i>Active Users</a>
                        <a href="importdata.php"><i class="fa fa-qrcode"></i>Import Data</a>
                        
                    </li>
                    
                      <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Bills<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="receipt.php">Receipt</a>
                            </li>
                           
                            <li>
                                <a href="#">Reports<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="reports.php">Receipt Reports</a>
                                    </li>
                                    <li>
                                        <a href="feedbackdisplay.php">Feedback</a>
                                    </li>
                                    <!--<li>
                                        <a href="#">Third Level Link</a>
                                    </li>-->

                                </ul>

                            </li>
                        </ul>
                    </li>
                
                    <li>
                     <a href="assignment.php"><i class="fa fa-edit "></i>Assignment</a>
                    </li>
                     <li>
                     <a href="examtimetable.php"><i class="fa fa-edit "></i>Exam Time Table</a>
                    </li>
                     <li>
                     <a href="feesupdate.php"><i class="fa fa-edit "></i>Fees Update</a>
                    </li>
                    <li>
                     <a href="syllabus.php"><i class="fa fa-edit "></i>Syllabus</a>
                    </li>
                    <li>
                     <a href="courses.php"><i class="fa fa-edit "></i>Course Structure</a>
                    </li>
                   <li>
                     <a href="ebook.php"><i class="fa fa-edit "></i>E-Books</a>
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
                    </li>-->
                </ul>

            </div>

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
                <div>
                    <?php
                    include 'Conn.php';
                    $sql="select fees from studentdt where year='FYBCA'";
                    $result=$con->query($sql);
                    $row=$result->fetch_assoc();

                     $ssql="select fees from studentdt where year='SYBCA'";
                    $sresult=$con->query($ssql);
                    $srow=$result->fetch_assoc();


                     $tsql="select fees from studentdt where year='TYBCA'";
                    $tresult=$con->query($tsql);
                    $trow=$tresult->fetch_assoc();
                    ?>
                      <?php
                    include 'Conn.php';
                    $csql="select fees from mde where name='Convocation'";
                    $cresult=$con->query($csql);
                    $crow=$cresult->fetch_assoc();

                     $isql="select fees from mde where name='Internal'";
                    $iresult=$con->query($isql);
                    $irow=$iresult->fetch_assoc();


                     $esql="select fees from mde where name='External'";
                    $eresult=$con->query($esql);
                    $erow=$eresult->fetch_assoc();
                    ?>
                    
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>FYBCA:<input type="text" class="form-control" name="txtyaerf" id="txtcheqno" value="<?php echo $row['fees'];?>" placeholder="Fees" readonly></td>
                                 <td>SYBCA:<input type="text" class="form-control" name="txtyaerf" id="txtcheqno" value="<?php echo $srow['fees'];?>" placeholder="Fees" readonly></td>
                                  <td colspan="3">TYBCA:<input type="text" class="form-control" name="txtyaerf" id="txtcheqno" value="<?php echo $trow['fees'];?>"placeholder="Fees" readonly></td>
                            </tr>
                            <tr>
                                <td>Internal:<input type="text" class="form-control" name="txtyaerf" value="<?php echo $irow['fees'];?>" id="txtcheqno" placeholder="Fees" readonly></td>
                                 <td>External:<input type="text" class="form-control" name="txtyaerf" id="txtcheqno" placeholder="Fees" value="<?php echo $erow['fees'];?>" readonly></td>
                                  <td colspan="3">Convocation:<input type="text" class="form-control" name="txtyaerf" id="txtcheqno" value="<?php echo $crow['fees'];?>" placeholder="Fees" readonly></td>
                            </tr>
                            <tr>
                                <form action="feesupdate.php" method="post">
                            <td >Select Year:<select class="form-control" name="upyrs"  id ="payment" width="10px" required>
                                <option value="">Select Year</option>
                                <option value="FYBCA">FYBCA</option>
                                <option value="SYBCA">SYBCA</option>
                                <option value="TYBCA">TYBCA</option>
                                </select>

                            </td>
                            <td colspan="3">Fees:<input type="text" class="form-control" name="txtyaerf" id="txtcheqno" placeholder="Fees" required></td>
                            </tr>
                            <tr>
                                 
                            <td><input type = "submit" class="btn btn-danger"  value ="submit" name="yrsfees"></form></td>
                            
                            <?php
                                include 'Conn.php';
                                  if(isset($_POST['yrsfees']))
                        { 
                                $year=$_POST['upyrs'];
                                $fees=$_POST['txtyaerf'];
                                $sql = "UPDATE studentdt SET fees='$fees' WHERE year='$year'";

                                if ($con->query($sql) === TRUE) {
                                    echo "Record updated successfully";
                                } else {
                                    echo "Error updating record: " . $con->error;
                                }
                            }
                                
                                ?>
                        </tr>
                        <tr><form action="feesupdate.php" method="post">
                            <td >Select Remark:<select class="form-control" name="remarkmde"  id ="payment" width="10px"  required>
                                <option value="">Select Remark</option>
                                <option value="Internal">Internal</option>
                                <option value="External">External</option>
                                 <option value="Convocation">Convocation</option>
                                </select>

                            </td>
                            <td colspan="3">Fees:<input type="text" class="form-control" name="txtremarkf" id="txtcheqno" placeholder="Fees" required></td>
                        </tr>
                            <tr>
                                 
                            <td><input type = "submit" class="btn btn-danger"  value ="submit" name="mdefees"></td>
                        </form>
                        </tr>
                         <?php
                                include 'Conn.php';
                                  if(isset($_POST['mdefees']))
                        { 
                                $year=$_POST['remarkmde'];
                                $fees=$_POST['txtremarkf'];
                                $sql = "UPDATE mde SET fees='$fees' WHERE name='$year'";

                                if ($con->query($sql) === TRUE) {
                                    echo "Record updated successfully";
                                } else {
                                    echo "Error updating record: " . $con->error;
                                }
                            }
                                
                                ?>
                        </tbody>
                    </table>

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