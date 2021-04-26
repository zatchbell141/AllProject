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
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-ctn" align="center">
                           <div class="tab-hd">
                            <h2>Export In Excel</h2>
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
                                </div>
                            </div>
                        </div>
                </div>
        </div>
    </div>
    <div class="sale-statistic-area">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-ctn" align="center">
                            <form action="" method="POST">
                                <table class="table table-striped" border="1">
                                                    <tr>
                                                        <td>Year:<select name="txtstudcoursename" class="form-control " required>
                                                          <option value="Bachelor of Computer Applications-E-First Year">Bachelor of Computer Applications-E-First Year</option>
                                                          <option value="Bachelor of Computer Applications- R- Second Year">Bachelor of Computer Applications- R- Second Year</option>
                                                          <option value="Bachelor of Computer Applications- R- GAP Second Year">Bachelor of Computer Applications- R- GAP Second Year</option>
                                                          <option value="Bachelor of Computer Applications- R- Third Year">Bachelor of Computer Applications- R- Third Year</option>
                                                          <option value="Bachelor of Computer Applications- R- Direct Third Year">Bachelor of Computer Applications- R- Direct Third Year</option>
                                                          <option value="Bachelor of Computer Applications- R- GAP Third Year">Bachelor of Computer Applications- R- GAP Third Year</option>
                                                          <option value="Bachelor of Computer Applications- R- Direct Second">Bachelor of Computer Applications- R- Direct Second</option>
                                                          
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
                                                        <td colspan="2"><button id="submit" name="btnsearch" class="btn btn-primary notika-btn-primary">Search</button></td>
                                                    </tr>
                                                </table>
                                                </form>
                                                
                                                <table  class="table table-bordered  table-hover" border="1">
                                                    <thead>
                                                    <tr>
                                                        <th>Sr.No</th>
                                                        <th>Admission Year</th>
                                                        <th>Name</th>
                                                        <th>Year</th>
                                                        <th>TMV/Yash</th>
                                                        <th>Total Fees</th>
                                                        <th>Paid Fees</th>
                                                        <th>Balance Fees</th>
                                                        <th>Verify By</th>
                                                        <th>Check For Verification</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            include 'Conn.php';
                                                            $stid="0";
                                                            $admyrs="0";
                                                            $year="0";
                                                            $urlcourse=$_GET['course'];
                                                            $urladmyrs=$_GET['adm'];
                                                            
                                                            if(isset($_POST['btnsearch']))
                                                            {
                                                               $admyrs=$_POST['txtadmyrs'];
                                                               $year=$_POST['txtstudcoursename'];
                                                               $sql="select * from studentdt where coursename='$year' and admissionyrs='$admyrs' order by studentid desc";
                                                            }
                                                            
                                                            
                                                            else
                                                            {
                                                                if($urlcourse!=null and $urladmyrs!=null)
                                                                {
                                                                    $sql="select * from studentdt where coursename='$urlcourse' and admissionyrs='$urladmyrs' order by studentid desc";
                                                                }
                                                                else{
                                                                   $sql="select * from studentdt order by studentid desc";   
                                                                }
                                                                  
                                                                }
                                                            $result=$con->query($sql);
                                                            if($result->num_rows>0)
                                                            {
                                                                $no=0;
                                                                while($row=$result->fetch_assoc())
                                                                {
                                                                    $no++;
                                                                    $stid=$row['fullname'];
                                                                    $admsyrs=$row['admissionyrs'];
                                                                    $year=$row['coursename'];
                                                                    
                                                                    
                                                                    $yrssql="select * from fees where name='$year' order by feesid desc";
                                                                    $yrsresult=$con->query($yrssql);
                                                                    $yrsrow=$yrsresult->fetch_assoc();
                                                        ?>
                                                            <tr class="primary">
                                                               <td><?php echo $no;?></td> 
                                                               <td><?php echo $row['admissionyrs'];?></td> 
                                                               <td><?php echo $row['fullname'];?></td> 
                                                               <td><?php echo $row['coursename'];?></td> 
                                                               <td>&nbsp;</td> 
                                                               <td>&nbsp;</td> 
                                                               <td>&nbsp;</td>
                                                               <td>&nbsp;</td>
                                                               <td>&nbsp;</td>
                                                               <td>&nbsp;</td>
                                                            </tr>
                                                      
                                                        <?php
                                                             $yrs=$yrsrow['year'];
                                                             $recptmvsql="select * from receipt where FullName='$stid'  and Receipttype='TMVFEES' and Year='$yrs'";
                                                             $recptmvresult=$con->query($recptmvsql);
                                                            if($recptmvresult->num_rows>0)
                                                            {

                                                                while($recptmvrow=$recptmvresult->fetch_assoc())
                                                                {
                                                                    $mode=$recptmvrow['ReceiptMode'];
                                                        ?>
                                                        <tr class="info">
                                                                <td>&nbsp;</td> 
                                                               <td>&nbsp;</td> 
                                                               <td>&nbsp;</td> 
                                                               <td><?php echo $recptmvrow['Year']?></td>
                                                               <td>TMV Fees</td>
                                                               <td><?php echo $recptmvrow['Total']?></td> 
                                                               <td><?php echo $recptmvrow['Paid']?></td> 
                                                               <td><?php echo $recptmvrow['Balance']?></td>
                                                               <td>&nbsp;</td>
                                                               <td>&nbsp;</td>
                                                        </tr>
                                                    <?php
                                                                }
                                                            }
                                                    ?>
                                                     <?php
                                                     $yrs=$yrsrow['year'];
                                                             $recpsql="select * from receipt where FullName='$stid' and Year='$yrs' and Receipttype='BCAFEES'";
                                                             $recpresult=$con->query($recpsql);
                                                            if($recpresult->num_rows>0)
                                                            {
                                                                
                                                                while($recprow=$recpresult->fetch_assoc())
                                                                {
                                                                    $color=$recprow['decp'];

                                                        ?>
                                                        <?php
                                                            if($color=="TW" || $color=="SC")
                                                            {
                                                        ?>
                                                        <tr style="background-color:#FFFF00">
                                                               <td>&nbsp;</td> 
                                                               <td>&nbsp;</td> 
                                                               <td>&nbsp;</td> 
                                                               <td><?php echo $recprow['Year']?></td>
                                                               <td>Yash Fees</td>
                                                               <td><?php echo $recprow['Total']?></td>
                                                               <td><?php echo $recprow['Paid']?></td>
                                                               <td><?php echo $recprow['Balance']?></td>
                                                               <td><b>Verify By</b> <b style="color:red"><?php echo $recprow['decp'];?></b></td>
                                                               <td><a href="verifiyreceipt.php?n=<?php echo $recprow['id']?>" class="btn btn-info">Click To Verify</a></td>
                                                        </tr>
                                                        <?php
                                                            }
                                                            else
                                                            {
                                                             ?>
                                                                 <tr class="danger">
                                                               <td>&nbsp;</td> 
                                                               <td>&nbsp;</td> 
                                                               <td>&nbsp;</td> 
                                                               <td><?php echo $recprow['Year']?></td>
                                                               <td>Yash Fees</td>
                                                               <td><?php echo $recprow['Total']?></td>
                                                               <td><?php echo $recprow['Paid']?></td>
                                                               <td><?php echo $recprow['Balance']?></td>
                                                               
                                                               <td><b>Verify By</b> <b style="color:red"><?php echo $recprow['decp'];?></b></td>
                                                               <td><a href="verifiyreceipt.php?n=<?php echo $recprow['id']?>&yrs=<?php echo $row['coursename']?>&yrsadm=<?php echo $row['admissionyrs'] ?>" class="btn btn-info">Click To Verify</a></td>
                                                        </tr>
                                                             
                                                             <?php   
                                                            }
                                                        ?>
                                                   
                                                     <?php
                                                                }
                                                            }
                                                    ?>
                                                    <?php
                                                        $totalsql="select SUM(Paid) as Paid from receipt where FullName='$stid' and Year='$yrs'";
                                                        $totalresult=$con->query($totalsql);
                                                        $totalrow=$totalresult->fetch_assoc();
                                                        
                                                        $totalfeessql="select SUM(Total) as Total from receipt where FullName='$stid' and Year='$yrs'";
                                                        $totalfeesresult=$con->query($totalfeessql);
                                                        $totalfeesrow=$totalfeesresult->fetch_assoc();
                                                       
                                                    ?>
                                                   
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