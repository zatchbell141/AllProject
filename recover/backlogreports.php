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
                                        <h2>Backlog Report</h2>
                                        <p>Welcome to Yash Infotech <span class="bread-ntd"><?php echo $_SESSION['login_user'];?></span></p>
                                    </div>
                                </div>
                            </div>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container">
           <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn" align="center">
                                
            <form action="exportback.php" method="post">
                <table class="table table-sc-ex table-bordered">
                    <tr>
                        <th align="center" colspan="2"><h1>Date Wise</h1></th>
                    </tr>
                    <tr>
                        <td>Start Date:<div class="nk-int-st"><input type="date" name="std" class="form-control"></div></td>
                        <td>End Date:<div class="nk-int-st"><input type="date" name="endd" class="form-control"></div></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    	<tr>
            		<td colspan="2"><input type="submit" name="export"  class="button button1" value="Export In Excel"></td>
            	</form>
                     </tr>       
                </table>
               
            <form action="backlogsubeport.php" method="post">
            <table class="table table-sc-ex table-bordered">
                <th colspan="2" align="center"><h1 colspan="2">Subject Wise</h1></th>
                <tr>
                        <td>Start Date: <div class="nk-int-st"><input type="date" name="std" class="form-control"></div></td>
                        <td>End Date:<div class="nk-int-st"><input type="date" name="endd" class="form-control"></div></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    	<tr>
            		<td colspan="2"><input type="submit" name="exportsub" class="button button1" Value="Export In Excel"></td>
            	</form>
                     </tr>   
            </table>
            <form action="backlogreports.php" method="post">
             <table class="table table-sc-ex table-bordered">
                <th colspan="2" align="center"><h1 colspan="2">Search</h1></th>
                <tr>
                        <td>Start Date: <div class="nk-int-st"><input type="date" name="std" class="form-control"></div></td>
                        <td>End Date:<div class="nk-int-st"><input type="date" name="endd" class="form-control"></div></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    	<tr>
            		<td colspan="2"><input type="submit" name="btnsearch" class="button button1" Value="Search"></td>
            	</form>
                     </tr>   
            </table>
            
            <form action="backlogreports.php" method="post">
             <table class="table table-sc-ex table-bordered">
                <th colspan="2" align="center"><h1 colspan="2">Exam Year Search</h1></th>
                <tr>
                      <td>Exam Year:<select name="txtadmyrs" class="form-control">
                                                            <option value="">Select Exam Year </option>
                                                             <?php
                                                            include 'Includes/Conn.php';
                                                             $query1="select * from examyear order by id desc";
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
                        <td></td>
                    </tr>
                    	<tr>
            		<td colspan="2"><input type="submit" name="btnexamsearch" class="button button1" Value="Search"></td>
            	</form>
                     </tr>   
            </table>
            <form action="backlogexportyrs.php" method="post">
             <table class="table table-sc-ex table-bordered">
                <th colspan="2" align="center"><h1 colspan="2">Exam Year Export</h1></th>
                <tr>
                      <td>Exam Year:<select name="txtadmyrs" class="form-control">
                                                            <option value="">Select Exam Year </option>
                                                             <?php
                                                            include 'Includes/Conn.php';
                                                             $query1="select * from examyear order by id desc";
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
                        <td></td>
                    </tr>
                    	<tr>
            		<td colspan="2"><input type="submit" name="btnexamexportsearch" class="button button1" Value="Search"></td>
            	</form>
                     </tr>   
            </table>
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
 
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                           
                        </div>
                        <div class="table-responsive">
                        <table id="data-table-basic" class="table table-bordered  table-hover">
                            <thead>
                                	<th>Sr.No</th>
                        			<th>PRN</th>
                        			<th>SEAT NO</th>
                        			<th>NAME OF STUDENT</th>
                        			<th>BACKLOG</th>
                        			<th>SUBJECT</th>
                        			<th>EXT</th>
                        			<th>INT</th>
                        			<th>PRAC/PROJECT</th>
                        			<th>FEES</th>
                        			<th>LATE FEES</th>
                        			<th>Change of exam center Fees</th>
                        			<th>Transfer To TMV</th>
                            </thead>
                            <tbody>
                                	<?php
				include 'Conn.php';
				if(isset($_POST['btnsearch']))
				{
				    $std=$_POST['std'];
				    $endd=$_POST['endd'];
				    $sql="SELECT b1.seat,b1.fullname,b1.subcode,b1.subname,b1.prn,b1.inter,b1.exter,b1.pract,b2.bank,b2.paid,b2.fees,b2.cfees,b2.lfees,b2.paymenttype,b2.cnmode,b2.chdate,b2.chqno,b2.rbank , b2.date from backlog b1,backfees b2 where b2.studentid=b1.studentid and b2.date=b1.date and b1.date BETWEEN '$std' and '$endd' group by b1.studentid order by b1.prn asc";
				}
				if(isset($_POST['btnexamsearch']))
				{
				    $std=$_POST['txtadmyrs'];
				    
				    $sql="SELECT b1.seat,b1.fullname,b1.subcode,b1.subname,b1.prn,b1.inter,b1.exter,b1.pract,b2.bank,b2.paid,b2.fees,b2.cfees,b2.lfees,b2.paymenttype,b2.cnmode,b2.chdate,b2.chqno,b2.rbank , b2.date from backlog b1,backfees b2 where b2.studentid=b1.studentid and b2.date=b1.date and b1.examyrs='$std' group by b1.studentid order by b1.prn asc";
				}
				else
				{
				   $sql="SELECT b1.seat,b1.fullname,b1.subcode,b1.subname,b1.prn,b1.inter,b1.exter,b1.pract,b2.bank,b2.paid,b2.fees,b2.cfees,b2.lfees,b2.paymenttype,b2.cnmode,b2.chdate,b2.chqno,b2.rbank , b2.date from backlog b1,backfees b2 where b2.studentid=b1.studentid and b2.date=b1.date group by b1.studentid order by b1.id desc"; 
				}
   
     $bresult=$con->query($sql);
     $int=0;
     
     if($bresult->num_rows>0)
      {
         while($brow=$bresult->fetch_assoc())
           {
               	$int++;       
            ?>
            	<tr rowspan="2">
            		<td><?php echo $int;?></td>
            		<td><?php echo $brow['prn'];?></td>
            		<td><?php echo $brow['seat'];?></td>
            		<td><?php echo $brow['fullname'];?></td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td><?php $ftm=$brow['paid'];
            		$payt=$brow['paymenttype'];
            		if($payt=='TMV Fees'){
            		    echo $ftm='0';
            		}
            		else
            		{
            		  echo $ftm;  
            		}
            		?></td>
            		<td><?php echo $brow['lfees'];?></td>
            		<td><?php echo $brow['cfees'];?></td>
            		<td><?php $ftm=$brow['paid'];
            		$payt=$brow['paymenttype'];
            		if($payt=='TMV Fees'){
            		   echo $ftm; 
            		}
            		else
            		{
            		  echo $ftm='0';  
            		}
            		?></td>
            	</tr>
            
		</tr>
		<tr>
			<?php
				include 'Conn.php';
   $sql="select * from backlog where fullname='".$brow['fullname']."' and seat='".$brow['seat']."' and date='".$brow['date']."' order by subcode ASC";
     $result=$con->query($sql);
     if($result->num_rows>0)
      {
         while($row=$result->fetch_assoc())
           {
               	     
            ?>
            	<tr >
            	<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td><?php echo $row['subcode'];?></td>
            		<td><?php echo $row['subname'];?></td>
            		<td><?php echo $row['exter'];?></td>
            		<td><?php echo $row['inter'];?></td>
            		<td><?php echo $row['pract'];?></td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            	</tr>
            <?php

        }
    
         }
    }
}
            ?>
		</tr>
		<?php
				 include 'Conn.php';
				 if(isset($_POST['btnsearch']))
				{
				    $std=$_POST['std'];
				    $endd=$_POST['endd'];
				    $fsql="SELECT SUM(paid) As paid,SUM(lfees) as lfees,SUM(cfees) as cfees from backfees where date between '$std' and '$endd'";
				    $ftmvsql="SELECT SUM(paid) As paid,SUM(lfees) as lfees,SUM(cfees) as cfees from backfees where date between '$std' and '$endd' and paymenttype='TMV Fees'";
				}
					if(isset($_POST['btnexamsearch']))
				{
				    $std=$_POST['txtadmyrs'];
				    $fsql="SELECT SUM(paid) As paid,SUM(lfees) as lfees,SUM(cfees) as cfees from backfees where examyrs='$std'";
				    $ftmvsql="SELECT SUM(paid) As paid,SUM(lfees) as lfees,SUM(cfees) as cfees from backfees where examyrs='$std' and paymenttype='TMV Fees'";
				}
				else
				{
				   $fsql="SELECT SUM(paid) As paid,SUM(lfees) as lfees,SUM(cfees) as cfees from backfees";
				   $ftmvsql="SELECT SUM(paid) As paid,SUM(lfees) as lfees,SUM(cfees) as cfees from backfees where  paymenttype='TMV Fees'";
				}
                 
                 $fresult=$con->query($fsql);
                 $frow=$fresult->fetch_assoc();
                 
                 $ftmvresult=$con->query($ftmvsql);
                 $ftmvrow=$ftmvresult->fetch_assoc();
                 
                 $paidamt=$frow['paid']-$ftmvrow['paid'];
                 
                 $tol=$frow['paid']+$frow['lfees']+$frow['cfees'];
            ?>
		<tr>
			<td colspan="8"  rowspan="2">&nbsp;</td>
			<td align="right"><b>Total</b></td>
			<td><b><?php echo $paidamt?></b></td>
			<td><b><?php echo $frow['lfees']?></b></td>
			<td><b><?php echo $frow['cfees']?></b></td>
			<td><b><?php echo $ftmvrow['paid']?></b></td>
		</tr>
		<tr>
			
			<td align="right"><b>Gr.Total</b></td>
			<td colspan="3" align="center"><b><?php echo $tol-$ftmvrow['paid'];?></b></td>
			<td align="center"><b><?php echo $ftmvrow['paid'];?></b></td>
		</tr>
                            </tbody>
                        </table>
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
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
	<!-- tawk chat JS
		============================================     <script src="js/tawk-chat.js"></script>-->
</body>

</html>