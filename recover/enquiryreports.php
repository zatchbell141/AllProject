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
                                        <h2>Enquiry Reports</h2>
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
                            <h2>Enquiry Report</h2>
                        </div>
                        <div class="widget-tabs-list">
                            <ul class="nav nav-tabs tab-nav-left">
                                <li class="active"><a data-toggle="tab" href="#home2">Admitted</a></li>
                                <li><a data-toggle="tab" href="#menu12">No Admitted</a></li>
                                <li><a data-toggle="tab" href="#menu22">Total Enquiry Reports</a></li>
                            </ul>
                            <div class="tab-content tab-custom-st tab-ctn-right">
                                <div id="home2" class="tab-pane fade in active">
                                    <div class="tab-ctn">
                                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-bordered  table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Stream</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    include 'Conn.php';
                                    $sql="select * from enquiry where admitted='1' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                                <td><?php echo $row['name'];?></td>
                                                
                                                <td><?php echo $row['Stream'];?></td>
                                                <td><?php echo $row['phno'];?></td>
                                                <td><?php
                                                    $status=$row['admitted'];
                                                    if($status=='1')
                                                    {
                                                        echo '<b style="color:Green">Admitted</b>';
                                                    }
                                                    else
                                                    {
                                                       echo '<b style="color:red">Not Admitted</b>'; 
                                                    }
                                                ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                            ?>
                                
                               </tbody>
                               <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Stream</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                                </table>
                             </div>
                                         </div>
                                </div>
                                <div id="menu12" class="tab-pane fade">
                                    <div class="tab-ctn">
                                         <div class="table-responsive">
                            <table id="data-table-basic" class="table table-bordered  table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Stream</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    include 'Conn.php';
                                    $sql="select * from enquiry where admitted='0' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                                <td><?php echo $row['name'];?></td>
                                                
                                                <td><?php echo $row['Stream'];?></td>
                                                <td><?php echo $row['phno'];?></td>
                                                <td><?php
                                                    $status=$row['admitted'];
                                                    if($status=='1')
                                                    {
                                                        echo '<b style="color:Green">Admitted</b>';
                                                    }
                                                    else
                                                    {
                                                       echo '<b style="color:red">Not Admitted</b>'; 
                                                    }
                                                ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                            ?>
                                
                               </tbody>
                               <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Stream</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                                </table>
                             </div>
                                    </div>
                                </div>
                                <div id="menu22" class="tab-pane fade">
                                    <div class="tab-ctn">
                                        <?php
                                            $nasql="select count(*) as NA from enquiry where admitted='0' ORDER BY id DESC";
                                            $naresult=$con->query($nasql);
                                            $narow=$naresult->fetch_assoc();
                                            
                                            $asql="select count(*) as admitted from enquiry where admitted='1' ORDER BY id DESC";
                                            $aresult=$con->query($asql);
                                            $arow=$aresult->fetch_assoc();
                                        ?>
                                            <table class="table table-striped table-border">
                                                <tr class="success">
                                                    <td><b>Number Of Admitted:<?php echo $arow['admitted'];?></b></td>
                                                </tr>
                                                <tr class="danger">
                                                    <td><b>Number Of Not Admitted:<?php echo $narow['NA'];?></b></td>
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