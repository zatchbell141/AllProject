<?php
include "session.php";
include 'Conn.php';
$msg="";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
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


     <link href="md/styles/multiselect.css" rel="stylesheet"/>
  <script src="md/multiselect.min.js"></script>
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
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;Yash&nbsp;Infotech</a>
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
                            <li class="active"><a href="#home" data-toggle="tab">Backlog</a>
                            </li>
                           <li class=""><a href="#profile" data-toggle="tab">Pass</a>
                            </li>
                            <li class=""><a href="#atkt" data-toggle="tab">ATKT</a>
                            </li>
                             <li class=""><a href="#fees" data-toggle="tab">Export Results</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content">
                      <div class="tab-pane fade active in" id="home">
                           <h3 align="center">Backlog</h3>
                          <input type = "submit" class="btn btn-primary" onclick="window.location='indexb.php'" class="Redirect" value ="Add Data" name="submit">
                          <form action="result.php" method="post">
                                    <br/>
                                  Name:<input class="form-control" list="browsers" name="txtname">
                    <datalist id="browsers">
                      <?php
                                include 'Conn.php';
                                 $query1="select name from studentdt";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['name'];?>"><?php echo $grd['name']?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist>
                   <input type = "submit" class="btn btn-primary"  value ="submit" name="submit">
                </form>
                <div class="ex3">
                <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                         <th>Id</th>
                                        
                                         <th>PRN</th>
                                         <th>Name</th>
                                          <th>Seat No</th>
                                          <th>Code</th>
                                         <th>Subject</th>
                                        <th>Internal/External</th>
                                        <th>Mode</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include 'Conn.php';
                                    if(isset($_POST['submit']))
                                    {
                                    $name=$_POST['txtname'];
                                    $sql="select * from result where name like '%$name%' ";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                             <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['prn'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                             <td><?php echo $row['seat'];?></td>
                                        <td><?php echo $row['code'];?></td>
                                            <td><?php echo $row['subject'];?></td>
                                           <td><?php echo $row['interexter'];?></td>
                                           
                                            <td><?php echo $row['Mode']?></td>
                                          
                                             
                                            </tr>
                                            <?php
                                        }
                                    }
                                }
                                else
                                {
                                     $sql="select * from result ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                             <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['prn'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                             <td><?php echo $row['seat'];?></td>
                                        <td><?php echo $row['code'];?></td>
                                            <td><?php echo $row['subject'];?></td>
                                           <td><?php echo $row['interexter'];?></td>
                                           
                                            <td><?php echo $row['Mode']?></td>
                                          
                                             
                                            </tr>
                                            <?php
                                        }
                                    }
                                }
                            ?>      
                                    
                                                                 
                                </tbody>
                            </table>
                 
                        
                </div>
                </div>
              </div>
              <?php
             include 'Conn.php';
           
            $sql="select COUNT(*) AS pass from result where mode='Pass' ORDER BY id DESC";
            $result=$con->query($sql);
            $row=$result->fetch_assoc();
              ?>

                 <div class="tab-pane fade" id="profile">
                          <h3 align="center">Pass</h3>
                          <a href="Pass.php">For Print</a>
                           <div class="ex3">
 <br/>
             Number Of Pass Student:<input type="text" class="form-control" name="txtpass" value="<?php echo $row['pass'];?>" readonly>
                   <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        
                                         <th>PRN</th>
                                         <th>Name</th>
                                          <th>Seat No</th>
                                       
                                         <th>Subject</th>
                                        
                                        <th>Mode</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    include 'Conn.php';
                                   
                                    $sql="select * from result where mode='Pass' ORDER BY id DESC ";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['prn'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                             <td><?php echo $row['seat'];?></td>
                                      
                                            <td><?php echo $row['subject'];?></td>
                                         
                                           
                                            <td><?php echo $row['Mode']?></td>
                                          
                                             
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                  </table>
                                
   </div>
                </div>
              </div>
     <div class="tab-pane fade" id="atkt">
       <?php
             include 'Conn.php';
           
            $sql="select COUNT(*) AS pass from result where mode='ATKT' ORDER BY id DESC";
            $result=$con->query($sql);
            $row=$result->fetch_assoc();
              ?>
                          <h3 align="center">ATKT</h3>
                           <br/>
             Number Of Pass Student:<input type="text" class="form-control" name="txtpass" value="<?php echo $row['pass'];?>" readonly></td>
                          <a href="backlog.php">For Print</a>
                           <div class="ex3">
                   <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        
                                         <th>PRN</th>
                                         <th>Name</th>
                                          <th>Seat No</th>
                                       
                                         <th>Subject</th>
                                        
                                        <th>Mode</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    include 'Conn.php';
                                   
                                    $sql="select * from result where mode='ATKT' ORDER BY id DESC ";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['prn'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                             <td><?php echo $row['seat'];?></td>
                                      
                                            <td><?php echo $row['subject'];?></td>
                                         
                                           
                                            <td><?php echo $row['Mode']?></td>
                                          
                                             
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                  </table>
                                
                        </div>
  </div>
</div>
 <div class="tab-pane fade" id="fees">
                          <h3 align="center">Export To Excel</h3>
                            <form action="exportrlt.php" method="post">
                          <input type = "submit" class="btn btn-danger"  value ="Export" name="export">
                          </form>
                            <div class="ex3">
                               <table class="table">
                                <thead>
                                    <tr>
                                        <th>SrNo</th>
                                         <th>PRN</th>
                                          <th>Seat No</th>
                                          <th>Name</th>
                                           <th>Contact No</th>
                                           <th>Subject</th>
                                           <th>Date</th>
                                        <th>Fees</th>
                                         <th>Late Fees</th>
                                     
                                    </tr>
                                </thead>
                                 <?php
                                    include 'Conn.php';
                                    $num=0;
                                    $date=date("d/m/Y");
                                    $sql="select * from blacklog where balance='0' and date=$date";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php $num++; echo $num;?></td>
                                            <td><?php echo $row['prn'];?></td>
                                            <td><?php echo $row['seat'];?></td>
                                             <td><?php echo $row['name'];?></td>
                                             <td></td>
                                            <td><?php echo $row['subjects'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['fees'];?></td>  
                                            <td><?php echo $row['late'];?></td>  
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                <tbody>
                                   <tfoot>
                                    <td colspan="6" align="right"></td><td><b>Total:<?php
                                    include 'Conn.php';
                                      $date=date("d/m/Y");
                                    $sql="SELECT SUM(fees) AS Total FROM blacklog where balance='0' and date=$date";
                                    $result=$con->query($sql);
                                    $row=$result->fetch_assoc();
                                    echo "Fees:&nbsp;".$row['Total'];
                                    ?></b></td>
                                    <td><b><?php
                                    include 'Conn.php';
                                      $date=date("d/m/Y");
                                    $sql="SELECT SUM(late) AS Total FROM blacklog where balance='0' and date=$date";
                                    $result=$con->query($sql);
                                    $row=$result->fetch_assoc();
                                    echo "Late:&nbsp;".$row['Total'];
                                    ?></b></td>
                                  </tfoot>
                                </table>
                            </div>

                           <form action="exportresult.php" method="post">
                            <table class="table">
                                <thead>
                                    <tr>
                            <td>Date:<input type="date" class="form-control" name="txtdaterept"  placeholder="Cheque Date" ></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                          </tr>
                             Export to Excel:<input type = "submit" class="btn btn-danger"  value ="Export" name="export">
                            </form>
                          <table class="table">
                                <thead>
                                    <tr>
                                        <th>SrNo</th>
                                         <th>PRN</th>
                                          <th>Seat No</th>
                                          <th>Name</th>
                                           <th>Contact No</th>
                                           <th>Subject</th>
                                           <th>Date</th>
                                        <th>Fees</th>
                                         <th>Late Fees</th>
                                     
                                    </tr>
                                </thead>
                                 <?php
                                    include 'Conn.php';
                                    $num=0;
                                    $sql="select * from blacklog where balance='0'";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php $num++; echo $num;?></td>
                                            <td><?php echo $row['prn'];?></td>
                                            <td><?php echo $row['seat'];?></td>
                                             <td><?php echo $row['name'];?></td>
                                             <td></td>
                                            <td><?php echo $row['subjects'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['fees'];?></td>  
                                            <td><?php echo $row['late'];?></td>  
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                <tbody>
                                  <tfoot>
                                    <td colspan="6" align="right"></td><td><b>Total:<?php
                                    include 'Conn.php';
                                    $sql="SELECT SUM(fees) AS Total FROM blacklog where balance='0'";
                                    $result=$con->query($sql);
                                    $row=$result->fetch_assoc();
                                    echo "Fees:&nbsp;".$row['Total'];
                                    ?></b></td>
                                    <td><b><?php
                                    include 'Conn.php';
                                    $sql="SELECT SUM(late) AS Total FROM blacklog where balance='0'";
                                    $result=$con->query($sql);
                                    $row=$result->fetch_assoc();
                                    echo "Late:&nbsp;".$row['Total'];
                                    ?></b></td>
                                  </tfoot>
                                </tbody>
                          </table>
                          <div>

    <script>
  document.multiselect('#');
  function sb()
  {
    s=document.getElementById("bremark").value;
    if(s=="Pass")
    {
      document.getElementById("txtbsubject").disabled=true;
    }
    else
    {
      document.getElementById("txtbsubject").disabled=false; 
    }
  }
</script>

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