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
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                   <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <?php
                        include 'Includes/Conn.php';
                        $date1=date('Y-m-d');
                         $bcasql="SELECT SUM(Paid) as Total,Date FROM `receipt` WHERE `Receipttype`='BCAFEES' and Date='$date1'";
                         $bcaresult=$con->query($bcasql);
                         $bcarow=$bcaresult->fetch_assoc();
                      ?>
                                <h3 class="card-title text-white">Receipts</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">RS.<?php echo $bcarow['Total'];?></h2>
                                    <p class="text-white mb-0">Date:<?php echo $bcarow['Date'];?></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                 <?php
                        include 'Includes/Conn.php';
                         $bcasql="SELECT SUM(Paid) as Total ,Date FROM `receipt` WHERE `Receipttype`='BCABACKLOG' and Date='$date1'";
                         $bcaresult=$con->query($bcasql);
                         $bcarow=$bcaresult->fetch_assoc();
                      ?>
                                <h3 class="card-title text-white">Backlog Receipt</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">RS.<?php echo $bcarow['Total'];?></h2>
                                    <p class="text-white mb-0">Date:<?php echo $bcarow['Date'];?></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                     <?php
                        include 'Includes/Conn.php';
                         $bcasql="SELECT SUM(Paid) as Total,Date FROM `receipt` WHERE `Receipttype`='BCACONVOCATION' and Date='$date1'";
                         $bcaresult=$con->query($bcasql);
                         $bcarow=$bcaresult->fetch_assoc();
                      ?>
                                <h3 class="card-title text-white">Convocation Receipt</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">RS.<?php echo $bcarow['Total'];?></h2>
                                    <p class="text-white mb-0">Date:<?php echo $bcarow['Date'];?></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Other Receipt</h3>
                                 <?php
                        include 'Includes/Conn.php';
                         $bcasql="SELECT SUM(Paid) as Total,Date FROM `receipt` WHERE `Receipttype`='BCAOTHER' and Date='$date1'";
                         $bcaresult=$con->query($bcasql);
                         $bcarow=$bcaresult->fetch_assoc();

                      ?>
                                <div class="d-inline-block">
                                    <h2 class="text-white">RS.<?php echo $bcarow['Total'];?></h2>
                                    <p class="text-white mb-0">Date:<?php echo $bcarow['Date'];?></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                     <?php
                                    include 'Includes/Conn.php';
                                    $datetodo=date('Y-m-d');
                                    $salsql="SELECT SUM(sal) as Salary,class FROM salary where sessiondate='$datetodo' GROUP by class";
                                    $salresult=$con->query($salsql);
                                    if($salresult->num_rows>0)
                                    {
                                        while($salrow=$salresult->fetch_assoc())
                                        {
                                        
   
                                            ?>
                     <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white"><?php echo $salrow['class'];?></h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $salrow['Salary'];?></h2>
                                    <p class="text-white mb-0"><?php echo $salrow['sessiondate'];?></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                     <?php
                                        }
                                    }
                     ?>
                     <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <?php
                                    $datetodo=date('Y-m-d');
                                    $stdsql="select SUM(sal) as Renumation from salary where sessiondate='$datetodo'";
                                    $stdresult=$con->query($stdsql);
                                    $stdrow=$stdresult->fetch_assoc();
                                ?>
                                <h3 class="card-title text-white">Total Staff Renumnation</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $stdrow['Renumation'];?></h2>
                                    <p class="text-white mb-0"><?php echo $stdrow['sessiondate'];?></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Today Cheque Collection</h4>
                                <div id="activity">
                                    <table class="table table-striped table-bordered zero-configuration table-hover">
                                        <thead>
                                            <tr>
                                                <th>Receipt Type</th>
                                                <th>Date</th>
                                                <th>Cheque No</th>
                                                <th>Cheque Date</th>
                                                <th>Paid</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                    include 'Includes/Conn.php';
                                    $datetodo=date('Y-m-d');
                                    $sqlchq="SELECT * FROM `receipt` where PaymentType='Cheque' and Receipttype='BCAFEES' and Date='$datetodo' order by id desc";
                                    $resultchq=$con->query($sqlchq);
                                    if($resultchq->num_rows>0)
                                    {
                                        while($rowchq=$resultchq->fetch_assoc())
                                        {
                                        
   
                                            ?>
                                            <tr>
                                                <td><b><?php echo $rowchq['Receipttype'];?></b></td>
                                                <td><?php echo $rowchq['Date'];?></td>
                                                <td><?php echo $rowchq['ChequeNo'];?></td>
                                                <td><?php echo $rowchq['ChequeDate'];?></td>
                                                <td><?php echo $rowchq['Paid'];?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Today Cash Collection</h4>
                                <div id="activity">
                                     <table class="table table-striped table-bordered zero-configuration table-hover">
                                        <thead>
                                            <tr>
                                                <th>Receipt Type</th>
                                                <th>Date</th>
                                                <th>Cheque No</th>
                                                <th>Cheque Date</th>
                                                <th>Paid</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                    include 'Includes/Conn.php';
                                    $datetodo=date('Y-m-d');
                                    $sqlchq="SELECT * FROM `receipt` where PaymentType='Cash' and Receipttype='BCAFEES' and Date='$datetodo' order by id desc";
                                    $resultchq=$con->query($sqlchq);
                                    if($resultchq->num_rows>0)
                                    {
                                        while($rowchq=$resultchq->fetch_assoc())
                                        {
                                        
   
                                            ?>
                                            <tr>
                                                <td><b><?php echo $rowchq['Receipttype'];?></b></td>
                                                <td><?php echo $rowchq['Date'];?></td>
                                                <td><?php echo $rowchq['ChequeNo'];?></td>
                                                <td><?php echo $rowchq['ChequeDate'];?></td>
                                                <td><?php echo $rowchq['Paid'];?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bonafide Certificate</h4>
                                <div id="activity">
                                     <?php
                                    include 'Includes/Conn.php';
                                    $sql="SELECT * FROM `bonafide` where status='Process' order by id desc LIMIT 5";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                        
   
                                            ?>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <!--<img width="35" src="./images/avatar/1.jpg" class="mr-3 rounded-circle">-->
                                        <div class="media-body">
                                            <h5><?php echo $row['fullname']?></h5>
                                            <p class="mb-0">Subject:<?php echo $row['subject'];?></p>
                                            
                                        </div><span class="text-muted "><?php echo $row['appldate'];?></span>
                                    </div>
                                    <?php 
                                            
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Students Messages</h4>
                                <div id="activity">
                                     <?php
                                    include 'Includes/Conn.php';
                                    $sql="SELECT  * FROM `msg` order by id desc  LIMIT 5";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            $stdnm=$row['username'];
                                            $stdsql="select * from studreg where studentid='$stdnm'";
                                            $stdresult=$con->query($stdsql);
                                            $stdrow=$stdresult->fetch_assoc();
   
                                            ?>
                                    <div class="media border-bottom-1 pt-3 pb-3">
                                        <!--<img width="35" src="./images/avatar/1.jpg" class="mr-3 rounded-circle">-->
                                        <div class="media-body">
                                            <h5><?php echo $stdrow['fullname'];?></h5>
                                            <p class="mb-0"><?php echo $row['msg'];?></p>
                                        </div><span class="text-muted "><?php echo $row['date'];?></span>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                </div>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Staff Name</th>
                                                    <th>Year</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                    <th>Duration</th>
                                                    <th>Renumation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php
                                    include 'Includes/Conn.php';
                                    $datetodo=date('Y-m-d');
                                    $saldsql="SELECT * FROM salary where sessiondate='$datetodo'";
                                    $saldresult=$con->query($saldsql);
                                    if($saldresult->num_rows>0)
                                    {
                                        $no=0;
                                        while($saldrow=$saldresult->fetch_assoc())
                                        {
                                        
                                            $no++;
                                            ?>
                                            <tr>
                                               <td><?php echo $no++;?></td>
                                               <td><?php echo $saldrow['name'];?></td>
                                               <td><?php echo $saldrow['class'];?></td>
                                               <td><?php echo $saldrow['starttime'];?></td>
                                               <td><?php echo $saldrow['endtime'];?></td>
                                               <td><?php echo $saldrow['duration'];?></td>
                                               <td><?php echo $saldrow['sal'];?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- #/ container -->
        </div>
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
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
<?php include 'Includes/script.php';?>

</body>

</html>