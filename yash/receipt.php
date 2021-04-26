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
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;Yash&nbsp;InfoTech</a>
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
    <?php
                    include 'Conn.php';
                    $sql="select * from receipt";
                    $result=$con->query($sql);
                    $row=$result->fetch_assoc();
 ?>
     <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Add Receipt</a>
                            </li>
                           <li class=""><a href="#fees" data-toggle="tab">Update Fees</a>
                            </li>
                            <li class=""><a href="#messages" data-toggle="tab">Delete & Update</a>
                            </li>
                               <li class=""><a href="#profile" data-toggle="tab">Print</a>
                            </li>
                             </li>
                               <li class=""><a href="#back" data-toggle="tab">Backlog</a>
                            </li>
                            </li>
                               <li class=""><a href="#updateback" data-toggle="tab">Update & Delete Backlog</a>
                            </li>
                             </li>
                               <li class=""><a href="#confees" data-toggle="tab">Convocation Fees</a>
                            </li>
                        </ul>
                       
                    <div class="tab-content">
                      <div class="tab-pane fade active in" id="home">
                          <h3 align="center">Add Receipt</h3><hr />
                              <form action="receipt.php" method="post">
                         <?php
                         if(isset($_POST['submit']))
                        {
                            include 'Conn.php';
                            $name=$_POST['txtname'];
                            $sql="select * from studentdt where name like '%$name%'";
                            $result=$con->query($sql);
                            $row=$result->fetch_assoc();
                    }
                 ?>
                 
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
                   <br/>
              </form> 
                               
               <form action="receipt.php" method="post">
                    <br>
                <table class="table">
                                <tbody>
                                    <tr>
                   <td> Date:<input type="text" class="form-control" name="lbdate" value="<?php echo date("d/m/Y");?>" readonly></td>
                    <td>Name:<input type="text" class="form-control" name="lbname" value="<?php echo $row['name'];?>" readonly></td>
                    <td>PRN:<input type="text" class="form-control" name="lbprn" value="<?php echo $row['prn'];?>" readonly></td>
                     <td>Year:<input type="text" class="form-control" name="lbyear" value="<?php echo $row['year'];?>" readonly></td>
                    <td>Sem:<input type="text" class="form-control" name="lbsem" value="<?php echo $row['sem'];?>" readonly></td>
                  </tr>
                  <tr>
                   
                     <td>Payment Type:<select class="form-control" name="payment"  id ="payment" width="10px"  onChange="changetextbox();" required>
                                <option value="">Select Payment Type</option>
                                <option value="Cash">Cash</option>
                                <option value="Cheque">Cheque</option>
                                </select></td>
                                <td>Cheque No:<input type="text" class="form-control" name="txtcheque" id="txtcheqno" placeholder="Cheque No" required></td>
                                <td>Cheque Date:<input type="date" class="form-control" name="txtchqdate" id="txtcheqd" placeholder="Cheque Date" required></td>
                                
                    <td>Fees:<input type="text" class="form-control" name="txtfees"  value="<?php echo $row['fees'];?>" placeholder="Fees" readonly></td>
                    <td>Paid Fees:<input type="text" class="form-control" name="txtpaidfees" placeholder="Paid Fees" required></td>
                    <tr>
                        <td colspan="2">Bank:<input type="text" class="form-control" name="txtbank" id="txtbank" placeholder="Bank Name" required></td>
                         <td>Mode:<select class="form-control" name="mode" id="m" onChange="late();" width="10px"  required>
                                <option value="">Select fees</option>
                                <option value="Late Fees">Late Fees</option>
                                <option value="Without late fees">Without late fees</option>
                                </select></td>
                        <td>Late Fees:<input type="text" class="form-control" name="txtlate" id="txtlte" placeholder="Late Fees" required></td>
                        <td>TRN:<input type="text" class="form-control" name="txttrn" value="<?php echo $row['trn'];?>" placeholder="TRN" readonly></td>
                    </tr>
                    <tr>
                      <td colspan="5"><input type = "submit" class="btn btn-danger"  value ="submit" name="fees"></td>
                    </tr>
                   </tbody>
                </table>
                
                     <?php
                        if($msg==1)
                        {
                            echo "Added Into database..!!";
                        }
                        else
                        {
                            echo "Fail to add..!";
                        }
                     ?>
                </form>
                <div class="ex3">
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
                                         <th>Late Print</th>
                                        <th>Other Print</th>
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
                                             <td><a href="lfees.php?varname=<?php echo $row['id'];?>">Late Print</a></td>
                                              <td><a href="other.php?varname=<?php echo $row['id'];?>">Other Print</a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>                                                        
                                </tbody>
                            </table>
    </div>
                </div>
                <?php
                
                 include 'Conn.php';
                 $msg=0;
                    if(isset($_POST['fees']))
                {
                     $name=$_POST['lbname'];
                     $date=$_POST['lbdate'];
                     $prn=$_POST['lbprn'];
                     $year=$_POST['lbyear'];
                     $sem=$_POST['lbsem'];
                     $fees=$_POST['txtfees'];
                     $mode=$_POST['mode'];
                      $tfees="";
                      $late=$_POST['txtlate'];
                     if($mode=="Late Fees")
                     {
                        $tfees=$fees+$late;
                     }
                     else
                     {
                        $tfees=$fees;
                     }
                     $paid=$_POST['txtpaidfees'];
                     $payment=$_POST['payment'];
                     $chequeno=$_POST['txtcheque'];
                     $chequedate=$_POST['txtchqdate'];
                     $chequedate=strtotime($chequedate);
                     $chequedate=date('d/m/Y',$chequedate);
                    $trn=$_POST['txttrn']; 
                     $Bank=$_POST['txtbank'];
                     $balance=$tfees-$paid;
                    $query="insert into receipt(name,PRN,TRN,date,total,balance,paid,payment,chequeno,chequedate,bank,year,sem,mode) values('$name','$prn','$trn','$date','$tfees','$balance','$paid','$payment','$chequeno','$chequedate','$Bank','$year','$sem','$late')";
                    mysqli_query($con,$query); 
                    $msg=1;
                }
                else{
                    $msg=0;   
                }
                mysqli_close($con); 
?>
</div>
                      <div class="tab-pane fade" id="profile">
                          <h3 align="center">Print</h3>
                          <form action="receipt.php" method="post">
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
                                        <th>Name</th>
                                         <th>PRN</th>
                                          <th>TRN</th>
                                         <th>Date</th>
                                         <th>Total</th>
                                         <th>Balance</th>
                                         <th>Paid</th>
                                        <th>PaymentType</th>
                                        <th>Cheque No</th>
                                        <th>Cheque Date</th>
                                        <th>Bank</th>
                                        <th>Print</th>
                                        <th>Late Print</th>
                                        <th>Other Print</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include 'Conn.php';
                                    if(isset($_POST['submit']))
                                    {
                                    $name=$_POST['txtname'];
                                    $sql="select * from receipt where name like '%$name%' ";
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
                                            <td><a href="Table.php?varname=<?php echo $row['id'];?>">Print</a></td>
                                             <td><a href="lfees.php?varname=<?php echo $row['id'];?>">Late Print</a></td>
                                              <td><a href="other.php?varname=<?php echo $row['id'];?>">Other Print</a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                }
                                else
                                {
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
                                            <td><a href="Table.php?varname=<?php echo $row['id'];?>">Print</a></td>
                                             <td><a href="lfees.php?varname=<?php echo $row['id'];?>">Late Print</a></td>
                                              <td><a href="other.php?varname=<?php echo $row['id'];?>">Other Print</a></td>
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
                      <div class="tab-pane fade" id="messages">
                          <h3 align="center">Update & Delete Receipt</h3>
                           <?php
                            if(isset($_POST['usubmit']))
                            {
                                    include 'Conn.php';
                                    $name=$_POST['txtuname'];
                                    $sql="select * from receipt  where name like '%$name%' ORDER BY id DESC ";
                                    $result=$con->query($sql);
                                    $row=$result->fetch_assoc();
                            }

                           ?>
                           <form action="receipt.php" method="post">
                           Name:<input class="form-control" list="browsers" name="txtuname">
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
                          <input type = "submit" class="btn btn-primary"  value ="submit" name="usubmit">
                          <hr/>
                        </form>
                          <form action="receipt.php" method="post">
                   
                <table class="table">
                                <tbody>
                                    <tr>
                   <td> Date:<input type="text" class="form-control" name="txtudate" value="<?php echo date("d/m/Y");?>" readonly></td>
                    <td>Name:<input type="text" class="form-control" name="txtuname" value="<?php echo $row['name'];?>" required></td>
                    <td>PRN:<input type="text" class="form-control" name="txtuprn" value="<?php echo $row['PRN'];?>" required></td>
                     <td>Year:<input type="text" class="form-control" name="txtuyear" value="<?php echo $row['year'];?>" required></td>
                    <td>Sem:<input type="text" class="form-control" name="txtusem" value="<?php echo $row['sem'];?>" required></td>
                  </tr>
                  <tr>
                   
                     <td>Payment Type:<select class="form-control" name="payment"  id ="payt" onChange="text();" width="10px"   required>
                                <option value="">Select Payment Type</option>
                                <option value="Cash">Cash</option>
                                <option value="Cheque">Cheque</option>
                                </select></td>
                      <td>Cheque No:<input type="text" class="form-control" name="txtucheque" id="txtchqno" placeholder="Cheque No" required></td>
                       <td>Cheque Date:<input type="date" class="form-control" name="txtuchqd" id="txtchqd" value="<?php echo $row['chequedate'];?>" required></td>
                                
                    <td>Fees:<input type="text" class="form-control" name="txtfees"  value="<?php echo $row['total'];?>" placeholder="Fees" required></td>
                    <td>Paid Fees:<input type="text" class="form-control" name="txupfees"  value="<?php echo $row['paid'];?>" placeholder="Paid Fees" required></td>
                    <tr>
                        <td colspan="2">Bank:<input type="text" class="form-control" name="txtubank" id="txtub" value="<?php echo $row['bank'];?>" placeholder="Bank" required></td>
                         <td colspan="1">ID:<input type="text" class="form-control" name="txtuid" value="<?php echo $row['id'];?>" placeholder="ID" readonly></td>
                        <td colspan="2">TRN:<input type="text" class="form-control" name="txtutrn" value="<?php echo $row['TRN'];?>" placeholder="TRN" required></td>
                    </tr>
                    <tr>
                      <td colspan="3">Mode:<select class="form-control" name="mode"  width="10px"  required>
                                <option value="">Select fees</option>
                                <option value="Late Fees">Late Fees</option>
                                <option value="Without late fees">Without late fees</option>
                                </select></td>
                                <td colspan="2">Balance:<input type="text" class="form-control" name="txtubal" value="<?php echo $row['balance'];?>" placeholder="TRN" readonly></td>
                    </tr>
                    <tr>
                      <td colspan="2"><input type = "submit" class="btn btn-danger"  value ="Update" name="ufees"></td>
                       <td colspan="2"><input type = "submit" class="btn btn-danger"  value ="Delete" name="dfees"></td>
                    </tr>
                   </tbody>
                </table>
              </form>
               <?php
                             if(isset($_POST['dfees']))
                            {
                                    include 'Conn.php';
                                    $dname=$_POST['txtid'];
                                    $sql="delete FROM receipt WHERE id like '%$dname%' ORDER BY id DESC";
                                     mysqli_query($con, $sql); 
                                     $msg=1;

                            }
                            else
                            {
                              $msg=0;
                            }
              ?>
              <?php
                             if(isset($_POST['ufees']))
                            {
                                    include 'Conn.php';
                                 $dname=$_POST['txtuid'];
                                  $name=$_POST['txtuname'];
                                  $date=$_POST['txtudate'];
                                   $prn=$_POST['txtuprn'];
                                   $year=$_POST['txtuyear'];
                                   $sem=$_POST['txtusem'];
                                   $fees=$_POST['txtfees'];
                                   $pfees=$_POST['txupfees'];
                                   $ptype=$_POST['payment'];
                                   $trn=$_POST['txtutrn'];
                                   $chqd=$_POST['txtuchqd'];
                                     $chqud=strtotime($chqud);
                                      $chqud=date('d/m/Y',$chqud);
                                   $chqn=$_POST['txtucheque'];
                                  $bank=$_POST['txtubank'];
                                   $modeu=$_POST['mode'];
                                   $bal=$_POST['txtubal'];
                                    $sql="update receipt set name='".$name."',PRN='".$prn."',TRN='".$trn."',date='".$date."',total='".$fees."',balance='".$bal."',paid='".$pfees."',payment='".$ptype."',chequeno='".$chqn."',chequedate='".$chqd."',bank='".$bank."',year='".$year."',sem='".$sem."',mode='".$modeu."' WHERE id like '%$dname%' ORDER BY id DESC";
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
                                        <th>Name</th>
                                         <th>PRN</th>
                                          <th>TRN</th>
                                         <th>Date</th>
                                         <th>Total</th>
                                         <th>Balance</th>
                                         <th>Paid</th>
                                        <th>PaymentType</th>
                                        <th>Cheque No</th>
                                        <th>Cheque Date</th>
                                        <th>Bank</th>
                                        <th>Print</th>
                                         <th>Print</th>
                                        <th>Late Print</th>
                                        <th>Other Print</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include 'Conn.php';
                                    if(isset($_POST['submit']))
                                    {
                                    $name=$_POST['txtname'];
                                    $sql="select * from receipt where name like '%$name%' ";
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
                                            <td><a href="Table.php?varname=<?php echo $row['id'];?>">Print</a></td>
                                            <td><a href="lfees.php?varname=<?php echo $row['id'];?>">Late Print</a></td>
                                              <td><a href="other.php?varname=<?php echo $row['id'];?>">Other Print</a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                }
                                else
                                {
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
                                            <td><a href="Table.php?varname=<?php echo $row['id'];?>">Print</a></td>
                                            <td><a href="lfees.php?varname=<?php echo $row['id'];?>">Late Print</a></td>
                                              <td><a href="other.php?varname=<?php echo $row['id'];?>">Other Print</a></td>
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
                      <div class="tab-pane fade" id="fees">
                          <h3 align="center">Update Fees</h3> 
                          <hr/>
                        
                            <form action="receipt.php" method="post">
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
                           <input type = "submit" class="btn btn-primary" onclick="bal()" value ="submit" name="stname">
                            </form>
                           <?php
                            if(isset($_POST['stname']))
                            {
                                    include 'Conn.php';
                                    $name=$_POST['txtname'];
                                    $sql="select * from receipt  where name like '%$name%' ORDER BY id DESC ";
                                    $result=$con->query($sql);
                                    $row=$result->fetch_assoc();
                            }

                           ?>
                             <div class="table-responsive">
                                <br>
                               
                            <table class="table">
                                 <form action="receipt.php" method="post">
                                <tbody>
                                    <tr>
                                        <td>PRN:<input type="text" class="form-control" name="txtprn" value="<?php echo $row['PRN'];?>" readonly></td>
                                        <td>TRN:<input type="text" class="form-control" name="txttrn" value="<?php echo $row['TRN'];?>" readonly></td>
                                        <td>Name:<input type="text" class="form-control" name="txtfname" value="<?php echo $row['name'];?>" readonly></td>
                                        <td>Year:<input type="text" class="form-control" name="txtfyear" value="<?php echo $row['year'];?>" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Sem:<input type="text" class="form-control" name="txtfsem" value="<?php echo $row['sem'];?>" readonly></td>
                                        <td>Payment:<select class="form-control" name="fpayment" id="ppayment" onChange="textboxs();"  width="10px">
                                <option value="">Select Payment Type</option>
                                <option value="Cash">Cash</option>
                                <option value="Cheque">Cheque</option>
                                </select>
                                        </td>
                                        <td colspan="2">Balance:<input type="text" class="form-control" name="txtbalance" value="<?php echo $row['balance'];?>" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Paid Fees:<input type="text" class="form-control" name="txtfpaid" placeholder="Paid Fees" required></td>
                                        <td>Cheque No:<input type="text" class="form-control" name="txtchequeno" id="txtchequno" placeholder="Cheque No" required></td>
                                        <td colspan="2">Cheque Date:<input type="date" class="form-control" name="txtchequedate" id="txtchequd" placeholder="Cheque Date" ></td>
                                         
                                    </tr>
                                    <tr>
                                         <td> Date:<input type="text" class="form-control" name="txtfdate" value="<?php echo date("d/m/Y");?>" readonly></td>
                                         <td>Fees:<input type="text" class="form-control" name="txttotal" value="<?php echo $row['total'];?>" readonly></td>
                                        <td colspan="2">Bank:<input type="text" class="form-control" name="txtbank"  id="utxtbank" placeholder="Bank" required></td> 
                                    </tr>

                                    <tr>
                                        <td colspan="3"> <input type = "submit" class="btn btn-danger"  value ="submit" name="update"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                                <?php

                                if(isset($_POST['update']))
                            {
                                    $name=$_POST['txtfname'];
                                    $prn=$_POST['txtprn'];
                                    $date=$_POST['txtfdate'];
                                    $total=$_POST['txttotal'];
                                    $balance=$_POST['txtbalance'];
                                    $paid="0";
                                    $payment=$_POST['fpayment'];
                                    $chequeno=$_POST['txtchequeno'];
                                    $chequedate=$_POST['txtchequedate'];
                                    $chequedate=strtotime($chequedate);
                                      $chequedate=date('d/m/Y',$chequedate);

                                    $bank=$_POST['txtbank'];
                                    $trn=$_POST['txttrn']; 
                                    $b=$balance-$paid;
                                    $year=$_POST['txtfyear'];
                                    $sem=$_POST['txtfsem'];
                                   
                                    if($balance=="0")
                                    {
                                        $paid="0";
                                        echo '<script type="text/javascript">alert("Full Paid Student...!!");</script>';
                                    }
                                    else
                                    {
                                         $query="insert into receipt(name,PRN,TRN,date,total,balance,paid,payment,chequeno,chequedate,bank,year,sem) values('$name','$prn','$trn','$date','$total','$b','$paid','$payment','$chequeno','$chequedate','$bank','$year','$sem')";
                                        mysqli_query($con,$query); 
                                        $msg=1;
                                        $paid=$_POST['txtfpaid'];
                                    }
                                }
                                else{
                                    $msg=0;   
                                }
                                mysqli_close($con); 
                                ?>
                            </div>
  </div>
                            <div class="tab-pane fade" id="updateback">
                              <h3 align="center">Update Backlog Fees</h3>
                              <hr>
                               <?php
                         if(isset($_POST['subs']))
                        {
                            include 'Conn.php';
                            $name=$_POST['txtsname'];
                            $sql="select * from blacklog where name like '%$name%' ORDER BY id DESC";
                            $result=$con->query($sql);
                            $row=$result->fetch_assoc();
                           
                    }
                 ?>
                              <form action="receipt.php" method="post">
                                 Name:<input class="form-control" list="browsers" name="txtsname">
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
             
                <?php
                              
                                   include 'Conn.php';
                                   $msg=0;
                                  if(isset($_POST['updteblf']))
                                    {
                                      $prn=$_POST['txtbluprn']; 
                                      $name=$_POST['txtbluname'];
                                      $subject=$_POST['txtblusuject'];
                                      $late=$_POST['txtblulfees']; 
                                      $fees=$_POST['txtblufees'];
                                      $blfees=$fees+$late;
                                      $paid=$_POST['txtblupaid']; 
                                    
                                      $balance=$_POST['txtblubfees'];
                                      $bf=$balance-$paid;
                                      $payment=$_POST['blupayment'];
                                      $chqun=$_POST['txtbluchqueno'];
                                      $chqud=$_POST['txtbluchqd']; 
                                      $chqud=strtotime($chqud);
                                      $chqud=date('d/m/Y',$chqud);
                                      $bank=$_POST['txtblbank'];
                                      $date=$_POST['txtbludate'];
                                      $seat=$_POST['txtblubank'];
                                      if($balance=="0")
                                      {
                                           echo '<script type="text/javascript">alert("Full Paid Student...!!");</script>';
                                      }
                                      else
                                      {
                                       $query="insert into blacklog(prn,name,subjects,fees,paid,balance,payment,chqueno,chqd,bank,date,seat,late) values('$prn','$name','$subject','$blfees','$paid','$bf','$payment','$chqun','$chqud','$bank','$date','$seat','$late')";
                                        mysqli_query($con,$query); 
                                        $msg=1;
                                      }
                                    }
                                    else
                                    {
                                      $msg=0;
                                    }

                                    ?> 
                                 </form>
            </div>
            <div class="tab-pane fade" id="confees">
                              <h3 align="center">Convocation Fees</h3>
                              <?php
                         if(isset($_POST['subs']))
                        {
                            include 'Conn.php';
                            $name=$_POST['txtsname'];
                            $sql="select * from result where name like '%$name%'";
                            $result=$con->query($sql);
                            $row=$result->fetch_assoc();


                            $mname="Convocation";
                            $msql="select * from mde where name like '%$mname%'";
                            $resultm=$con->query($msql);
                            $mrow=$resultm->fetch_assoc();
                    }
                 ?>
                
                              <form action="receipt.php" method="post">
                                Name:<input class="form-control" list="browsers" name="txtsname">
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
                   <input type = "submit" class="btn btn-primary"  value ="submit" name="subs">
                   <br/>
              </form> 
            
                <table class="table">
                    <form action="receipt.php" method="post">
                      <br/>
                      <tr>
                        <td colspan="3">Name:<input type="text" class="form-control" name="txtcnfname" value="<?php echo $row['name'];?>" readonly></td>
                       
                      </tr>
                      <tr>
                        <td>PRN:<input type="text" class="form-control" name="txtcnfprn" value="<?php echo $row['prn'];?>" readonly></td>
                        <td>Late Fees:<input type="text" class="form-control" name="txtcnflfs" id="txtcnflfs" required></td>
                        <td>Contact No:<input type="text" class="form-control" name="txtcnfnum" required></td>
                      </tr>
                      <tr>
                        <td colspan="1">Mode:<select class="form-control" name="mode" id="cfm" onChange="cflate();" width="10px"  required>
                                <option value="">Select fees</option>
                                <option value="Late Fees">Late Fees</option>
                                <option value="Without late fees">Without late fees</option>
                                </select></td>
                                <td>Remark:<input type="text" class="form-control" name="txtcnfremak" value="<?php echo $row['Mode'];?>" readonly></td>
                                <td>Date:<input type="text" class="form-control" name="txtcnfdate" value="<?php echo  date("d/m/Y");?>" readonly></td>
                      </tr>
                      <tr>
                         <td>Seat No:<input type="text" class="form-control" name="txtcfseat" value="<?php echo $row['seat'];?>" readonly></td>                        
                        <td>Fees:<input type="text" class="form-control" name="txtcnffees" value="<?php echo $mrow['fees'];?>" readonly></td>
                        <td>Paid Fees:<input type="text" class="form-control" name="txtcnfpaid"  required></td>
                      </tr>
                      <tr>
                        <td colspan="3"><input type = "submit" class="btn btn-primary"  value ="submit" name="confees"></td>
                      </tr>
                </table>
              </form>
              <?php
                if(isset($_POST['confees']))
                        {
                            include 'Conn.php';
                            $cfname=$_POST['txtcnfname'];
                            $cfseat=$_POST['txtcfseat'];
                            $cfprn=$_POST['txtcnfprn'];
                            $cffees=$_POST['txtcnffees'];
                            $cflate=$_POST['txtcnflfs'];
                            $cfpaid=$_POST['txtcnfpaid'];
                            $cfcontact=$_POST['txtcnfnum'];
                            $cfdate=$_POST['txtcnfdate'];
                            $cffin=$cflate+$cffees;
                          $query="insert into conf(name,seatn,prn,contact,late,fees,paid,date) values('$cfname','$cfseat','$cfprn','$cfcontact','$cflate','$cffin','$cfpaid','$cfdate')";
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
                                          <th>Seat No</th>
                                         <th>Fees</th>
                                        <th>Paid</th>     
                                        <th> Date</th>
                                        <th>Late Fees</th>
                                        <th>Print</th>
                                        <th>Late Fees Print </th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    include 'Conn.php';
                                   
                                    $sql="select * from conf ORDER BY id DESC ";
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
                                            <td><?php echo $row['seatn'];?></td>
                                          
                                           
                                        
                                            <td><?php echo $row['fees']?></td>
                                            <td><?php echo $row['paid']?></td>
                                             <td><?php echo $row['date']?></td>
                                            
                                            <td><?php echo $row['late']?></td>
                                            <td><a href="confees.php?varname=<?php echo $row['id'];?>">Print</a></td>
                                            <td><a href="confeeslate.php?varname=<?php echo $row['id'];?>">Late Print</a></td> 
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                  </table>
                                
                                  </div>

                                </div>
       </div>
                            <div class="tab-pane fade" id="back">
                              <h3 align="center">Backlog Form</h3>
                              <hr>
                               <?php
                         if(isset($_POST['subs']))
                        {
                            include 'Conn.php';
                            $name=$_POST['txtsname'];
                            $sql="select * from result where name like '%$name%'";
                            $result=$con->query($sql);
                           
                           

                           
                    }
                 ?>
                              <form action="receipt.php" method="post">
                                Name:<input class="form-control" list="browsers" name="txtsname">
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
                   <input type = "submit" class="btn btn-primary"  value ="submit" name="subs">
                   <br/>
              </form> 
              <?
             
              ?>
                                             
                          <table class="table">

                                 <form action="receipt.php" method="post">
                                   
                                   <?php
                                   include 'Conn.php';
                                  
                                      $inter="";
                                    $exter="";
                                 while($row=$result->fetch_assoc())
                                  {
                                  $subject=$row['subject']."\n".$row['interexter']."\n";
                                  echo $subject;
                                  
                                    $countarry= array("External");
                                     $countarryi= array("Internal");
                                  
                                    foreach ($countarry as $word) 
                                    {  
                                      $exter=substr_count($subject, $word); 
                                    }
                                    foreach ($countarryi as $wordi) 
                                    {
                                      $inter=substr_count($subject, $wordi);  
                                      
                                    }
                                  }  

                                   ?>
                                <br/> 
                                <tbody>
                                  <tr>
                                    <td>PRN:<input type="text" class="form-control" name="txtblprn" value="<?php $row=$result->fetch_assoc();  echo $row['prn'];?>" readonly></td>
                                    <td>Name:<input type="text" class="form-control" name="txtblname" value="<?php $row=$result->fetch_assoc(); echo $row['name'];?>" readonly></td>
                                    <td>Seat No:<input type="text" class="form-control" name="txtblseat" value="<?php $row=$result->fetch_assoc(); echo $row['seat'];?>" readonly></td>
                                    <td>Internal:<input type="text" class="form-control" name="txtinter" value="<?php  echo $inter;?>" readonly></td>
                                    <td>External:<input type="text" class="form-control" name="txtexter" value="<?php  echo $exter;?>" readonly></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2">Subject:<textarea class="form-control" name="txtblsuject"  readonly rows="4" cols="100"><?php 
                                   
                                while($row=$result->fetch_assoc())
                                {
                                    $sub=$row['subject']."\n".$row['interexter']."\n";
                                    echo $sub;

                                }


                                    ?></textarea></td>
                                    <?php
                                    include 'Conn.php';
                                       $mesql="select * from mde where name like '%External%'";
                                      $rte=$con->query($mesql);
                                      $re=$rte->fetch_assoc();
                                      $misql="select * from mde where name like '%Internal%'";
                                      $rti=$con->query($misql);
                                      $ri=$rti->fetch_assoc();
                                      $infes=$ri['fees'];
                                      $enfes=$re['fees'];
                                      $ti=$inter*$infes;
                                      $te=$exter*$enfes;
                                      $total=$ti+$te;

                                    ?>
                                    <td>Internal Fees:<input type="text" class="form-control" name="txtfeesinter" value="<?php echo $ri['fees'];?>" readonly></td>
                                    <td colspan="2">External Fees:<input type="text" class="form-control" name="txtfeesexter" value="<?php echo $re['fees'];?>" readonly></td>
                                  </tr>
                                  <tr>
                                  <td>Date:<input type="text" class="form-control" name="txtbldate" value="<?php echo  date("d/m/Y");?>" readonly></td>
                                  <td>Fees:<input type="text" class="form-control" name="txtblfees" value="<?php echo $total;?>" readonly></td>
                                  <td>Late Fees:<input type="text" class="form-control" name="txtbllfees"  required></td>
                                  <td colspan="2">Paid:<input type="text" class="form-control" name="txtblpaid" required></td>
                                  
                                  </tr>
                                  <tr>
                                    <td>Payment Type:<select class="form-control" name="blpayment" id="blfpayment" onChange="bltext();"  width="10px">
                                <option value="">Select Payment Type</option>
                                <option value="Cash">Cash</option>
                                <option value="Cheque">Cheque</option>
                                </select></td>
                                    <td>Cheque No:<input type="text" class="form-control" name="txtblchqueno" id="txtblfcheqno" placeholder="Cheque No" required></td>
                                    <td>Cheque Date:<input type="date" class="form-control" name="txtblchqd" id="txtblfcheqd" placeholder="Cheque Date" ></td>
                                    <td colspan="2">Bank:<input type="text" class="form-control" name="txtbbank"  id="txtblfbank" placeholder="Bank" required></td>
                                  </tr>
                                  <tr>
                                    <td colspan="4"><input type = "submit" class="btn btn-primary"  value ="submit" name="backlog"></td>
                                  </tr>
                                </tbody>  
                          </table> 
                                     
                                    <?php
                                    include 'Conn.php';
                                   $msg=0;
                                  if(isset($_POST['backlog']))
                                    {
                                      $prn=$_POST['txtblprn']; 
                                      $name=$_POST['txtblname'];
                                      $subject=$_POST['txtblsuject'];
                                      $late=$_POST['txtbllfees']; 
                                      $fees=$_POST['txtblfees'];
                                      $blfees=$fees+$late;
                                      $paid=$_POST['txtblpaid']; 
                                      $tb=$blfees-$paid;
                                      $balance=$tb;
                                      $payment=$_POST['blpayment'];
                                      $chqun=$_POST['txtblchqueno'];
                                      $chqud=$_POST['txtblchqd']; 
                                      $chqud=strtotime($chqud);
                                      $chqud=date('d/m/Y',$chqud);
                                      $bank=$_POST['txtblbank'];
                                      $date=$_POST['txtbldate'];
                                      $seat=$_POST['txtblseat'];
                                       $query="insert into blacklog(prn,name,subjects,fees,paid,balance,payment,chqueno,chqd,bank,date,seat,late) values('$prn','$name','$subject','$blfees','$paid','$balance','$payment','$chqun','$chqud','$bank','$date','$seat','$late')";
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
                                          <th>Seat No</th>
                                        
                                         <th>Subject</th>
                                       
                                         <th>Fees</th>
                                        <th>Paid</th>
                                        <th>Balance</th>
                                        <th> Date</th>
                                         <th>Payment</th>
                                         <th>Cheque No</th>
                                         <th>Cheque Date</th>
                                        <th>Bank</th>
                                        <th>Late Fees</th>
                                        <th>Print</th>
                                        <th>Late Fees Print </th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    include 'Conn.php';
                                   
                                    $sql="select * from blacklog ORDER BY id DESC ";
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
                                          
                                            <td><?php echo $row['subjects'];?></td>
                                        
                                            <td><?php echo $row['fees']?></td>
                                            <td><?php echo $row['paid']?></td>
                                            <td><?php echo $row['balance']?></td>
                                             <td><?php echo $row['date']?></td>
                                              <td><?php echo $row['payment']?></td>
                                             <td><?php echo $row['chqueno']?></td>
                                              <td><?php echo $row['chqd']?></td>
                                          <td><?php echo $row['bank']?></td>
                                            <td><?php echo $row['late']?></td>
                                            <td><a href="backfees.php?varname=<?php echo $row['id'];?>">Print</a></td>
                                            <td><a href="latefees.php?varname=<?php echo $row['id'];?>">Late Print</a></td>
                                             
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                  </table>
                                
                                  </div>

                                </div>
                            </div>
                            </div>
                               
                                  </div>

                          
                        
                         
                            <script>
  document.multiselect('#subj');
</script>
<script>
  document.multiselect('#txtname');
</script>
  <script>
  function data()
{
  e=document.getElementById("rmk").value;
  if(e=="Pass")
  {
     document.getElementById("subj").disabled = true;
     document.getElementById("mthd").disabled = true;
     document.getElementById("bfees").disabled = true;
     document.getElementById("mod").disabled = true;
     document.getElementById("blfees").disabled = true;

     document.getElementById("subj").value = "0";
     document.getElementById("mthd").value = "0";
     document.getElementById("bfees").value = "0";
     document.getElementById("mod").value = "0";
     document.getElementById("blfees").value = "0";
  }
  else
  {
     document.getElementById("subj").disabled = false;
     document.getElementById("mthd").disabled = false;
     document.getElementById("bfees").disabled = false;
     document.getElementById("mod").disabled = false;
     document.getElementById("blfees").disabled = false;
  }
}
  function rmak()
  {
    b=document.getElementById("mod").value;
    if(b=="Late fees")
    {
            document.getElementById("blfees").disabled = false;
document.getElementById("blfees").value=" ";
           
    }
    else
    {
        document.getElementById("blfees").disabled = true;
         
           
    }
  }

  function changetextbox()
  {
    y=document.getElementById("payment").value;
   
    if(y=="Cash")
    {
            document.getElementById("txtbank").disabled = true;
            document.getElementById("txtcheqno").disabled = true;
            document.getElementById("txtcheqd").disabled = true;
            document.getElementById("txtbank").value = "0";
            document.getElementById("txtcheqno").value = "0";
            document.getElementById("txtcheqd").value = "0";
    }
    else
    {
        document.getElementById("txtbank").disabled = false;
            document.getElementById("txtcheqno").disabled = false;
            document.getElementById("txtcheqd").disabled = false;

    }
    
}
function bltext()
{
  bl=document.getElementById("blfpayment").value;
  if(bl=="Cash")
  {
             document.getElementById("txtblfbank").disabled = true;
            document.getElementById("txtblfcheqno").disabled = true;
            document.getElementById("txtblfcheqd").disabled = true;
  }
  else
  {
              document.getElementById("txtblfbank").disabled = false;
            document.getElementById("txtblfcheqno").disabled = false;
            document.getElementById("txtblfcheqd").disabled = false;
  }
}
function textboxs()
{
    z=document.getElementById("ppayment").value;
   
    if(z=="Cash")
    {
            document.getElementById("utxtbank").disabled = true;
            document.getElementById("txtchequno").disabled = true;
            document.getElementById("txtchequd").disabled = true;
              document.getElementById("utxtbank").value = "0";
            document.getElementById("txtchequno").value = "0";
            document.getElementById("txtcheqd").value = "0";

    }
    else
    {
        document.getElementById("utxtbank").disabled = false;
            document.getElementById("txtchequno").disabled = false;
            document.getElementById("txtchequd").disabled = false;
    }
  }
    function text()
    {
     x=document.getElementById("payt").value;
    if(x=="Cash")
    {
      document.getElementById("txtub").disabled = true;
            document.getElementById("txtchqno").disabled = true;
            document.getElementById("txtchqd").disabled = true;
             document.getElementById("txtub").value = "0";
            document.getElementById("txtchqno").value = "0";
            document.getElementById("txtchqd").value = "0";
    }
      else
    {
        document.getElementById("txtub").disabled = false;
            document.getElementById("txtchqno").disabled = false;
            document.getElementById("txtchqd").disabled = false;
    }
}
function late()
{
  a=document.getElementById("m").value;
  if(a=="Late Fees")
    {
      document.getElementById("txtlte").disabled = false;        
    }
      else
    {
        document.getElementById("txtlte").disabled = true;         
    }
}

function cflate()
{
  ac=document.getElementById("cfm").value;
  if(ac=="Late Fees")
    {
     
      document.getElementById("txtcnflfs").disabled = false;

            
    }
      else
    {
        
        document.getElementById("txtcnflfs").disabled = true;
        
            
    }
}

function textbl()
  {
     bl=document.getElementById("bpayment").value;
     if(bl=="Cash")
     {
      document.getElementById("txtubbank").disabled = true;
            document.getElementById("txtblucheqno").disabled = true;
            document.getElementById("txtblucheqd").disabled = true;
            
     }
      else
    {
            document.getElementById("txtubbank").disabled = false;
            document.getElementById("txtblucheqno").disabled = false;
            document.getElementById("txtblucheqd").disabled = false;
            document.getElementById("txtcnflfs").disabled = false;

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
