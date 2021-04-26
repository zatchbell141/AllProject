<?php
include "session.php";
include 'Conn.php';
$msg="";
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
                            <li class="active"><a href="receipt.php" data-toggle="tab">Backlog</a>
                            </li>
                           
                            
                        </ul>
<h3 align="center">Update Backlog Fees</h3>
                              <hr>
                               <?php
                         if(isset($_POST['subs']))
                        {
                            include 'Conn.php';
                            $name=$_POST['txtsname'];
                            $sql="select * from blacklog where name like '%$name%'";
                            $result=$con->query($sql);
                            $row=$result->fetch_assoc();
                           
                    }
                 ?>
                              <form action="receipt.php" method="post">
                               Name:<input type="text" class="form-control" name="txtsname" required>
                   <input type = "submit" class="btn btn-primary"  value ="submit" name="subs">
                   <br/>
              </form>
                <table class="table">
                  <tbody>
                     <form action="receipt.php" method="post">
                   <tr>
                     <td>PRN:<input type="text" class="form-control" name="txtbluprn" value="<?php echo $row['prn'];?>" readonly></td>
                     <td colspan="3">Name:<input type="text" class="form-control" name="txtbluname" value="<?php echo $row['name'];?>" readonly></td>
                     <td >Seat No:<input type="text" class="form-control" name="txtbluseat" value="<?php echo $row['seat'];?>" readonly></td>
                    <tr>
                    <td colspan="3">Subject:<textarea class="form-control" name="txtblusuject"  readonly rows="4" cols="100"><?php 
                                   
                                   echo $row['subjects'];

                                    ?></textarea></td>
                   
                                  <td colspan="2">Date:<input type="text" class="form-control" name="txtbludate" value="<?php echo  date("d/m/Y");?>" readonly></td>
                                </tr>
                                  <tr>
                                  <td>Fees:<input type="text" class="form-control" name="txtblufees" value="<?php echo $row['fees'];?>" readonly></td>
                                   <td>Balance Fees:<input type="text" class="form-control" name="txtblubfees" value="<?php echo $row['balance'];?>" readonly></td>
                                  <td>Late Fees:<input type="text" class="form-control" name="txtblulfees"  required></td>
                                  <td colspan="3">Paid:<input type="text" class="form-control" name="txtblupaid" required></td>
                                  
                                  
                  </tr>
                    <tr>
                    <td>Payment Type:<select class="form-control" name="blupayment" id="bpayment" onChange=" textbl();"  width="10px">
                    <option value="">Select Payment Type</option>
                    <option value="Cash">Cash</option>
                    <option value="Cheque">Cheque</option>
                    </select></td>
                    <td>Cheque No:<input type="text" class="form-control" name="txtbluchqueno" id="txtblucheqno" placeholder="Cheque No" required></td>
                    <td>Cheque Date:<input type="date" class="form-control" name="txtbluchqd" id="txtblucheqd" placeholder="Cheque Date" ></td>
                    <td colspan="2">Bank:<input type="text" class="form-control" name="txtblubank"  id="txtubbank" placeholder="Bank" required></td>
                    </tr>
                    <tr>
                   <td colspan="4"><input type = "submit" class="btn btn-primary"  value ="submit" name="updteblf"></td>
                   </tr>
                   </tbody>  
                  </tr>
                </table>
              </form>
                <?php
                              include 'Conn.php';
                                if(isset($_POST['updteblf']))
                            {
                                    $uprn=$_POST['txtbluprn']; 
                                      $uname=$_POST['txtbluname'];
                                      $usubject=$_POST['txtblusuject'];
                                      $ulate=$_POST['txtblulfees']; 
                                      $ufees=$_POST['txtblufees'];
                                      $ubalance=$_POST['txtblubfees'];
                                     
                                      $upaid="0"; 
                                      $ub="0";
                                      $upayment=$_POST['blupayment'];
                                      $uchqun=$_POST['txtbluchqueno'];
                                      $uchqud=$_POST['txtbluchqd']; 
                                      $uchqud=strtotime($uchqud);
                                      $uchqud=date('d/m/Y',$uchqud);
                                      $ubank=$_POST['txtblubank'];
                                      $udate=$_POST['txtbludate'];
                                      $useat=$_POST['txtbluseat'];

                                    if($ubalance=="0")
                                    {
                                        $upaid="0";
                                        echo '<script type="text/javascript">alert("Full Paid Student...!!");</script>';
                                    }
                                    else
                                    {
                                  $upaid=$_POST['txtblupaid'];
                                  $ub=$ubalance-$upaid+$ulate;
                                  $query="insert into blacklog(prn,name,subjects,fees,paid,balance,payment,chqueno,chqd,bank,date,seat,late) values('$uprn','$uname','$usubject','$ufees','$upaid','$ub','$upayment','$uchqun','$uchqud',$ubank,'$udate','$useat','$ulate')";
                                  mysqli_query($con,$query); 
                                  $msg=1;
                                        
                                    }
                               
                              
                               }
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