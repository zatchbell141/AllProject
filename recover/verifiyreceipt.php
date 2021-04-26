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
    <?php
        include 'Conn.php';
        $id=$_GET['n'];
        $sql="select * from receipt where id='$id' order by id desc";
        $result=$con->query($sql);
        $row=$result->fetch_assoc();
    ?>
     <div class="sale-statistic-area">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-ctn" align="center">
                           <div class="tab-hd">
                            <h2>Verify Payment</h2>
                        </div>
                        <h1><a href="finalreportscoll.php">Go Back</a></h1>
                        <form action="" method="POST">
                            <input type="hidden" name="txtid" class="form-control" value="<?php echo $row['id']?>" readonly>
                            <table class="table table-striped" border="1">
                                <tr>
                                   <td>Name:<input type="text" name="txtname" class="form-control" value="<?php echo $row['FullName']?>" readonly></td>
                                   <td>Receipt No:<input type="text" name="txtreceiptno" class="form-control" value="<?php echo $row['ReceiptNewNo']?>" readonly></td>
                                   <td>Verify By:<select name="txtverifyname" class="form-control">
                                       <option>Select Name</option>
                                       <option value="SC">SC</option>
                                       <option value="TW">TW</option>
                                   </select></td>
                                </tr>
                                <tr>
                                    <td>Amount:<input type="text" name="txtname" class="form-control" value="<?php echo $row['Paid']?>" readonly></td>
                                    <td>Date:<input type="text" name="txtname" class="form-control" value="<?php echo $row['Date']?>" readonly></td>
                                    <td>Receipt Type:<input type="text" name="txtname" class="form-control" value="<?php echo $row['Receipttype']?>" readonly></td>
                                </tr>
                                <tr>
                                    <td>URT No:<input type="text" name="txtname" class="form-control" value="<?php echo $row['ChequeNo']?>" readonly></td>
                                    <td>Transfer Date:<input type="text" name="txtname" class="form-control" value="<?php echo $row['ChequeDate']?>" readonly></td>
                                     <td>Bank:<input type="text" name="txtname" class="form-control" value="<?php echo $row['Bank']?>" readonly></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><button id="submit" name="btnsubmit" class="btn btn-primary notika-btn-primary">Verify </button></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><?php include 'updateverify.php';?></td>
                                </tr>
                                     </table>
                                                
                        </form>
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