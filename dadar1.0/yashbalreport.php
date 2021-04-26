<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'Includes/header.php';?>
</head>

<body>

   <?php include 'Includes/loader.php';?>

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
         <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="images/logo1.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo1.png" alt=""></span>
                    <span class="brand-title">
                       <!--  <img src="images/logo-text.png" alt=""> --><b style="color: white">YASH INFOTECH</b>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
       <?php include 'Includes/topmenu.php';?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       <?php include 'Includes/menu.php';?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <!-- Topbar -->
            <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Yash Balance Sheet</a></li>
                    </ol>
                </div>
            </div>
         
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Yash Balance Sheet</h4>
                                     <div class="default-tab">
                                        <ul class="nav nav-tabs mb-3" role="tablist">
                                           
                                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">FYBCA</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">SYBCA</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#contact">Direct SYBCA</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#message">TYBCA</a>
                                            </li>
                                             
                                        </ul>
                                         <div class="tab-content">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                                <form action="" method="POST">
                                                <table class="table table-striped table-bordered">
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
                                                             <option value="<?php echo $grd['id'];?>"><?php echo $grd['name']?></option>
                                                             <?php
                                                             }
                                                             ?>
                                                        </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="submit" name="btnsubmit" value="Submit" class="btn btn-outline-primary"></td>
                                                        </form>
                                                    </tr>
                                                </table>
                                                <table class="table table-striped table-bordered zero-configuration table-hover">
                                                <tr>
                                                    <th>SrNo</th>
                                                    <th>Student Name</th>
                                                    <th>Year</th>
                                                    <th>Total</th>
                                                    <th>Paid</th>
                                                    <th>Balance</th>
                                                </tr>
                                                <?php
                                                    include 'Includes/Conn.php';
                                                    if(isset($_POST['btnsubmit']))
                                                    {
                                                      $yrs=$_POST['txtadmyrs'];
                                                      $sql="select * from studentdt where coursename='Bachelor of Computer Applications-E-First Year' and admissionyrs='$yrs' order by fullname ASC";  
                                                    }
                                                    else
                                                    {
                                                        $sql="select * from studentdt where coursename='Bachelor of Computer Applications-E-First Year' and admissionyrs='2019-2020 Year' order by fullname ASC";
                                                    }
                                                    $result=$con->query($sql);
                                                    $sum=0;
                                                    $paid=0;
                                                    $tol=0;
                                                    $bal1=0;
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
                                                            
                                                            $recpsql="select SUM(Paid) as Paid, Total from receipt where FullName='$stid' and Receipttype='BCAFEES'  ORDER BY id DESC";
                                                            $recpresult=$con->query($recpsql);
                                                            $recprow=$recpresult->fetch_assoc();
                                                            $balance=$recprow['Total']-$recprow['Paid'];
                                                            
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
                                                         $sum+=$bal1;
                                                         $paid+=$recprow['Paid'];
                                                         $tol+=$recprow['Total'];
                                                ?>
                                                <tr class="table-success">
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
                                                <tr class="table-warning">
                                                    <td colspan="3" style="text-align: right;">Total Balance:</td>
                                                    <td><?php echo $tol;?></td>
                                                    <td><?php echo $paid;?></td>
                                                    <td><?php echo $sum;?></td>
                                                </tr>
                                            </table>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel">
                                                <table class="table table-striped table-bordered zero-configuration table-hover">
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
                                                    $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- Second Year' and admissionyrs='2019-2020 Year' order by fullname ASC";
                                                    $result=$con->query($sql);
                                                    $sum=0;
                                                                $paid=0;
                                                                $tol=0;
                                                                $bal1=0;
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
                                                        
                                                        $sum+=$bal1;
                                                          $paid+=$recprow['Paid'];
                                                          $tol+=$recprow['Total'];
                                                            
                                                ?>
                                                <tr class="table-success">
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
                                                  <tr class="table-warning">
                                                    <td colspan="3" style="text-align: right;">Total Balance:</td>
                                                    <td><?php echo $tol;?></td>
                                                    <td><?php echo $paid;?></td>
                                                    <td><?php echo $sum;?></td>
                                                </tr>
                                            </table> 
                                            </div>
                                            <div class="tab-pane fade" id="contact" role="tabpanel">
                                                <table class="table table-striped table-bordered zero-configuration table-hover">
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
                                                    $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- Direct Second' and admissionyrs='2019-2020 Year' order by fullname ASC";
                                                    $result=$con->query($sql);
                                                     $sum=0;
                                                                $paid=0;
                                                                $tol=0;
                                                                $bal1=0;
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
                                                        
                                                        $sum+=$bal1;
                                                          $paid+=$recprow['Paid'];
                                                          $tol+=$recprow['Total'];
                                                ?>
                                                <tr class="table-success">
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
                                                 <tr class="table-warning">
                                                    <td colspan="3" style="text-align: right;">Total Balance:</td>
                                                    <td><?php echo $tol;?></td>
                                                    <td><?php echo $paid;?></td>
                                                    <td><?php echo $sum;?></td>
                                                </tr>
                                            </table> 
                                            </div>
                                            <div class="tab-pane fade" id="message" role="tabpanel">
                                                 <table class="table table-striped table-bordered zero-configuration table-hover">
                                               <tr>
                                                    <th>SrNo</th>
                                                    <th>Student Name</th>
                                                    <th>Year</th>
                                                    <th>Total</th>
                                                    <th>Paid</th>
                                                    <th>Balance</th>
                                                </tr>
                                                <?php
                                                    include 'Includes/Conn.php';
                                                    $sum=0;
                                                                $paid=0;
                                                                $tol=0;
                                                                $bal1=0;
                                                    $sql="select * from studentdt where coursename='Bachelor of Computer Applications- R- Third Year' and admissionyrs='2019-2020 Year' order by fullname ASC";
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
                                                            
                                                            $feessql="select * from fees where name='$course' and mode='$feesyrs'";
                                                            $feesresult=$con->query($feessql);
                                                            $feesrow=$feesresult->fetch_assoc();
                                                            
                                                            $recpsql="select SUM(Paid) as Paid, Total from receipt where FullName='$stid' and Receipttype='BCAFEES' and Year='".$feesrow['year']."' ORDER BY id DESC";
                                                            $recpresult=$con->query($recpsql);
                                                            $recprow=$recpresult->fetch_assoc();
                                                             $balance=$recprow['Total']-$recprow['Paid'];
                                                              
                                                        
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
                                                          $sum+=$bal1;
                                                          $paid+=$recprow['Paid'];
                                                          $tol+=$recprow['Total'];
                                                ?>
                                                <tr class="table-success">
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $row['fullname']?></td>
                                                    <td><?php echo $feesrow['year']?></td>
                                                    <td><?php echo $feesrow['fees']?></td>
                                                    <td><?php echo $recprow['Paid']?></td>
                                                    <td><?php echo $bal1; ?></td>
                                                </tr>
                                                <?php
                                                        }
                                                    }
                                                ?>
                                                <tr class="table-warning">
                                                    <td colspan="3" style="text-align: right;">Total Balance:</td>
                                                    <td><?php echo $tol;?></td>
                                                    <td><?php echo $paid;?></td>
                                                    <td><?php echo $sum;?></td>
                                                </tr>
                                            </table>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
              <!-- <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Backlog Details</h4>
                                <div class="table-responsive">
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> -->
 <!---Container Fluid-->
       <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by AV(Yash Infotech)</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
     </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
<?php include 'Includes/script.php';?>

</body>

</html>