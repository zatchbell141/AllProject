<!doctype html>
<html class="no-js" lang="">

<?php include 'head.php'; ?>
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {padding: 10px 24px;}
</style>
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
                                        <h2>Final Admission Reports</h2>
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
    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn" align="center">
                                <!--<table class="table table-striped">
                                    <tr>
                                        <td>Batch:<select class="form-control" name="txtmode">
                                              <?php
                                include 'Conn.php';
                                 $query1="select DISTINCT(mode) from fees";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['mode'];?>"><?php echo $grd['mode']?></option>
                                 <?php
                                 }
                                 ?>
                                        </select></td>
                                    </tr>
                                </table>-->
                                 <div class="col-sm-12">
                                     <div class="page-header">
                                    <div class="panel panel-primary">
                                    <div class="panel-heading">
                                      <h3 class="panel-title">Final Admission Reports</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table id="data-table-basic" class="table table-bordered  table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Student Name</th>
                                                <th>Fees</th>
                                                <th>Paid</th>
                                                <th>Balance</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                 <?php
                                                include 'Conn.php';
                                                $sql="select * from studentdt ORDER BY studentid DESC";
                                                $result=$con->query($sql);
                                                if($result->num_rows>0)
                                                {
                                                    $no;
                                                    while($row=$result->fetch_assoc())
                                                    {
                                                        $no++;
                                                         $name=$row['fullname'];
                                                         $coursename=$row['coursename'];
                                                        
                                                        $recsql="select SUM(Paid) as Paid,Total,Year,Receipttype,ReceiptMode  from receipt where FullName='$name' and Receipttype='BCAFEES'";
                                                        $recresult=$con->query($recsql);
                                                        if($recresult->num_rows>0)
                                                        {
                                                            while($recrow=$recresult->fetch_assoc())
                                                            { 
                                                                $mode=$recrow['ReceiptMode'];
                                                                $tmvsql="select SUM(Paid) as Paid,Total,Year,Receipttype  from receipt where FullName='$name' and Receipttype='TMVFEES'";
                                                                $tmvresult=$con->query($tmvsql);
                                                                $tmvrow=$tmvresult->fetch_assoc();
                                                                
                                                             
                                                                $tolrecpsql="select sum(fees+tmvFees) as Total from fees where mode='$mode' and `name`='$coursename'";
                                                                $tolrecpresult=$con->query($tolrecpsql);
                                                                $tolrecprow=$tolrecpresult->fetch_assoc();
                                                                
                                                                
                                                ?>
                                                <tr>
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $row['fullname'];?></td>
                                                    <td><?php echo $tolrecprow['Total'];?></td>
                                                    <td><?php echo $recrow['Paid']+$tmvrow['Paid'];?></td>
                                                    <td><?php echo $bal;?></td>
                                                     <td>
                                                    <?php
                                                        $total=$recrow['Total'];
                                                        $paid=$recrow['Paid'];
                                                        if($total==$paid)
                                                        {
                                                            
                                                            if($total=="" and $paid=="")
                                                                {
                                                                    
                                                                    echo  '<b style="color:#980b0b">Not Paid</b>';
                                                                }
                                                                else
                                                                {
                                                                    
                                                                        echo '<b style="color:green">Full Paid</b>';
                                                                    
                                                                }
                                                        }
                                                        else
                                                        {
                                                            echo  '<b style="color:red">Balance</b>';
                                                        }
                                                       
                                                    ?>
                                                </td>
                                                </tr>
                                                <?php
                                                    }
                                                        }
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                <th>Sr.No</th>
                                                <th>Student Name</th>
                                                <th>Fees</th>
                                                <th>Paid</th>
                                                <th>Balance</th>
                                                <th>Status</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-sm-12">
                                     <div class="page-header">
                                    <div class="panel panel-primary">
                                    <div class="panel-heading">
                                      <h3 class="panel-title">Yash Infotech Fees</h3>
                                    </div>
                                    <div class="panel-body">
                                       <div class="ex3">
                                        <table class="table table-stripted  table-hover">
                                            <thead>
                                            <tr>
                                                <th>Student Name</th>
                                                <th>Receipt Type</th>
                                                <th>Year</th>
                                                <th>Fees</th>
                                                <th>Paid</th>
                                                <th>Status</th>
                                            </tr>
                                           </thead>
                                           <tbody>
                                                <?php
                                                include 'Conn.php';
                                                $sql="select * from studentdt ORDER BY studentid DESC";
                                                $result=$con->query($sql);
                                                if($result->num_rows>0)
                                                {
                                                    while($row=$result->fetch_assoc())
                                                    {
                                                        $name=$row['fullname'];
                                                         $coursename=$row['coursename'];
                                                       $recsql="select SUM(Paid) as Paid,Total,Year,Receipttype  from receipt where FullName='$name' and Receipttype='BCAFEES'";
                                                        $recresult=$con->query($recsql);
                                                        if($recresult->num_rows>0)
                                                        {
                                                            while($recrow=$recresult->fetch_assoc())
                                                            { 
                                                               
                                                                /*$mode=$recrow['ReceiptMode'];
                                                                $tolrecpsql="select * from fees where  name='$coursename' and mode='$mode'";
                                                                $tolrecpresult=$con->query($tolrecpsql);
                                                                $tolrecprow=$tolrecpresult->fetch_assoc();*/
                                             
                                                ?>
                                                <tr>
                                                
                                                <td><?php echo $row['fullname']?></td>
                                                <td><b style="color:red"><?php echo $recrow['Receipttype']?></b></td>
                                                <td><?php echo $recrow['Year']?></td>
                                                <td><?php echo $recrow['Total']?></td>
                                                <td><?php echo $recrow['Paid']?></td>
                                                 
                                                <td>
                                                    <?php
                                                        $total=$recrow['Total'];
                                                        $paid=$recrow['Paid'];
                                                        if($total==$paid)
                                                        {
                                                            
                                                            if($total=="" and $paid=="")
                                                                {
                                                                    
                                                                    echo  '<b style="color:#980b0b">Not Paid</b>';
                                                                }
                                                                else
                                                                {
                                                                    
                                                                        echo '<b style="color:green">Full Paid</b>';
                                                                    
                                                                }
                                                        }
                                                        else
                                                        {
                                                            echo  '<b style="color:red">Balance</b>';
                                                        }
                                                       
                                                    ?>
                                                </td>
                                                </tr>
                                                <?php
                                                    }
                                                }
                                                    }
                                                }
                                                ?>
                                          </tbody>
                                          <tfoot>
                                              <tr>
                                                <th>Student Name</th>
                                                <th>Receipt Type</th>
                                                <th>Year</th>
                                                <th>Fees</th>
                                                <th>Paid</th>
                                                <th>Status</th>
                                            </tr>
                                          </tfoot>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                                <div class="col-sm-12">
                                     <div class="page-header">
                                    <div class="panel panel-primary">
                                    <div class="panel-heading">
                                      <h3 class="panel-title">TMV Fees</h3>
                                    </div>
                                    <div class="panel-body">
                                       <div class="ex3">
                                         <table id="data-table-basic" class="table table-bordered  table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Student Name</th>
                                                <th>Receipt Type</th>
                                                <th>Year</th>
                                                <th>Fees</th>
                                                <th>Paid</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                             <?php
                                                include 'Conn.php';
                                                $sql="select * from studentdt ORDER BY studentid DESC";
                                                $result=$con->query($sql);
                                                if($result->num_rows>0)
                                                {
                                                    while($row=$result->fetch_assoc())
                                                    {
                                                        $name=$row['fullname'];
                                                         $coursename=$row['coursename'];
                                                       $recsql="select SUM(Paid) as Paid,Total,Year,Receipttype  from receipt where FullName='$name' and Receipttype='TMVFEES'";
                                                        $recresult=$con->query($recsql);
                                                        if($recresult->num_rows>0)
                                                        {
                                                            $no;
                                                            while($recrow=$recresult->fetch_assoc())
                                                            { 
                                                               
                                                                /*$mode=$recrow['ReceiptMode'];
                                                                $tolrecpsql="select * from fees where  name='$coursename' and mode='$mode'";
                                                                $tolrecpresult=$con->query($tolrecpsql);
                                                                $tolrecprow=$tolrecpresult->fetch_assoc();*/
                                                                $no++;
                                             
                                                ?>
                                                <tr>
                                                    <td><?php echo $no;?></td>
                                                <td><?php echo $row['fullname']?></td>
                                                <td><b style="color:red"><?php echo $recrow['Receipttype']?></b></td>
                                                <td><?php echo $recrow['Year']?></td>
                                                <td><?php echo $recrow['Total']?></td>
                                                <td><?php echo $recrow['Paid']?></td>
                                                <td>
                                                    <?php
                                                        $total=$recrow['Total'];
                                                        $paid=$recrow['Paid'];
                                                        if($total==$paid)
                                                        {
                                                            
                                                            if($total=="" and $paid=="")
                                                                {
                                                                    
                                                                    echo  '<b style="color:#980b0b">Not Paid</b>';
                                                                }
                                                                else
                                                                {
                                                                    
                                                                        echo '<b style="color:green">Full Paid</b>';
                                                                    
                                                                }
                                                        }
                                                        else
                                                        {
                                                            echo  '<b style="color:red">Balance</b>';
                                                        }
                                                            }
                                                        }
                                                    }
                                                }
                                                    ?>
                                                    </tbody>
                                                    <tfoot>
                                    <tr>
                                                <th>Student Name</th>
                                                <th>Receipt Type</th>
                                                <th>Fees</th>
                                                <th>Paid</th>
                                                <th>Balance</th>
                                                <th>Status</th>
                                    </tr>
                                </tfoot>
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
    <!-- bootstrap select JS
        ============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================     <script src="js/tawk-chat.js"></script>-->
</body>
    </html>