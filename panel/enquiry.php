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
                                <a href="studenetdatareport.php">Students Reports</a>
                            </li>
                        </ul>
                    </li>
                      <li>
                        <a href="#"><i class="fa fa-user "></i>Enquiry<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                   <a href="enquiry.php">Add Enquiry</a>
                            </li>
                           <li>
                                <a href="followup.php">Follow Up</a>
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
            <h3>Enquiry</h3>
           <form id="addform" action="addenquiry.php" method="post">
          <div class="table-responsive">
               <table class="table">
                                    <tr>
             
                                        <td>Name:<input type="text"  name="txtename" class="form-control" placeholder="Name" required></td>
                                        <td>Address:<input type="text"  name="txtehrs" class="form-control" placeholder="Address" required></td>
                                        <td>Percentage:<input type="text"  name="txtesubject" class="form-control" placeholder="Percentage" required></td>
                                    </tr>
                                    <tr>
                                        <td>Stream:<input type="text" name="txtstream" class="form-control" placeholder="Stream" required></td>
                                        <td>College:<input type="text" name="txtcolg" class="form-control" placeholder="College" required></td>
                                        <td>Phone Number:<input type="text"  name="txtphone" class="form-control" placeholder="Phone Number" required></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Reference:<input type="text" name="txtref" class="form-control" placeholder="Reference" required></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><button class="btn btn-primary" id="submit">Submit</button></td>
                                    </form>
                                    <tr>
                                        <td colspan="4"><div id="msg">
                                    </td>
                                    </tr>
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