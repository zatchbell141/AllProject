<?php session_start();
include 'Conn.php';
$user_check=$_SESSION['login_user'];
if(!isset($user_check))
{
    header("location: index.php");
    mysqli_close($con);
}
?>
<!doctype html>
<html class="no-js" lang="">

<?php include 'head.php' ?>
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->

    <body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
        <?php include 'header.php'?>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <?php include 'menumbile.php';?>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
   <?php include 'menu.php';?>
    <!-- Main Menu area End-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-windows"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Yash Balance Reports</h2>
                                        <p>Welcome to Yash Infotech <span class="bread-ntd"><?php echo $_SESSION['login_user'];?></span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Main Menu area End-->
     <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="widget-tabs-int tab-ctm-wp mg-t-30">
                                        <div class="tab-hd">
                            <h2>Balance Report</h2>
                        </div>
                          <form action="exportbalyashfees.php" method="POST">
                                                <table class="table table-striped" border="1">
                                                    <tr>
                                                        <td>Year:<select name="txtstudcoursename" class="form-control " required>
                                                           <option value="Bachelor of Computer Applications-E-First Year">Bachelor of Computer Applications-E-First Year</option>
                                                          <option value="Bachelor of Computer Applications- R- Second Year">Bachelor of Computer Applications- R- Second Year</option>
                                                          <option value="Bachelor of Computer Applications- R- Third Year">Bachelor of Computer Applications- R- Third Year</option>
                                                          <option value="Bachelor of Computer Applications- R- Direct Third Year">Bachelor of Computer Applications- R- Direct Third Year</option>
                                                          <option value="Bachelor of Computer Applications- R- GAP Third Year">Bachelor of Computer Applications- R- GAP Third Year</option>
                                                          <option value="Bachelor of Computer Applications- R- Direct Second">Bachelor of Computer Applications- R- Direct Second</option>
                                                          <option value="Bachelor of Computer Applications- R- GAP Second Year">Bachelor of Computer Applications- R- GAP Second Year</option>
                                                          </select></td>
                                                          <td>Admission Year:<select name="txtadmyrs" class="form-control">
                                                            <option value="">Select Admission Year </option>
                                                             <?php
                                                            include 'Includes/Conn.php';
                                                             $query1="select * from admissionyrs";
                                                              $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                                             foreach($gradenameresult as $grd)
                                                             {
                                                             ?>
                                                             <option value="<?php echo $grd['name'];?>"><?php echo $grd['name']?></option>
                                                             <?php
                                                             }
                                                             ?>
                                                        </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"><button id="submit" name="btnexport" class="btn btn-danger notika-btn-danger">Export</button></td>
                                                    </tr>
                                                </table>
                                                
                                            </form>
                                            
                                            
                            <form action="exportconsolebalyashfees.php" method="POST">
                                                <table class="table table-striped" border="1">
                                                    <tr>
                                                        <td colspan="2">Receipt Wise</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Year:<select name="txtstudcoursename" class="form-control " required>
                                                           <option value="Bachelor of Computer Applications-E-First Year">Bachelor of Computer Applications-E-First Year</option>
                                                          <option value="Bachelor of Computer Applications- R- Second Year">Bachelor of Computer Applications- R- Second Year</option>
                                                          <option value="Bachelor of Computer Applications- R- Third Year">Bachelor of Computer Applications- R- Third Year</option>
                                                          <option value="Bachelor of Computer Applications- R- Direct Third Year">Bachelor of Computer Applications- R- Direct Third Year</option>
                                                          <option value="Bachelor of Computer Applications- R- GAP Third Year">Bachelor of Computer Applications- R- GAP Third Year</option>
                                                          <option value="Bachelor of Computer Applications- R- Direct Second">Bachelor of Computer Applications- R- Direct Second</option>
                                                          <option value="Bachelor of Computer Applications- R- GAP Second Year">Bachelor of Computer Applications- R- GAP Second Year</option>
                                                          </select></td>
                                                          <td>Admission Year:<select name="txtadmyrs" class="form-control">
                                                            <option value="">Select Admission Year </option>
                                                             <?php
                                                            include 'Includes/Conn.php';
                                                             $query1="select * from admissionyrs";
                                                              $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                                             foreach($gradenameresult as $grd)
                                                             {
                                                             ?>
                                                             <option value="<?php echo $grd['name'];?>"><?php echo $grd['name']?></option>
                                                             <?php
                                                             }
                                                             ?>
                                                        </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"><button id="submit" name="btnconsoleexport" class="btn btn-danger notika-btn-danger">Export</button></td>
                                                    </tr>
                                                </table>
                                                
                                            </form>
                                            <form action="" method="POST">
                                                <table class="table table-striped" border="1">
                                                    <tr>
                                                        <td>Admission Year:<select name="txtadmyrs" class="form-control">
                                                            <option value="">Select Admission Year </option>
                                                             <?php
                                                            include 'Includes/Conn.php';
                                                             $query1="select * from admissionyrs";
                                                              $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                                             foreach($gradenameresult as $grd)
                                                             {
                                                             ?>
                                                             <option value="<?php echo $grd['name'];?>"><?php echo $grd['name']?></option>
                                                             <?php
                                                             }
                                                             ?>
                                                        </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td><button id="submit" name="btnsrch" class="btn btn-primary notika-btn-primary">Search</button></td>
                                                        </form>
                                                    </tr>
                                                </table>
                        <div class="widget-tabs-list">
                             <ul class="nav nav-tabs tab-nav-left">
                                <li class="active"><a data-toggle="tab" href="#home2">FYBCA</a></li>
                                <li><a data-toggle="tab" href="#menu12">SYBCA</a></li>
                                <li><a data-toggle="tab" href="#menu23">Direct SYBCA</a></li>
                                <li><a data-toggle="tab" href="#menu24">Gap SYBCA</a></li>
                                <li><a data-toggle="tab" href="#menu22">TYBCA</a></li>
                                <li><a data-toggle="tab" href="#menu25">Direct TYBCA</a></li>
                                <li><a data-toggle="tab" href="#menu26">Gap TYBCA</a></li>
                            </ul>
                            <div class="tab-content tab-custom-st tab-ctn-right">
                                <div id="home2" class="tab-pane fade in active">
                                    <div class="tab-ctn">
                                        <div class="table-responsive">
                                            
                                             
                                            <table class="table table-striped" >
                                                <tr>
                                                    <th>SrNo</th>
                                                    <th>Student Name</th>
                                                    <th>Year</th>
                                                    <th>Total</th>
                                                    <th>Paid</th>
                                                    <th>Balance</th>
                                                </tr>
                                                <?php
                                                    include 'Conn.php';
                                                    if(isset($_POST['btnsrch']))
                                                    {
                                                         $txtyrs=$_POST['txtadmyrs'];
                                                      $txtcourse=$_POST['txtstudcoursename'];
                                                      $sql="select * from studentdt where coursename='Bachelor of Computer Applications-E-First Year' and admissionyrs='$txtyrs' order by fullname ASC"; 
                                                    }
                                                    
                                                    else{
                                                        $sql="select * from studentdt where coursename='Bachelor of Computer Applications-E-First Year' and admissionyrs='2019-2020 Year' order by fullname ASC";
                                                    }
                                                    $result=$con->query($sql);
                                                    if($result->num_rows>0)
                                                    {
                                                        $no=0;
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                            $no++;
                                                            $stid=$row['fullname'];
                                                            $course=$row['coursename'];
                                                            $feesyrs=$row['feesplan'];
                                                            $yrs=$row['admissionyrs'];
                                                            
                                                            $feessql="select * from fees where name='$course'";
                                                            $feesresult=$con->query($feessql);
                                                            $feesrow=$feesresult->fetch_assoc();
                                                            
                                                            $recpsql="select SUM(Paid) as Paid, Total from receipt where FullName='$stid' and Receipttype='BCAFEES' and Year='FYBCA' ORDER BY id DESC";
                                                            $recpresult=$con->query($recpsql);
                                                            $recprow=$recpresult->fetch_assoc();
                                                            $balance=$recprow['Total']-$recprow['Paid'];
                                                            
                                                            $bal1=0;
                                                            $bal=$balance;
                                                        if($recprow['Total']=="")
                                                        {
                                                            $tolfeessql="select * from fees where name='$course' and mode='$feesyrs'";
                                                            $tolfeesresult=$con->query($tolfeessql);
                                                            $tolfeesrow=$tolfeesresult->fetch_assoc();
                                                            $bal1=$tolfeesrow['BCAFEES'];
                                                        }
                                                        else
                                                        {
                                                            $bal1=$balance;
                                                        }
                                                ?>
                                                <tr class="success">
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $row['fullname']?></td>
                                                    <td><?php echo $feesrow['year']?></td>
                                                    <td><?php echo $recprow['Total']?></td>
                                                    <td><?php echo $recprow['Paid']?></td>
                                                    <td><?php echo $bal1;?></td>
                                                </tr>
                                                <?php
                                                        }
                                                    }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu12" class="tab-pane fade">
                                    <div class="tab-ctn">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>SrNo</th>
                                                    <th>Student Name</th>
                                                    <th>Year</th>
                                                    <th>Total</th>
                                                    <th>Paid</th>
                                                    <th>Balance</th>
                                                </tr>
                                                <?php
                                                    include 'Conn.php';
                                                    if(isset($_POST['btnsrch'])){
                                                        
                                                      $txtyrs=$_POST['txtadmyrs'];
                                                      $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- Second Year' and admissionyrs='$txtyrs' order by fullname ASC"; 
                                                    }
                                                    else{
                                                        $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- Second Year' and admissionyrs='2019-2020 Year' order by fullname ASC";
                                                    }
                                                    $result=$con->query($sql);
                                                    if($result->num_rows>0)
                                                    {
                                                        $no=0;
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                            $no++;
                                                            $stid=$row['fullname'];
                                                            $course=$row['coursename'];
                                                            $feesyrs=$row['feesplan'];
                                                            $feessql="select * from fees where name='$course' ";
                                                            $feesresult=$con->query($feessql);
                                                            $feesrow=$feesresult->fetch_assoc();
                                                            
                                                            $yrs=$row['admissionyrs'];
                                                            $recpsql="select SUM(Paid) as Paid, Total from receipt where FullName='$stid' and Receipttype='BCAFEES' and Year='".$feesrow['year']."' ORDER BY id DESC";
                                                            $recpresult=$con->query($recpsql);
                                                            $recprow=$recpresult->fetch_assoc();
                                                            
                                                            $balance=$recprow['Total']-$recprow['Paid'];
                                                            $bal1=0;
                                                            $bal=$balance;
                                                        if($recprow['Total']=="")
                                                        {
                                                            $tolfeessql="select * from fees where name='$course' and mode='$feesyrs'";
                                                            $tolfeesresult=$con->query($tolfeessql);
                                                            $tolfeesrow=$tolfeesresult->fetch_assoc();
                                                            $bal1=$tolfeesrow['fees'];
                                                        }
                                                        else
                                                        {
                                                            $bal1=$balance;
                                                        }
                                                            
                                                ?>
                                                <tr class="success">
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $row['fullname']?></td>
                                                    <td><?php echo $feesrow['year']?></td>
                                                    <td><?php echo $recprow['Total']?></td>
                                                    <td><?php echo $recprow['Paid']?></td>
                                                    <td><?php echo $bal1;?></td>
                                                </tr>
                                                <?php
                                                        }
                                                    }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu23" class="tab-pane fade">
                                    <div class="tab-ctn">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>SrNo</th>
                                                    <th>Student Name</th>
                                                    <th>Year</th>
                                                    <th>Total</th>
                                                    <th>Paid</th>
                                                    <th>Balance</th>
                                                </tr>
                                                <?php
                                                    include 'Conn.php';
                                                     if(isset($_POST['btnsrch'])){
                                                      $txtyrs=$_POST['txtadmyrs'];
                                                      $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- Direct Second' and admissionyrs='$txtyrs' order by fullname ASC"; 
                                                    }
                                                    else{
                                                        $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- Direct Second' and admissionyrs='2019-2020 Year' order by fullname ASC";
                                                    }
                                                    $result=$con->query($sql);
                                                    if($result->num_rows>0)
                                                    {
                                                        $no=0;
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                            $no++;
                                                            $stid=$row['fullname'];
                                                            $course=$row['coursename'];
                                                            $feesyrs=$row['feesplan'];
                                                            $feessql="select * from fees where name='$course'";
                                                            $feesresult=$con->query($feessql);
                                                            $feesrow=$feesresult->fetch_assoc();
                                                            
                                                            $yrs=$row['admissionyrs'];
                                                            $recpsql="select SUM(Paid) as Paid, Total from receipt where FullName='$stid' and Receipttype='BCAFEES' and Year='".$feesrow['year']."' ORDER BY id DESC";
                                                            $recpresult=$con->query($recpsql);
                                                            $recprow=$recpresult->fetch_assoc();
                                                            
                                                             $balance=$recprow['Total']-$recprow['Paid'];
                                                             
                                                              $bal1=0;
                                                            $bal=$balance;
                                                        if($recprow['Total']=="")
                                                        {
                                                            $tolfeessql="select * from fees where name='$course' and mode='$feesyrs'";
                                                            $tolfeesresult=$con->query($tolfeessql);
                                                            $tolfeesrow=$tolfeesresult->fetch_assoc();
                                                            $bal1=$tolfeesrow['fees'];
                                                        }
                                                        else
                                                        {
                                                            $bal1=$balance;
                                                        }
                                                ?>
                                                <tr class="success">
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $row['fullname']?></td>
                                                    <td><?php echo $feesrow['year']?></td>
                                                    <td><?php echo $recprow['Total']?></td>
                                                    <td><?php echo $recprow['Paid']?></td>
                                                    <td><?php echo $bal1;?></td>
                                                </tr>
                                                <?php
                                                        }
                                                    }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu24" class="tab-pane fade">
                                    <div class="tab-ctn">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>SrNo</th>
                                                    <th>Student Name</th>
                                                    <th>Year</th>
                                                    <th>Total</th>
                                                    <th>Paid</th>
                                                    <th>Balance</th>
                                                </tr>
                                                <?php
                                                    include 'Conn.php';
                                                     if(isset($_POST['btnsrch'])){
                                                      $txtyrs=$_POST['txtadmyrs'];
                                                      $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- GAP Second Year' and admissionyrs='$txtyrs' order by fullname ASC"; 
                                                    }
                                                    else{
                                                        $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- GAP Second Year' and admissionyrs='2019-2020 Year' order by fullname ASC";
                                                    }
                                                    $result=$con->query($sql);
                                                    if($result->num_rows>0)
                                                    {
                                                        $no=0;
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                            $no++;
                                                            $stid=$row['fullname'];
                                                            $course=$row['coursename'];
                                                            $feesyrs=$row['feesplan'];
                                                            $feessql="select * from fees where name='$course'";
                                                            $feesresult=$con->query($feessql);
                                                            $feesrow=$feesresult->fetch_assoc();
                                                            
                                                            $yrs=$row['admissionyrs'];
                                                            $recpsql="select SUM(Paid) as Paid, Total from receipt where FullName='$stid' and Receipttype='BCAFEES' and Year='".$feesrow['year']."' ORDER BY id DESC";
                                                            $recpresult=$con->query($recpsql);
                                                            $recprow=$recpresult->fetch_assoc();
                                                            
                                                             $balance=$recprow['Total']-$recprow['Paid'];
                                                             
                                                              $bal1=0;
                                                            $bal=$balance;
                                                        if($recprow['Total']=="")
                                                        {
                                                            $tolfeessql="select * from fees where name='$course' and mode='$feesyrs'";
                                                            $tolfeesresult=$con->query($tolfeessql);
                                                            $tolfeesrow=$tolfeesresult->fetch_assoc();
                                                            $bal1=$tolfeesrow['fees'];
                                                        }
                                                        else
                                                        {
                                                            $bal1=$balance;
                                                        }
                                                ?>
                                                <tr class="success">
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $row['fullname']?></td>
                                                    <td><?php echo $feesrow['year']?></td>
                                                    <td><?php echo $recprow['Total']?></td>
                                                    <td><?php echo $recprow['Paid']?></td>
                                                    <td><?php echo $bal1;?></td>
                                                </tr>
                                                <?php
                                                        }
                                                    }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu22" class="tab-pane fade">
                                    <div class="tab-ctn">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>SrNo</th>
                                                    <th>Student Name</th>
                                                    <th>Year</th>
                                                    <th>Total</th>
                                                    <th>Paid</th>
                                                    <th>Balance</th>
                                                </tr>
                                                <?php
                                                    include 'Conn.php';
                                                     if(isset($_POST['btnsrch'])){
                                                      $txtyrs=$_POST['txtadmyrs'];
                                                      $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- Third Year' and admissionyrs='$txtyrs' order by fullname ASC"; 
                                                    }
                                                    else{
                                                        $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- Third Year' and admissionyrs='2019-2020 Year' order by fullname ASC";
                                                    }
                                                    $result=$con->query($sql);
                                                    if($result->num_rows>0)
                                                    {
                                                        $no=0;
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                            $no++;
                                                            $stid=$row['fullname'];
                                                            $course=$row['coursename'];
                                                            $feesyrs=$row['feesplan'];
                                                            $feessql="select * from fees where name='$course'";
                                                            $feesresult=$con->query($feessql);
                                                            $feesrow=$feesresult->fetch_assoc();
                                                            
                                                            $yrs=$row['admissionyrs'];
                                                            $recpsql="select SUM(Paid) as Paid, Total from receipt where FullName='$stid' and Receipttype='BCAFEES' and Year='".$feesrow['year']."' ORDER BY id DESC";
                                                            $recpresult=$con->query($recpsql);
                                                            $recprow=$recpresult->fetch_assoc();
                                                            
                                                             $balance=$recprow['Total']-$recprow['Paid'];
                                                             
                                                              $bal1=0;
                                                            $bal=$balance;
                                                        if($recprow['Total']=="")
                                                        {
                                                            $tolfeessql="select * from fees where name='$course' and mode='$feesyrs'";
                                                            $tolfeesresult=$con->query($tolfeessql);
                                                            $tolfeesrow=$tolfeesresult->fetch_assoc();
                                                            $bal1=$tolfeesrow['fees'];
                                                        }
                                                        else
                                                        {
                                                            $bal1=$balance;
                                                        }
                                                ?>
                                                <tr class="success">
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $row['fullname']?></td>
                                                    <td><?php echo $feesrow['year']?></td>
                                                    <td><?php echo $recprow['Total']?></td>
                                                    <td><?php echo $recprow['Paid']?></td>
                                                    <td><?php echo $bal1;?></td>
                                                </tr>
                                                <?php
                                                        }
                                                    }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu25" class="tab-pane fade">
                                    <div class="tab-ctn">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>SrNo</th>
                                                    <th>Student Name</th>
                                                    <th>Year</th>
                                                    <th>Total</th>
                                                    <th>Paid</th>
                                                    <th>Balance</th>
                                                </tr>
                                                <?php
                                                    include 'Conn.php';
                                                     if(isset($_POST['btnsrch'])){
                                                      $txtyrs=$_POST['txtadmyrs'];
                                                      $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- Direct Third Year' and admissionyrs='$txtyrs' order by fullname ASC"; 
                                                    }
                                                    else{
                                                        $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- Direct Third Year' and admissionyrs='2019-2020 Year' order by fullname ASC";
                                                    }
                                                    $result=$con->query($sql);
                                                    if($result->num_rows>0)
                                                    {
                                                        $no=0;
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                            $no++;
                                                            $stid=$row['fullname'];
                                                            $course=$row['coursename'];
                                                            $feesyrs=$row['feesplan'];
                                                            $feessql="select * from fees where name='$course'";
                                                            $feesresult=$con->query($feessql);
                                                            $feesrow=$feesresult->fetch_assoc();
                                                            
                                                            $yrs=$row['admissionyrs'];
                                                            $recpsql="select SUM(Paid) as Paid, Total from receipt where FullName='$stid' and Receipttype='BCAFEES' and Year='".$feesrow['year']."' ORDER BY id DESC";
                                                            $recpresult=$con->query($recpsql);
                                                            $recprow=$recpresult->fetch_assoc();
                                                            
                                                             $balance=$recprow['Total']-$recprow['Paid'];
                                                             
                                                              $bal1=0;
                                                            $bal=$balance;
                                                        if($recprow['Total']=="")
                                                        {
                                                            $tolfeessql="select * from fees where name='$course' and mode='$feesyrs'";
                                                            $tolfeesresult=$con->query($tolfeessql);
                                                            $tolfeesrow=$tolfeesresult->fetch_assoc();
                                                            $bal1=$tolfeesrow['fees'];
                                                        }
                                                        else
                                                        {
                                                            $bal1=$balance;
                                                        }
                                                ?>
                                                <tr class="success">
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $row['fullname']?></td>
                                                    <td><?php echo $feesrow['year']?></td>
                                                    <td><?php echo $recprow['Total']?></td>
                                                    <td><?php echo $recprow['Paid']?></td>
                                                    <td><?php echo $bal1;?></td>
                                                </tr>
                                                <?php
                                                        }
                                                    }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu26" class="tab-pane fade">
                                    <div class="tab-ctn">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <th>SrNo</th>
                                                    <th>Student Name</th>
                                                    <th>Year</th>
                                                    <th>Total</th>
                                                    <th>Paid</th>
                                                    <th>Balance</th>
                                                </tr>
                                                <?php
                                                    include 'Conn.php';
                                                     if(isset($_POST['btnsrch'])){
                                                      $txtyrs=$_POST['txtadmyrs'];
                                                      $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- GAP Third Year' and admissionyrs='$txtyrs' order by fullname ASC"; 
                                                    }
                                                    else{
                                                        $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- GAP Third Year' and admissionyrs='2019-2020 Year' order by fullname ASC";
                                                    }
                                                    $result=$con->query($sql);
                                                    if($result->num_rows>0)
                                                    {
                                                        $no=0;
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                            $no++;
                                                            $stid=$row['fullname'];
                                                            $course=$row['coursename'];
                                                            $feesyrs=$row['feesplan'];
                                                            $feessql="select * from fees where name='$course'";
                                                            $feesresult=$con->query($feessql);
                                                            $feesrow=$feesresult->fetch_assoc();
                                                            
                                                            $yrs=$row['admissionyrs'];
                                                            $recpsql="select SUM(Paid) as Paid, Total from receipt where FullName='$stid' and Receipttype='BCAFEES' and Year='".$feesrow['year']."' ORDER BY id DESC";
                                                            $recpresult=$con->query($recpsql);
                                                            $recprow=$recpresult->fetch_assoc();
                                                            
                                                             $balance=$recprow['Total']-$recprow['Paid'];
                                                             
                                                              $bal1=0;
                                                            $bal=$balance;
                                                        if($recprow['Total']=="")
                                                        {
                                                            $tolfeessql="select * from fees where name='$course' and mode='$feesyrs'";
                                                            $tolfeesresult=$con->query($tolfeessql);
                                                            $tolfeesrow=$tolfeesresult->fetch_assoc();
                                                            $bal1=$tolfeesrow['fees'];
                                                        }
                                                        else
                                                        {
                                                            $bal1=$balance;
                                                        }
                                                ?>
                                                <tr class="success">
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $row['fullname']?></td>
                                                    <td><?php echo $feesrow['year']?></td>
                                                    <td><?php echo $recprow['Total']?></td>
                                                    <td><?php echo $recprow['Paid']?></td>
                                                    <td><?php echo $bal1;?></td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="js/chat/moment.min.js"></script>
    <script src="js/chat/jquery.chat.js"></script>

    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================     <script src="js/tawk-chat.js"></script>-->
</body>
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
</html>