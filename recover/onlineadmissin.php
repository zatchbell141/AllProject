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
                                        <h2>Online admission Data</h2>
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
                           <!-- <div class="curved-ctn" align="center">
                            	 <div class="data-table-area">
       
                        </div>-->
                        <form action="exponlinedata.php" method="post">
                        <table class="table table-bordered">
                            <tr>
                                <td>Online Data In excel:</td>
                                
                            </tr>
                            <tr>
                                <td><button class="btn btn-warning notika-btn-warning" name="export">Export In Excel</button></td>
                                </form>
                            </tr>
                        </table>
                        
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
                            <div class="widget-tabs-list">
                            <ul class="nav nav-tabs tab-nav-left">
                                <li class="active"><a data-toggle="tab" href="#home2"><b>FYBCA</b></a></li>
                                <!--<li><a data-toggle="tab" href="#menu12"><b>Direct SYBCA</b></a></li>-->
                                <li><a data-toggle="tab" href="#menu22"><b>Cancelled Admission</b></a></li>
                            </ul>
                            <div class="tab-content tab-custom-st tab-ctn-right">
                                <div id="home2" class="tab-pane fade in active">
                                    <div class="tab-ctn">
                                        <h1>FYBCA Online Admission</h1>
                                        <div class="ex3">
                                        <table class="table table-bordered  table-hover">
                                            <tr>
                                                 <th>Sr.No</th>
                                                 <th>Student Photos</th>
                                                 <th>Fullname</th>
                                                 <th colspan="5" style="Text-Align:center">Option</th>
                                            </tr>
                                            <tr>
                                                 <?php
                                    include 'Conn.php';
                                    $sql="select a1.id,a1.stdphoto,a1.fullname from addonline a1,receipt r1 where a1.admyrs='2020-2021 Year' and a1.fullname=r1.fullname and a1.course='Bachelor of Computer Applications-E-First Year' and r1.receipttype='TMVFEES' and a1.active='1' order by a1.id desc";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            ?>
                                            <td><?php echo $no;?></td>
                                            <td><img src="https://stdm.bcaedu.in/BCAForm/<?php echo $row['stdphoto'];?>" height="200"  width="150"></td>
                                            <td><?php echo $row['fullname'];?></td>
                                             <!--<td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'editstudt.php?varname=<?php echo $row['id'];?>';">Edit</button></td>-->
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'viewstudentdata.php?varname=<?php echo $row['id'];?>';">View</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"   onClick="deleteme(<?php echo $row['id']; ?>)">Delete</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'canceladmission.php?varname=<?php echo $row['id'];?>';">Admission Cancelled</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'admit.php?varname=<?php echo $row['id'];?>';">Admit</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'sndsmsadm.php?varname=<?php echo $row['id'];?>';">Send SMS Completed Admission Process</button></td>
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
                                 <!--<div id="menu12" class="tab-pane fade in active">
                                    <div class="tab-ctn">
                                         <div class="ex3">
                                        <h1>Direct Online Admission</h1>
                                         <table class="table table-bordered  table-hover">
                                            <tr>
                                                 <th>Sr.No</th>
                                                 <th>Student Photos</th>
                                                 <th>Fullname</th>
                                                 <th colspan="3" style="Text-Align:center">Option</th>
                                            </tr>
                                            <tr>
                                                 <?php
                                    include 'Conn.php';
                                    $sql="select * from addonline where active=1 and course='Bachelor of Computer Applications- R- Direct Second'  and active='1' and addmissionstatus='In Process' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            ?>
                                            <td><?php echo $no;?></td>
                                            <td><img src="<?php echo $row['stdphoto'];?>" height="200"  width="150"></td>
                                            <td><?php echo $row['fullname'];?></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'editstudt.php?varname=<?php echo $row['id'];?>';">Edit</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'viewstudentdata.php?varname=<?php echo $row['id'];?>';">View</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'deladdonline.php?varname=<?php echo $row['id'];?>';">Delete</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'canceladmission.php?varname=<?php echo $row['id'];?>';">Admission Cancelled</button></td>
                                             </tr>
                                            <?php
                                        }
                                    }
                                            ?>
                                            </tr>
                                        </table>
                                    </div>
                                    </div>-->
                               
                                 <div id="menu22" class="tab-pane fade">
                                    <div class="tab-ctn">
                                        <h1>Cancelled Online Admission</h1>
                                         <div class="ex3">
                                        <table class="table table-bordered  table-hover">
                                            <tr>
                                                 <th>Sr.No</th>
                                                 <th>Student Photos</th>
                                                 <th>Fullname</th>
                                                 <th colspan="3" style="Text-Align:center">Option</th>
                                            </tr>
                                            <tr>
                                                 <?php
                                    include 'Conn.php';
                                    $sql="select * from addonline where  addmissionstatus='Cancelled' and active='0' and admyrs='2020-2021 Year'  ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            ?>
                                            <td><?php echo $no;?></td>
                                            <td><img src="https://stdm.bcaedu.in/BCAForm/<?php echo $row['stdphoto'];?>" height="200"  width="150"></td>
                                            <td><?php echo $row['fullname'];?></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'editstudt.php?varname=<?php echo $row['id'];?>';">Edit</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'viewstudentdata.php?varname=<?php echo $row['id'];?>';">View</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'deladdonline.php?varname=<?php echo $row['id'];?>';">Delete</button></td>
                                             
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
 <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Are You Sure you want to Delete:"+" "+delid)){
                                             window.location.href='deladdonline.php?varname=' +delid+'';
                                             return true;
                                             }
                                             } 
                                             </script>
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