<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style>

.ex3 {
    background-color: white;
    width: 1000px;
    height: 400px;
    overflow: auto;
}
.container {
    border: 2px solid blue;
    background-color: whitesmoke;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
    width: 916px;


}

.darker {
    border-color: #ccc;
    background-color: #ddd;
}

.container::after {
    content: "";
    clear: both;
    display: table;
}

.container img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

.container img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}

.time-right {
    float: right;
    color: mediumblue;
}

.time-left {
    float: left;
    color: mediumblue;
}

</style>
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
 <?php
  include "Conn.php";
 include "session.php";
 ?>
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
                        <?php echo date("h:i:sa");?>
                    </div>
                </div>
                <!-- /. ROW  -->
                 
            <hr />
               
            <div>
                <h4>Student's Query</h4>
                <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Userame</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                       
                                        <th>Question</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include 'Conn.php';
                                    $sql="select * from query ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['usernm'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['time'];?></td>
                                            <td><?php echo $row['quest'];?></td>
                                           
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>      
                                    
                                                                 
                                </tbody>
                            </table>

            </div>
            <div class="row">
                <hr/>
                    <h4>Enquiry</h4>
                    <hr/>
                  <div class="ex3">

<?php
  include 'Conn.php';
  $sql="select * from  enquriy ORDER BY id DESC";
  $result=$con->query($sql);
  //$row=$result->fetch_assoc();
  while($row=$result->fetch_assoc())
  {
?>

  <?php

  echo "<div class=container >";
  echo "<p style=font-size:130%>"."<b>". $row['name'] ."</b>"."</p>";
  echo "<p style=font-size:110%>". $row['email'] ."</p>";
   echo "<p style=font-size:110%>". $row['contact'] ."</p>";
   echo "<p style=font-size:110%>". $row['course'] ."</p>";
  echo "<span class=time-right>".$row['time']."</span>";
  echo "<span class=time-left>".$row['date']."</span>";
  echo "</div>";

}
?> 
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