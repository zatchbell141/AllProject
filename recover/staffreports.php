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
                                        <h2>Staff Reports</h2>
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
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn" align="center">
                                          <form action="staffreports.php" method="post" autocomplete="off">
                                      <table class="table table-striped">
                                        <tr>
                                          <td>Form: <input type="date" name="txtform" class="form-control input-lg" required></td>
                                          <td>To:<input type="date" name="txtto" class="form-control input-lg" required></td>
                                        </tr>
                                        <tr>
                                          <td colspan="2"><input type = "submit" class="button button1"  value ="submit" name="salshs"></td>
                                          </form>
                                        </tr>
                                      </table>

          <table class="table  table-striped table-border">
            <tr>
              <th>Staff ID</th>
              <th>Name</th>
              <th>Salary</th>
              <th>Minutes</th>
              <th>Date</th>
               <th>Subject</th>
            </tr>
            <tr>
              <?php
              if(isset($_POST['salshs']))
              {
                                    include 'Conn.php';
                                    $form=$_POST['txtform'];
                                      $form=strtotime($form);
                                       $form=date('Y-m-d',$form);

                                        $to=$_POST['txtto'];
                                      $to=strtotime($to);
                                       $to=date('Y-m-d',$to);

                                    $sql="SELECT s.id,sa.name,sa.sal,sa.duration,sa.sessiondate,sa.subject FROM staff s INNER JOIN salary sa on 
                                    s.id=sa.staffid WHERE sa.sessiondate BETWEEN '$form' AND '$to' and sa.active=1";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['sal'];?></td>
                                            <td><?php echo $row['duration'];?></td>
                                            <td><?php 
                                              $date=$row['sessiondate'];
                                              $date=strtotime($date);
                                             $date=date('d/m/Y',$date);
                                            echo $date; ?></td>
                                            <td><?php echo $row['subject'];?></td>
                                          
                                            </tr>
                                            <?php
                                        }
                                    }
                                  }
                            ?>      
            </tr>
          </table>

          <table class="table  table-striped table-border">
            <tr>

              <th colspan="4"><hr>Grand Total:<hr></th>
              
            </tr>
            <tr>
              <th>Staff ID</th>
              <th>Name</th>
              <th>Total Salary</th>
              <th>Total Minutes</th>
            </tr>
            <tr>
              <?php
                if(isset($_POST['salshs']))
              {
                                      $form=$_POST['txtform'];
                                      $form=strtotime($form);
                                       $form=date('Y-m-d',$form);

                                        $to=$_POST['txtto'];
                                      $to=strtotime($to);
                                       $to=date('Y-m-d',$to);

                                    include 'Conn.php';
                                    $ssql="select staffid,name, SUM(duration) As Hours, SUM(sal) As Salary,name from salary where sessiondate BETWEEN '".$form."' AND '".$to."' and active=1 GROUP BY staffid";
                                    $sresult=$con->query($ssql);
                                   
                                    if($sresult->num_rows>0)
                                    {
                                        while($srow=$sresult->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr>
                                            <td><?php echo $srow['staffid'];?></td>
                                            <td><?php echo $srow['name'];?></td>
                                            <td><?php echo $srow['Salary'];?></td>
                                            <td><?php echo $srow['Hours'];?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                  }
                            ?>      
            </tr>
          </table>
           <table class="table  table-striped table-border">
            <tr>
              <th>Subject Wise Report</th>
            </tr>
            <tr>
              <form action="exportstaff.php" method="post">
              <td>Export Form:<input type="date" name="formtxt" class="form-control input-lg" value="<?php echo $form?>" required> To:<input type="date" name="totxt"class="form-control input-lg" value="<?php echo $to?>" required>
               <input type = "submit" class="button button1"  value ="Export to Excel" name="export"></td>
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