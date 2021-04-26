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
    $prn = mysqli_real_escape_string($con, "0".$worksheet->getCellByColumnAndRow(5, $row)->getValue());
    $name = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $course = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
    $sem = mysqli_real_escape_string($con, $_POST['sem']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $fees = mysqli_real_escape_string($con, $_POST['fees']);
    $trn = mysqli_real_escape_string($con,"0".$worksheet->getCellByColumnAndRow(4, $row)->getValue());
    $centername = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $mode="program learning";
   $query = "INSERT INTO studentdt(prn,name,sem,year,centern,trn,fees,course,mode) VALUES ('$prn','$name','$sem','$year','$centername','$trn','$fees','$course','$mode')";
   mysqli_query($con, $query);
    $output .= '<td>'.$prn.'</td>';
    $output .= '<td>'.$name.'</td>';


    $output .= '<td>'.$course.'</td>';
    $output .= '<td>'.$centername.'</td>';
    $output .= '<td>'.$trn.'</td>';
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



  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:700px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
   margin-top:100px;
  }
  
  </style>
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
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;YashInfoTech</a>
                </div>
                <!--<div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                       
                        <li><a href="index3.php">Logout</a></li>
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
                     <a href="Subject.php"><i class="fa fa-edit "></i>Subject</a>
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
                        <h2><?php echo $_SESSION['login_user']?> </h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                 
            <hr />
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
       width: 1002px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
  margin-top: 17px;
  height: 1000px;
  }
  .ex3 {
    background-color: white;
     width: 972px;

    height: 400px;
    overflow: auto;
}
  </style>
 </head>
 <body>
  <div class="container box">
     <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Excel to Database</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">Insert Mannually</a>
                            </li>
                            <li class=""><a href="#messages" data-toggle="tab">Delete & Update</a>
                            </li>
                             <li class=""><a href="result.php">Result</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="home">
   <h3 align="center">Import Excel to Database</h3><br />
   <form method="post" enctype="multipart/form-data">
    <label>Select Excel File</label>
    <input type="file" name="excel" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" />
    <br />
    Year:<select class="form-control" name="year" id="year" width="10px">
                                <option value="">Select Year</option>
                                <option value="FYBCA">FYBCA</option>
                                <option value="SYBCA">SYBCA</option>
                                 <option value="TYBCA">TYBCA</option>
                                </select><br/> 
    Sem:<select class="form-control" name="sem" id="sem" width="10px">
                                <option value="">Select Sem</option>
                                <option value="I & II">I & II</option>
                               
                                <option value="III & IV">III & IV</option>
                               
                                <option value="V & VI">V & VI</option>
                               
                                </select><br/>
    Fees:<input type="text" class="form-control" name="fees" required>
    <input type="submit" name="import" class="btn btn-info" value="Import" />
   </form>
   <br />
   <br />
   <?php
   echo $output;
   ?>
  </div>
  <div class="tab-pane fade" id="profile">
    <h5>Insert Mannually</h5>
     <table class="table">
                                 <form action="importdata.php" method="post">
                                <tbody>
                                    <tr>
                                        <td>PRN:<input type="text" class="form-control" name="txtprn" required></td>
                                        <td>TRN:<input type="text" class="form-control" name="txttrn" required></td>
                                        <td>Name:<input type="text" class="form-control" name="txtfname" required></td>
                                        <td>Year:<select class="form-control" name="year"  width="10px">
                                <option value="">Select Year</option>
                                <option value="FYBCA">FYBCA</option>
                                <option value="SYBCA">SYBCA</option>
                                 <option value="TYBCA">TYBCA</option>
                                </select></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Sem:<select class="form-control" name="sem"  width="10px">
                                <option value="">Select Sem</option>
                                <option value="I & II">I & II</option>
                               
                                <option value="III & IV">III & IV</option>
                               
                                <option value="V & VI">V & VI</option>
                               
                                </select></td>
                                        <td colspan="2">Fees:<input type="text" class="form-control" name="txtfpaid" required></td>
                                       
                                    </tr>
                                    <tr>
                                      <td colspan="2">Courses:<select class="form-control" name="course"  width="10px">
                                <option value="">Select Course</option>
                                <option value="BCA">BCA</option>
                                <option value="BBA">BBA</option>
                                </select></td>
                                <td colspan="2">Center Name:<select class="form-control" name="centern"  width="10px">
                                <option value="">Select Year</option>
                                <option value="Yash Infotech (Mazgaon)">Yash Infotech (Mazgaon)</option>
                                <!--<option value="SYBCA">SYBCA</option>
                                 <option value="TYBCA">TYBCA</option>-->
                                </select></td>
                                    </tr>
                                   
                                     <tr>
                                        <td colspan="5">Mode:<select class="form-control" name="mode"  width="10px">
                                <option value="">Select mode</option>
                                <option value="program learning">Program Learning</option>
                                <option value="other">Others</option>
                                </select></td>
                              </tr>
                               <tr>
                                        <td colspan="4"> <input type = "submit" class="btn btn-danger"  value ="submit" name="msubmit"></td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <?php
                                        if($msg==1)
                                        {
                                          echo "Added successfull..!!";
                                        }
                                        elseif($msg==0)
                                        {
                                          echo "Fail to added..!!";
                                        }
                                        else
                                        {
                                          echo "  ";
                                        }
                                        ?>
                                      </td>
                                    </tr>
                                </tbody>
                            </table>
                          </form>
                            <?php
                             
                             include 'Conn.php';
                              
                             if(isset($_POST['msubmit']))
                              {
                                   $name=$_POST['txtfname'];
                                   $prn=$_POST['txtprn'];
                                   $year=$_POST['year'];
                                   $sem=$_POST['sem'];
                                   $fees=$_POST['txtfpaid'];
                                   $trn=$_POST['txttrn'];
                                   $centername=$_POST['centern'];
                                   $course=$_POST['course'];
                                   $modes=$_POST['mode'];
                                   $query="INSERT INTO studentdt(prn,name,sem,year,centern,trn,fees,course,mode) VALUES ('$prn','$name','$sem','$year','$centername','$trn','$fees','$course','$modes')";
                                    mysqli_query($con,$query); 
                                    $msg=1;

                              }
                              else
                              {
                                $msg=0;
                              }


                            ?>


                             <div class="ex3">
        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>PRN</th>
                                         <th>Name</th>
                                        <th>Sem</th>
                                         <th>Year</th>
                                         <th>Center Number</th>
                                         <th>TRN</th>
                                         <th>Fees</th>
                                        <th>Course</th>
                                        <th>Mode</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    include 'Conn.php';
                                    
                                   $sql="select * from studentdt ORDER BY id DESC";
                                    $result=$con->query($sql);
                                   
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                          
                                            <td><?php echo $row['prn'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['sem'];?></td>
                                            <td><?php echo $row['year'];?></td>
                                            <td><?php echo $row['centern'];?></td>
                                            <td><?php echo $row['trn']?></td>
                                            <td><?php echo $row['fees']?></td>
                                            <td><?php echo $row['course']?></td>
                                            <td><?php echo $row['mode']?></td>
                                          
                                            </tr>
                                            <?php
                                        }
                                    
                                
                            ?>      
                                    
                                                                 
                                </tbody>
                            </table>
    </div>
    </div>
    </div>
       <div class="tab-pane fade" id="messages">
        <h5>Update & Delete</h5>
        <table class="table">
            <form action="importdata.php" method="post">
               <tr>
                <td>
           Name:<input type="text" class="form-control" name="txtname" required>
             </td>
              </tr>
            
              <tr>
                <td>
                           <input type = "submit" class="btn btn-primary"  value ="submit" name="stname">
                </td>
              </tr>
                            </form>
                           <?php
                            if(isset($_POST['stname']))
                            {
                                    include 'Conn.php';
                                    $name=$_POST['txtname'];
                                    $sql="select * from studentdt  where name like '%$name%' ORDER BY id DESC ";
                                    $result=$con->query($sql);
                                    $row=$result->fetch_assoc();
                            }

                           ?>
                         </table>
                                <table class="table">
                                 <form action="importdata.php" method="post">
                                <tbody>
                                    <tr>
                                        <td>PRN:<input type="text" class="form-control" value="<?php echo $row['prn'];?>" name="txtdprn" required></td>
                                        <td>TRN:<input type="text" class="form-control" value="<?php echo $row['trn'];?>" name="txtdtrn" required></td>
                                        <td>Name:<input type="text" class="form-control" value="<?php echo $row['name'];?>" name="txtdname" required></td>
                                        <td>Year:<input type="text" class="form-control" value="<?php echo $row['year'];?>" name="txtdyrs" required></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Sem:<input type="text" class="form-control" value="<?php echo $row['sem'];?>" name="txtdsem" required></td>
                                        <td colspan="2">Fees:<input type="text" class="form-control" value="<?php echo $row['fees'];?>" name="txtdfees" required></td>
                                       
                                    </tr>
                                    <tr>
                                      <td colspan="2">Courses:<input type="text" class="form-control" value="<?php echo $row['course'];?>" name="txtdcourse" required></td>
                                      <td colspan="2">Center Name:<input type="text" class="form-control" value="<?php echo $row['centern'];?>" name="txtdcenter" required></td>
                                    </tr>
                                     <tr>
                                        <td colspan="5">Mode:<select class="form-control" name="mode"  width="10px">
                                <option value="">Select mode</option>
                                <option value="program learning">Program Learning</option>
                                <option value="other">Others</option>
                                </select></td>
                              </tr>
                                    <tr>
                                        <td colspan="2"> <input type = "submit" class="btn btn-danger"  value ="Delete" name="dsubmit"></td>
                                        <td colspan="2"> <input type = "submit" class="btn btn-danger"  value ="Update" name="usubmit"></td>
                                    </tr>
                                    <tr>
                                      <td colspan="4"> 
                                        <?php
                                        if($msg==1)
                                        {
                                          echo "Update or Deleted successfull..!!";
                                        }else
                                        {
                                          echo "Fail to Update or Deleted..!!";
                                        }
                                        ?>
                                      </td>
                                    </tr>
                                </tbody>
                            </table>
                          </form>
                          <?php
                             if(isset($_POST['dsubmit']))
                            {
                                    include 'Conn.php';
                                    $dname=$_POST['txtdname'];
                                    $sql="delete FROM studentdt WHERE name like '%$dname%' ORDER BY id DESC";
                                     mysqli_query($con, $sql); 
                                     $msg=1;

                            }
                            else
                            {
                              $msg=0;
                            }
                            ?>
                            <?php
                            if(isset($_POST['usubmit']))
                            {
                               include 'Conn.php';
                                    $name=$_POST['txtdname'];
                                   $prn=$_POST['txtdprn'];
                                   $year=$_POST['txtdyrs'];
                                   $sem=$_POST['txtdsem'];
                                   $fees=$_POST['txtdfees'];
                                   $trn=$_POST['txtdtrn'];
                                   $centername=$_POST['txtdcenter'];
                                   $course=$_POST['txtdcourse'];
                                   $modeu=$_POST['mode'];
                                    $sql="update studentdt set prn='".$prn."',name='".$name."',sem='".$sem."',year='".$year."',centern='".$centername."',trn='".$trn."',fees='".$fees."',course='".$course."',mode='".$modeu."' WHERE name like '%$name%' ORDER BY id DESC";
                                     mysqli_query($con, $sql); 
                                     $msg=1;
                            }
                            else {
                              $msg=0;
                            }
                          ?>
        <div class="ex3">
        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>PRN</th>
                                         <th>Name</th>
                                        <th>Sem</th>
                                         <th>Year</th>
                                         <th>Center Number</th>
                                         <th>TRN</th>
                                         <th>Fees</th>
                                        <th>Course</th>
                                         <th>Mode</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    include 'Conn.php';
                                    
                                   $sql="select * from studentdt ORDER BY id DESC";
                                    $result=$con->query($sql);
                                   
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                          
                                            <td><?php echo $row['prn'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['sem'];?></td>
                                            <td><?php echo $row['year'];?></td>
                                            <td><?php echo $row['centern'];?></td>
                                            <td><?php echo $row['trn']?></td>
                                            <td><?php echo $row['fees']?></td>
                                            <td><?php echo $row['course']?></td>
                                             <td><?php echo $row['mode']?></td>
                                          
                                            </tr>
                                            <?php
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
