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
                                        <h2>Staff Attendence</h2>
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
                                         <form  action="attendence.php" method="post" autocomplete="off">
            <table class="table table-sc-ex table-bordered">
               <td> <div class="nk-int-st"><input type="text" name="txtdname" class="form-control input-lg" list="browsers" placeholder="Name" required></div></td>
                <datalist id="browsers">
                      <?php
                                include 'Conn.php';
                                 $query1="select name,lastname from staff";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['name']?>"><?php echo $grd['name']." ".$grd['lastname']?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist>
             </tr>
             <tr>
              <td><input type = "submit" class="button button1"  value ="submit" name="staffdet"></td>
                </form>
             </tr>
           </table>
            <?php
                                   if(isset($_POST['staffdet']))
                                   {
                                    
                                    $ts=$_POST['txtdname'];
                                    $tssql="select * from staff where name='$ts'";
                                    $tsresult=$con->query($tssql);
                                    $tsrow=$tsresult->fetch_assoc();
                                    
                                     /*$subjectnam=$tsrow['subject'];
                                    $tsisql="select id from subject where subject='$subjectnam' and active='1' ORDER BY id DESC";
                                    $tsiresult=$con->query($tsisql);
                                    $tsirow=$tsiresult->fetch_assoc();
                                    
                                        $nm=explode(" ",$ts);
                                        //echo $nm[0];
                                     $ctssql="select * from staff where name like '%$nm[0]%' and active='1' ORDER BY id DESC";
                                    $ctsresult=$con->query($ctssql);
                                    $ctsrow=$ctsresult->fetch_assoc();*/
                                   }

                                   ?>
                                    <form id="addform" action="addattend.php" method="post">
                                    <table class="table table-sc-ex table-bordered">
                <tr>
              <td colspan="1"> <div class="nk-int-st"><input type="hidden"class="form-control input-lg" name="txtstaffid" value="<?php echo $tsrow['id'];?>" placeholder="Name" required></div></td>
              
            </tr>
            <tr>
              <td colspan="2"> <div class="nk-int-st"><input type="hidden"class="form-control input-lg" name="txtphno" value="<?php echo $tsrow['contact'];?>" placeholder="Name" required></div></td>
            </tr>
            <tr>
              <td colspan="4"> <div class="nk-int-st"><input type="text"class="form-control input-lg" name="txtdname" value="<?php echo $tsrow['name']." ".$tsrow['lastname']?>" placeholder="Name" required></div></td>
            </tr>
             <tr>
             <td><div class="nk-int-st"><input type="text" list="subject"class="form-control input-lg" name="txtsubject" placeholder="Subject"  required></div>
                     <datalist id="subject">
                      <?php
                                include 'Conn.php';
                                 $query1="select * from subject where active=1";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['id'];?>"><?php echo $grd['subject']?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist>
                </td>
              </td>
           
               <td> <div class="nk-int-st"><input type="text" name="txttropic"class="form-control input-lg" placeholder="Topic:" required></td>
            
              <td><div class="nk-int-st"><input type="text"class="form-control input-lg" name="txtdate" value="<?php 
                 
                $to=date('Y-m-d');
              
              echo $to?>" required></div></td>
              <td><select name="year"class="form-control input-lg">
                  <option name="FYBCA">FYBCA</option>
                  <option name="SYBCA">SYBCA</option>
                  <option name="TYBCA">TYBCA</option>
                </select></td>
             </tr>
              <tr>
                 <td colspan="2"><div class="nk-int-st">Start Lecture Time:<input type="time"class="form-control input-lg" name="starttime" placeholder="Start Lecture Time" required></div></td>
              </td>
              <td colspan="2">End Lecture Time<div class="nk-int-st"><input type="time"class="form-control input-lg" name="endtime" placeholder="Start Lecture Time" required></div></td>
            
              </td>

              </tr>
              <tr>
                <td colspan="2"><button id="submit" class="btn btn-primary notika-btn-primary btn-lg">Save</button></td>
              </tr>
               <tr>
        <td colspan="2"><div id="msg"></div></td>
      </tr>
            </table>
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
                                        <th>Id</th>
                                         <th>Staff Id</th>
                                        <th>Name</th>
                                        <th>Tropic</th>
                                        <th>Subject</th>
                                        <th>Class</th>
                                        <th>Start Lecture Time</th>
                                        <th>End Lecture Time</th>
                                        <th>Duration</th>
                                        <th>Date</th>
                                        <th>Salary</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'Conn.php';
                                    $sql="select * from salary where active='1' order by sessiondate desc";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['staffid'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['topic'];?></td>
                                            <td><?php 
                                            
                                            
                                            $sub=$row['subjectId'];
                                            $tsisql="select * from subject where id='$sub' and active='1' ORDER BY id DESC";
                                            $tsiresult=$con->query($tsisql);
                                            $tsirow=$tsiresult->fetch_assoc();
                                            echo $tsirow['name'];
                                            
                                            
                                            ?></td>
                                            <td><?php echo $row['class'];?></td>
                                            <td><?php echo $row['starttime'];?></td>
                                            <td><?php echo $row['endtime'];?></td>
                                            <td><?php echo $row['duration'];?></td>
                                            <td>
                                            <?php $date= $row['sessiondate'];
                                                    $date=strtotime($date);
                                                    $date=date('d-m-Y',$date); 
                                                    echo $date;
                                                   ?></td>
                                            <td><?php echo $row['sal'];?></td>
                                             <td><button class="btn btn-info notika-btn-info" onClick="window.location.href='updatesaldetails.php?varname=<?php echo $row['id'];?>';">Edit</button></td>
                                             <!--<td><a href="delattend.php?varname=<?php //echo $row['id'];?>">Delete</a></td>-->
                                            <td><button class="btn btn-danger notika-btn-info" onClick="deleteme(<?php echo $row['id']; ?>)">Delete</button></td>
                                             </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Are You Sure you want to delete.!!")){
                                             window.location.href='delattend.php?varname=' +delid+'';
                                             return true;
                                             }
                                             } 
                                             </script>
                                            <?php
                                        }
                                    }
                            ?>      
                                
                               </tbody>
                                <tfoot>
                                    <tr>
                                         <th>Id</th>
                                         <th>Staff Id</th>
                                        <th>Name</th>
                                        <th>Tropic</th>
                                        <th>Subject</th>
                                        <th>Class</th>
                                        <th>Start Lecture Time</th>
                                        <th>End Lecture Time</th>
                                        <th>Duration</th>
                                        <th>Date</th>
                                        <th>Salary</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
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
