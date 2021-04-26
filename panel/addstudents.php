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
                                <a href="receipt.php">Students Reports</a>
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
          <form id="addform" action="addstudentdata.php" method="post">
               <table class="table">
                <tr>
                  <td>Name:<input type="text" class="form-control"  name="txtstudname" placeholder="Name" required></td>
                  <td>Lastname:<input type="text" class="form-control" name="txtstudlast" placeholder="Lastname" required></td>
                  <td>Fathername:<input type="text" class="form-control" name="txtstudfather" placeholder="Fathername" required></td>
                  <td>Mothername:<input type="text" class="form-control" name="txtstudmother" placeholder="Mothername" required></td>
                </tr>
                <tr>
                  <td>Course Code:<input type="text" class="form-control"  name="txtstudcode" placeholder="Course Code" required></td>
                  <td>Course Name:<select class="form-control" name="txtstudcoursename" required>
                  <option value="Bachelor of Computer Applications-E-First Year">Bachelor of Computer Applications-E-First Year</option>
                  <option value="Bachelor of Computer Applications- R- Second Year">Bachelor of Computer Applications- R- Second Year</option>
                  <option value="Bachelor of Computer Applications- R- Third Year">Bachelor of Computer Applications- R- Third Year</option>
                  </select></td>
                  <td>Date of Birth:<input type="date" class="form-control" name="txtstuddob" placeholder="Date of Birth" required></td>
                  <td>Gender:<select name="txtstudgender" class="form-control" required>
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
                  <td>Contact:<input type="text" class="form-control" name="txtstudcontact" placeholder="Contact No" required></td>
                  <td>Email:<input type="text" class="form-control"  name="txtstudemail" placeholder="Email" required></td>
                </tr>
                <tr>
                  <td>PRN:<input type="text" class="form-control" name="txtstudprn" placeholder="PRN" required></td>
                  <td>TRN:<input type="text" class="form-control" name="txtstudtrn" placeholder="TRN" required></td>
                  <td>Qualification:<input type="text" class="form-control" name="txtstudquli" placeholder="Qualification" required></td>
                  <td>Medium:<input type="text" class="form-control" name="txtstudmedium" placeholder="Medium" required></td>
                </tr>
                <tr>
                  <td>Admission Status:<input type="text" class="form-control"  name="txtstudadmission" placeholder="Admission Status" required></td>
                  <td>Aadhar Card No:<input type="text" class="form-control"  name="txtstudaadhar" placeholder="Aadhar Card" required></td>
              </tr>
              <tr>
                  <td colspan="4"><button class="btn btn-primary" id="submit">Add Students</button></td>
                  </form>
                </tr>
                <tr>
                   <td colspan="4"><div id="msg"></td>
                </tr>
              </table>
         
          <div class="ex3">


 <table class="table">
            <tr>
              <th>StudentId</td>
                <th>Course Code</td>
                <th>Course Name</td>
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
                                    $sql="select * from studentdt ORDER BY studentid DESC";
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
<script type="text/javascript" src="jquery-1.8.2.min.js"></script>
<script>
  $("#submit").click(function() {
  $.post($("#addform").attr("action"),
    $("#addform :input").serializeArray(), function(info){
      $("#msg").html(info);
    });
  clearinput();
});

$("#addform").submit( function(){
  return false;
});

function clearinput(){
  $("#addform :input").each( function() {
    $(this).val('');
  });
}
</script>

</body>
</html>