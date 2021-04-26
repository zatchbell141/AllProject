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
                                <a href="receipt.php">Add Students</a>
                            </li>
                           <li>
                                <a href="receipt.php">Import Data</a>
                            </li>
                           <li>
                                <a href="receipt.php">Enquiry Reports</a>
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
              <div class="table-responsive">
             <table class="table">
            <form action="exporttotal.php" method="post">
              <td>Export Form:<input type="date" class="form-control" name="txtsumform"  required> To:<input type="date" name="txtsumto"  class="form-control"  required><input type = "submit" class="btn btn-primary"  value ="Export to Excel" name="export"></td>
              </form>
          </table>
          <table class="table">
            <tr>
              <th>Name</th>
              <th>Hours</th>
              <th>Remuneration</th>
              <th>Total Remuneration</th>
            </tr>
            <tr>
               <?php
                                    include 'Conn.php';
                                    $sql="select * from staff";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                      while($row=$result->fetch_assoc())
                                        {
                                          include 'Conn.php';
                                        
                                  $ssql="select SUM(hrs) As Hours,SUM(sal) As Salary from salary where name='".$row['name']."'";
                                  $sresult=$con->query($ssql);
                                  $srow=$sresult->fetch_assoc();
                                  
                                  $tssql="select * from sal ";
                                  $tsresult=$con->query($tssql);
                                  $tsrow=$tsresult->fetch_assoc();
                                  
                                  

                                         ?>
                                         <tr  class="success">
                                         <td><?php echo $row['name'];?></td>
                                         <td><?php echo $srow['Hours'];?></td>
                                         <td><?php echo $tsrow['sal'];?></td>
                                         <td><?php echo $srow['Salary'];?></td>
                                       
                                       </tr>
                                        <?php
                                        
                                        }
                                    }
                                  $ttssql="select SUM(hrs) As Hours,SUM(sal) As Salary from salary";
                                  $ttsresult=$con->query($ttssql);
                                  $ttsrow=$ttsresult->fetch_assoc();
                           ?>

            </tr>
         
            <tr>

              <td>Total</td>
              <td><?php echo $ttsrow['Hours'];?></td>
              <td></td>
              <td><?php echo $ttsrow['Salary'];?></td>
            </tr>

          </table>

                                         
 
  
        <h5 align="center">Hours Based Salary</h5>
       
          <form action="staffreports.php" method="post">
          <table class="table">
            <tr>
              <td>Form: <input type="date" class="form-control" name="txtform"  required></td>
              <td>To:<input type="date" class="form-control" name="txtto"  required></td>
            </tr>
            <tr>
              <td colspan="2"><input type = "submit" class="btn btn-primary"  value ="submit" name="salshs"></td>
              </form>
            </tr>
          </table>
          
          <table class="table">
            <tr>
              <th>Staff ID</th>
              <th>Name</th>
              <th>Salary</th>
              <th>Hours</th>
              <th>Date</th>
               <th>Subject</th>
            </tr>
            <tr>
              <?php
              if(isset($_POST['salshs']))
              {
                                    include 'Conn.php';
                                    $form=$_POST['txtform'];
                                      $form=strtotime($form);
                                       $form=date('d/m/Y',$form);
                                        $to=$_POST['txtto'];
                                      $to=strtotime($to);
                                       $to=date('d/m/Y',$to);
                                    $sql="SELECT s.id,s.name,sa.sal,sa.hrs,sa.sessiondate,sa.subject FROM staff s INNER JOIN salary sa on 
                                    s.id=sa.staffid WHERE sa.sessiondate BETWEEN '$form' AND '$to'";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                             <tr  class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['sal'];?></td>
                                            <td><?php echo $row['hrs'];?></td>
                                            <td><?php echo $row['sessiondate'];?></td>
                                            <td><?php echo $row['subject'];?></td>
                                          
                                            </tr>
                                            <?php
                                        }
                                    }
                                  }
                            ?>      
            </tr>
          </table>

          <table class="table">
            <tr>

              <th colspan="4"><hr>Grand Total:<hr></th>
              
            </tr>
            <tr>
              <th>Staff ID</th>
              <th>Name</th>
              <th>Total Salary</th>
              <th>Total Hours</th>
            </tr>
            <tr>
              <?php
                if(isset($_POST['salshs']))
              {
               $form=$_POST['txtform'];
                                      $form=strtotime($form);
                                       $form=date('d/m/Y',$form);
                                        $to=$_POST['txtto'];
                                      $to=strtotime($to);
                                       $to=date('d/m/Y',$to);
                                    include 'Conn.php';
                                    $sql="SELECT s.id,s.name,SUM(sa.sal) As Salary,SUM(hrs) AS Hours FROM staff s INNER JOIN salary sa 
                                    on s.id=sa.staffid  WHERE sa.sessiondate  BETWEEN '$form' AND '$to' GROUP by s.id,s.name ";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                             <tr  class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['Salary'];?></td>
                                            <td><?php echo $row['Hours'];?></td>
                                            
                                          
                                            </tr>
                                            <?php
                                        }
                                    }
                                  }
                            ?>      
            </tr>
          </table>
          <table class="table">
            <tr>
              <form action="exportstaff.php" method="post">
              <td>Export Form:<input type="text" class="form-control" name="formtxt" value="<?php echo $form?>" readonly> To:<input type="text" class="form-control" name="totxt" value="<?php echo $to?>" readonly><input type = "submit" class="btn btn-primary"  value ="Export to Excel" name="export"></td>
              </form>
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


</body>
</html>