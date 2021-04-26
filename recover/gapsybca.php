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
     <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">-->
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn">
                                <h2>Welcome <b style="color:red"><?php echo $_SESSION['login_user'];?></b></h2>
                                <br>
                                
                                
                              
                        <form action="exportsygap.php" method="post">
                        <table class="table table-bordered">
                            <tr>
                                <td>Online Data In excel:</td>
                                
                            </tr>
                            <tr>
                                <td><button class="btn btn-warning notika-btn-warning" name="export">Export In Excel</button></td>
                                </form>
                            </tr>
                        </table>
                 
                                 <div class="table-responsive">
                                    
                                     <table class="table table-bordered  table-hover">
                                            <tr>
                                                 <th>Sr.No</th>
                                                 <th>Student Photos</th>
                                                 <th>Fullname</th>
                                                 <th colspan="4" style="Text-Align:center">Option</th>
                                            </tr>
                                            <tr>
                                                 <?php
                                    include 'Conn.php';
                                    $sql="select a1.id,a1.stdphoto,a1.fullname from addonline a1,receipt r1 where a1.admyrs='2020-2021 Year' and a1.fullname=r1.fullname and a1.course='Bachelor of Computer Applications- R- GAP Second Year' and a1.active='1' and r1.year='SYBCA' order by a1.id desc ";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            ?>
                                            <td><?php echo $no;?></td>
                                            <td><img src="https://stdm.bcaedu.in/gpsybca/<?php echo $row['stdphoto'];?>" height="200"  width="150"></td>
                                            <td><?php echo $row['fullname'];?></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'editstudt.php?varname=<?php echo $row['id'];?>';">Edit</button></td>
                                             <td><a class="btn btn-danger notika-btn-danger btn-lg" href = "viewgapsyonline.php?varname=<?php echo $row['id'];?>">View</a></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'deladdonline.php?varname=<?php echo $row['id'];?>';">Delete</button></td>
                                             <td><a class="btn btn-danger notika-btn-danger btn-lg" href = "admit.php?varname=<?php echo $row['id'];?>">Admit</a></td>
                                             </tr>
                                            <?php
                                        }
                                    }
                                            ?>
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