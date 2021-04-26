<?php
include 'Conn.php';
include 'session.php';

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
                 <hr/>
                  Today Date:&nbsp;<?php echo date("d/m/Y");?>

                <hr/>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Today's Total Amount</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                   <td> Cash:
                        <?php
                         
                            include 'Conn.php';
                            $name="Cash";
                            $date=date("d/m/Y");
                            $sql="select sum(paid) As 'Total cash' from receipt where payment='$name' and date='$date'";
                            $result=$con->query($sql);
                            $row=$result->fetch_assoc();   
                 ?>
                    <input type="text" class="form-control" name="lbdate" value="<?php echo $row['Total cash'];?>" readonly></td>
                    <td>Cheque:
                            <?php
                         
                            include 'Conn.php';
                            $name="Cheque";
                            $date=date("d/m/Y");
                            $sql="select sum(paid) As 'Total Cheque' from receipt where payment='$name' and date='$date'";
                            $result=$con->query($sql);
                            $row=$result->fetch_assoc();
                            
                 ?>
                        <input type="text" class="form-control" name="lbname" value="<?php echo $row['Total Cheque'];?>" readonly></td>
                    </tr>
                    </tbody>
                    </table> 
                </tr>
            </tbody>
        </table>
                <div class="row">
                    <div class="col-md-6">
                        <h5>Cash</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>PRN</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Paid</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                     <?php
                                    include 'Conn.php';
                                    $name="Cash";
                                     $date=date("d/m/Y");
                                    $sql="select * from receipt where payment='$name' and date='$date' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr>
                                           
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['PRN'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['total'];?></td>
                                            <td><?php echo $row['paid']?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>      
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="col-md-6">
                        <h5>Cheque</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>Name</th>
                                    <th>PRN</th>
                                    <th>Total</th>
                                    <th>Paid</th>
                                    <th>Cheque NO</th>
                                    <th>Cheque Date</th>
                                     <th>Bank</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                         <?php
                                    include 'Conn.php';
                                     $name="Cheque";
                                      $date=date("d/m/Y");
                                    $sql="select * from receipt where  payment='$name' and date='$date' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                           
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['PRN'];?></td>
                                           
                                            <td><?php echo $row['total'];?></td>
                                           
                                            <td><?php echo $row['paid']?></td>
                                          
                                            <td><?php echo $row['chequeno']?></td>
                                             <td><?php echo $row['chequedate']?></td>
                                            <td><?php echo $row['bank']?></td>
                                            
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>      
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr/>
                    All Data<br/>
                    Total:<?php
                         
                            include 'Conn.php';
                           
                            $sql="select sum(paid) As 'Total' from receipt";
                            $result=$con->query($sql);
                            $row=$result->fetch_assoc();
                            
                 ?>
                  <input type="text" class="form-control" name="lbdate" value="<?php echo $row['Total'];?>" readonly><br>
                 
                    <form action="exports.php" method="post">
                        Export the receipt table in excel:
                   <input type = "submit" class="btn btn-danger"  value ="Export" name="export">
               </form>
                <hr/>
                <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>PRN</th>
                                         <th>TRN</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Balance</th>
                                        <th>Paid</th>
                                        <th>Payment Type</th>
                                        <th>Cheque No</th>
                                        <th>Cheque Date</th>
                                         <th>Bank</th>
                                        <th>Year</th>
                                        <th>Sem</th>
                                        <th>Print</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include 'Conn.php';
                                    $sql="select * from receipt ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['PRN'];?></td>
                                              <td><?php echo $row['TRN'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['total'];?></td>
                                            <td><?php echo $row['balance'];?></td>
                                            <td><?php echo $row['paid']?></td>
                                            <td><?php echo $row['payment']?></td>
                                            <td><?php echo $row['chequeno']?></td>
                                             <td><?php echo $row['chequedate']?></td>
                                            <td><?php echo $row['bank']?></td>
                                            <td><?php echo $row['year']?></td>
                                            <td><?php echo $row['sem']?></td>
                                            <td><a href="Table.php?varname=<?php echo $row['id'];?>">Print</a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>      
                                    
                                                                 
                                </tbody>
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


</body>
</html>