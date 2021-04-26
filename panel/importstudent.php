<?php
include "session.php";
include 'Conn.php';
$msg="";
$output = '';
if(isset($_POST["import"]))
{
   $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {

    $output .= "<tr>";
    $coursecode = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $coursename = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $lastname = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $firstname = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(3, $row)->getValue());
    $fathername = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(4, $row)->getValue());
    $mothername = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
    $dob = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(6, $row)->getValue());
    $dob=strtotime($dob);
    $dob=date('d/m/Y',$dob);
    $gender = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
    $statusm = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
    $localaddress = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(9, $row)->getValue());
    $permaddress = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
    $caste = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(11, $row)->getValue());
    $state = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(12, $row)->getValue());
    $pincode = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(13, $row)->getValue());
    $mob = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(14, $row)->getValue());
    $email = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(15, $row)->getValue());
    $prn = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(16, $row)->getValue());
    $trn = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(17, $row)->getValue());
    $qualification = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(18, $row)->getValue());
    $medium = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(19, $row)->getValue());
    $admissionstatus = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(20 ,$row)->getValue());
    $aadhar = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(21 ,$row)->getValue());
    $mode="program learning";
    $fullname=$lastname." ".$firstname." ".$fathername;
   $query = "INSERT INTO studentdt(fullname,coursecode,coursename,lastname,firstname,fathername,mothername,dob,gender,statusm,localaddress,permaddress,
    caste,state,pincode,mob,email,prn,trn,qualification,medium,admissionstatus,aadhar)
    VALUES ('$fullname','$coursecode','$coursename','$lastname','$firstname','$fathername','$mothername','$dob','$gender','$statusm','$localaddress',
      '$permaddress','$caste','$state','$pincode','$mob','$email','$prn','$trn','$qualification','$medium','$admissionstatus','$aadhar')";
   mysqli_query($con, $query);
    $output .= '<td>'.$coursecode.'</td>';
    $output .= '<td>'.$coursename.'</td>';
    $output .= '<td>'.$lastname.'</td>';
    $output .= '<td>'.$firstname.'</td>';
    $output .= '<td>'.$mothername.'</td>';

    $output .= '<td>'.$dob.'</td>';
    $output .= '<td>'.$gender.'</td>';
    $output .= '<td>'.$statusm.'</td>';
    $output .= '<td>'.$localaddress.'</td>';
    $output .= '<td>'.$permaddress.'</td>';

    $output .= '<td>'.$caste.'</td>';
    $output .= '<td>'.$state.'</td>';
    $output .= '<td>'.$statusm.'</td>';
    $output .= '<td>'.$pincode.'</td>';
    $output .= '<td>'.$mob.'</td>';

    $output .= '<td>'.$email.'</td>';
    $output .= '<td>'.$prn.'</td>';
    $output .= '<td>'.$trn.'</td>';
    $output .= '<td>'.$qualification.'</td>';
    $output .= '<td>'.$medium.'</td>';
    $output .= '<td>'.$aadhar.'</td>';
    $output .= '</tr>';
   }
  } 
  $output .= '</table>';
 }
else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }

?>
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
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

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
        </li>
    </ul>
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
          <h5>Import Data In Student Database</h5>
        
   <form method="post" enctype="multipart/form-data">
    <label>Select Excel File</label>
    <input type="file" name="excel" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" />
    <input type="submit" name="import" class="btn btn-info" value="Import" />
   </form>
   <br />
   <br />
   <div class="ex3">
   <?php
   echo $output;
   ?>
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