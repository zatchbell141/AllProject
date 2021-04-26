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
                                        <h2>Add Users</h2>
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
                                 <form action="addusers.php" method="post">
          <table class="table table-sc-ex table-bordered">
            <tr>
              <td><div class="nk-int-st"><input type="text" list="browsers"class="form-control input-lg" name="txtaddname" Placeholder="Name"></div></td>
               <datalist id="browsers">
                      <?php
                                include 'Conn.php';
                                 $query1="select fullname from studentdt";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['fullname'];?>"><?php echo $grd['fullname']?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist>
             
            </tr>
            <tr>
              <td><input type = "submit" class="button button1"  value ="submit" name="txtsrchuser"></td>
           
            </tr>
         </table>
          </form>
         <?php
         include 'Conn.php';
          if(isset($_POST['txtsrchuser']))
          {
            
            $name=$_POST['txtaddname'];
            $sql="select * from studentdt where fullname='".$name."'";
           $result=$con->query($sql);
           $row=$result->fetch_assoc();
             
             $fname=$row['coursename'];
            $fsql="select * from fees where name='".$fname."'";
           $fresult=$con->query($fsql);
           $frow=$fresult->fetch_assoc();
          }

         ?>

        <form id="addform" action="addruser.php" method="post">
         <table class="table table-sc-ex table-bordered">
          <tr>
              <input type="hidden"  name="txtsubjectid" value="<?php echo $row['studentid']?>" required>
               <input type="hidden"  name="txtstdprn" value="<?php echo $row['prn']?>" required>
              <td colspan="3"><div class="nk-int-st"><input type="text"class="form-control input-lg" name="txtaddfullname" value="<?php echo $row['fullname']?>"  readonly></div></td>
            </tr>
            <tr>
              <td><div class="nk-int-st"><input type="text"class="form-control input-lg" name="txtaddname"  value="<?php echo $row['firstname']?>" readonly></div></td>
              <td><div class="nk-int-st"><input type="text"class="form-control input-lg" name="txtaddlastname" value="<?php echo $row['lastname']?>" readonly></div></td>
              <td><div class="nk-int-st"><input type="text"class="form-control input-lg" name="txtaddusername" placeholder="Username" required></div></td>
          </tr>
          <tr>
             <td><div class="nk-int-st"><input type="text"class="form-control input-lg" name="txtaddyear" value="<?php echo $frow['year']?>" readonly></div></td>
              <td><div class="nk-int-st"><input type="text"class="form-control input-lg" name="txtaddsem" value="<?php echo $frow['sem']?>" readonly></div></td>
              
              <td><div class="nk-int-st"><input type="text"class="form-control input-lg" name="txtaddpasswd" value="bca@2020" Placeholder="Name" readonly></div></td>
          </tr>
          <tr>
            <td colspan="3"><button class="btn btn-primary notika-btn-primary btn-lg" id="submit">Add Users</button></td>
            </form>
          </tr>
           <tr>
            <td colspan="3"><div id="msg"></div></td>
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
                                        <th>Sr.No</th>
                                        <th>Fullname</th>
                                         <th>Name</th>
                                         <th>Lastname</th>
                                         <th>PRN</th>
                                         <th>Year</th>
                                         <th>Sem</th>
                                         <th>Reference Code</th>
                                         <th>Username</th>
                                         
                                         <th>Edit</th>
                                         <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from studreg where active=1 ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $row['fullname'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['lname'];?></td>
                                            <td><?php echo $row['PRN'];?></td>
                                            <td><?php echo $row['year'];?></td>
                                            <td><?php echo $row['sem'];?></td>
                                             <td><?php echo $row['recfno'];?></td>
                                            <td><?php echo $row['username'];?></td>
                                            
                                            
                                             
                                            <!--<td><a href="othersfees.php?varname=<?php echo $row['id'];?>">Other Print</a></td>-->
                                             <td><button class="btn btn-info notika-btn-info" onClick="window.location.href='useredite.php?varname=<?php echo $row['id'];?>';">Edit</button></td>
                                            <!--<td><a href="editcolgfees.php?varname=<?php //echo $row['id'];?>">Edit</a></td>-->
                                            <!--<td><a href="printfees.php?varname=<?php //echo $row['id'];?>">Print</a></td>-->
                                             
                                            <!--<td><a href="colgdel.php?varname=<?php //echo $row['id'];?>">Delete</a></td>-->
                                            <td><button class="btn btn-danger notika-btn-danger" onClick="deleteme(<?php echo $row['id']; ?>)">Delete</button></td>
                                             </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Are You Sure you want to delete:"+" "+delid)){
                                             window.location.href='delusers.php?varname=' +delid+'';
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
                                        <th>Fullname</th>
                                         <th>Name</th>
                                         <th>Lastname</th>
                                         <th>PRN</th>
                                         <th>Year</th>
                                         <th>Sem</th>
                                         <th>Reference Code</th>
                                         <th>Username</th>
                                         <th>Password</th>
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
</script>
</html>