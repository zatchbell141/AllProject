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
                                        <h2>Follow Up</h2>
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
                               
                               <div class="panel panel-primary">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Follow Up</h3>
                                </div>
                              <div class="panel-body">
                                   <form action="followup.php" method="post" autocomplete="off">
              <table class="table table-striped">
                <tr>
                  <td>Student Name:<input type="text" name="txtserch" class="form-control" list="studentid" placeholder="ID" required></td>
                  <datalist id="studentid">
                      <?php
                                include 'Conn.php';
                                 $query1="select * from enquiry order by id desc";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                      
                                 ?>
                                 <option value="<?php echo $grd['name'];?>"><?php echo $grd['name'];?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist>
                </tr>
                <tr>
                  <td><button class="btn btn-primary notika-btn-primary btn-lg" name="btnserch">Search</button></td>
                   </form>
                </tr>
              </table>
                              </div>
                            </div>
                             <?php
            if(isset($_POST['btnserch']))
            {
                                       include 'Conn.php';
                                       $id=$_POST['txtserch'];
                                       $ssql="select * from enquiry where name='$id'";
                                       $sresult=$con->query($ssql);
                                       $srow=$sresult->fetch_assoc();
                                  
            }
            
          ?>
                             <div class="panel panel-primary">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Student Details</h3>
                                </div>
                              <div class="panel-body">
                                   <form action="addfollowup.php" method="post" autocomplete="off">
          <table class="table table-striped">
            <tr>
              <td colspan="3">Student ID:<input type="text" name="txtstudentid" class="form-control" readonly value="<?php echo $srow['id']?>"readonly></td>
            </tr>
            <tr>
              <th colspan="3">Date:<input type="text" name="txtdate" class="form-control" value="<?php echo date('d-m-Y');?>"readonly></th>
              <!--<th>Coursename:<input type="text" name="txtcoursename" class="form-control" value="<?php echo $cnrow['name'];?>"></th>-->
              <!--<th>Course ID:<input type="text" name="txtcourseid" class="form-control" value="<?php echo $srow['courseName'];?>"></th>-->
            </tr>
            <tr>
              <!--<td>Name:<input type="text" name="txtname" class="form-control" value="<?php echo $srow['name'];?>" placeholder="Name"readonly></td>-->
              <!--<td>Lastname:<input type="text" name="txtlastname" class="form-control" value="<?php echo $srow['lastname'];?>" placeholder="Lastname"readonly></td>
              <td>Fathername:<input type="text" name="txtfathername" class="form-control" value="<?php echo $srow['fathername'];?>" placeholder="Fathername"readonly></td>-->
            </tr>
            <tr>
               <td>Fullname:<input type="text" name="txtfullname" class="form-control" value="<?php echo $srow['name']." ".$srow['lastname']." ".$srow['fathername'];?>" placeholder="Fullname" readonly></td>
                <td>Reasons:<select name="txtresn" class="form-control" required>
                  <option value=" ">Select Reasons</option>
                  <option value="Answered">Answered</option>
                  <option value="Not Picking">Not Picking</option>
                  <option value="Not Reachable">Not Reachable</option>
                  <option value="Not Answering">Not Answering</option>
                  <option value="Other">Other</option>
                  </select></td>
           
              <td>Description:<input type="text" name="txtdescrip" class="form-control" placeholder="Description"></td>
            </tr>
            <tr>
              <!--<td colspan="1">Staff Name:<input type="text" class="form-control" name="txtsaff" value="<?php echo $staff;?>" readonly></td>-->
              <td colspan="3">Contact No:<input type="text" class="form-control" name="txtcontact" value="<?php echo $srow['phno'];?>" readonly></td>
            </tr>
            <tr>
              <td colspan="3"><button  name="btnsubmit" class="btn btn-primary notika-btn-primary btn-lg">Add Followup</button></td>
              </form>
            </tr>
             <tr>
                <td colspan="3"><?php include 'addfollowup.php';?></td>
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