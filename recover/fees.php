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
                                        <h2>Fees Sturcture</h2>
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
                                <form id="addform" action="addfees.php" method="POST" autocomplete="off">
                                    <table class="table table-sc-ex table-bordered">
                                        <tr>
                                            <td><b>Course Name<select name="txtstudcoursename" class="form-control"  required>
                                       <option value="Bachelor of Computer Applications-E-First Year">Bachelor of Computer Applications-E-First Year</option>
                                                          <option value="Bachelor of Computer Applications- R- Second Year">Bachelor of Computer Applications- R- Second Year</option>
                                                          <option value="Bachelor of Computer Applications- R- Third Year">Bachelor of Computer Applications- R- Third Year</option>
                                                          <option value="Bachelor of Computer Applications- R- Direct Third Year">Bachelor of Computer Applications- R- Direct Third Year</option>
                                                          <option value="Bachelor of Computer Applications- R- GAP Third Year">Bachelor of Computer Applications- R- GAP Third Year</option>
                                                          <option value="Bachelor of Computer Applications- R- Direct Second">Bachelor of Computer Applications- R- Direct Second</option>
                                                          <option value="Bachelor of Computer Applications- R- GAP Second Year">Bachelor of Computer Applications- R- GAP Second Year</option>
                                          </select></b></td>
                                        
                                             <td>
                                            <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" name="txtfees" placeholder="Fees" required>
                                            </div>
                                        </td>
                                         <td>
                                            <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" name="txttmvfees" placeholder="TMV Fees" required>
                                            </div>
                                        </td>
                                         <td>
                                            Year:<select name="txtyear" class="form-control"  required>
                                          <option value="FYBCA">FYBCA</option>
                                          <option value="SYBCA">SYBCA</option>
                                          <option value="TYBCA">TYBCA</option>
                                          </select>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>
                                           SEM:<select name="txtsem" class="form-control"  required>
                                          <option value="I & II">I & II</option>
                                          <option value="II & III">II & III</option>
                                          <option value="III & IV">III & IV</option>
                                          <option value="IV & V">IV & V</option>
                                          <option value="V & VI">V & VI</option>
                                          </select>
                                            </td>
                                             <td>
                                            <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" name="txtintreg" placeholder="Mode" required>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"><button id="submit" class="btn btn-primary notika-btn-primary">Add Fees</button></td>
                                            </form>
                                        </tr>
                                       
                                    </table>
                                 <div id="msg"></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                           
                        </div>
                        <div class="table-responsive">
 <table id="data-table-basic" class="table table-bordered  table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>College Fees</th>
                                        <th>TMV Fees</th>
                                        <th>Year</th>
                                        <th>Sem</th>
                                        <th>Mode</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    include 'Conn.php';
                                    $sql="select * from fees  ORDER BY feesid DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['fees'];?></td>
                                                <td><?php echo $row['tmvFees'];?></td>
                                                <td><?php echo $row['year'];?></td>
                                                <td><?php echo $row['sem'];?></td>
                                                
                                                <td><?php echo $row['mode'];?></td>
                                                
                                            </tr>
                                            <?php
                                        }
                                    }
                                            ?>
                                
                               </tbody>
                                <tfoot>
                                    <tr>
                                         <th>Name</th>
                                        <th>College Fees</th>
                                        <th>TMV Fees</th>
                                        <th>Year</th>
                                        <th>Sem</th>
                                        <th>Mode</th>
                                    </tr>
                                </tfoot>
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
</body>
</html>