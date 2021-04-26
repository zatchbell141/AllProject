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
    <?php include 'header.php'?>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <?php include 'menumbile.php';?>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
   <?php include 'menu.php';?>
    <!-- Main Menu area End-->
    <?php include 'pass.php';?>
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
                                        <h2>Add Staff</h2>
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
      <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn" align="center">
                               
                                   <form id="addform" action="adddstaff.php" method="post" autocomplete="off">
               <table class="table table-sc-ex table-bordered">
                                <tbody>
                                   <tr>
                                    <td colspan="5">
                        <select class="form-control input-lg" name="prefix"class="form-control input-lg" width="10px">
                                <option value="">Select Prefix</option>
                                <option value="Sir">Sir</option>
                                <option value="Madam">Madam</option>
                                </select>
                    </tr>
                                    <tr>
                   
                    <td colspan="2"><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtname" placeholder="Name" required></div></td>
                    <td colspan="2"><div class="nk-int-st"><input type="text"class="form-control input-lg" name="txtlastname" placeholder="Lastname" required></div></td>
                  
                    <td><div class="nk-int-st"><input type="text"class="form-control input-lg" name="txtusername" placeholder="Username" required></div></td>
                    </tr>
                  <tr>
                    <td colspan="2"><div class="nk-int-st"><input type="password"class="form-control input-lg"  name="txtpasswd" placeholder="Password" required></div></td>
                  
                    <td colspan="2">
                         <div class="nk-int-st"><input type="text" class="form-control input-lg"name="txtemail" placeholder="Lastname" required></div>
                    </td>
                   <td colspan="3"><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtcontact" placeholder="Contact" required></div></td>        
                    </tr>

                    <tr>
                      <td colspan="5">
                        <select class="form-control input-lg"  name="mode" width="10px">
                                <option value="">Select Mode</option>
                                <option value="Full time">Full Time</option>
                                <option value="Half Day">Half Day</option>
                                </select>

                      </td>
                    </tr>
                    <tr>
                      <td colspan="5"><button class="btn btn-primary notika-btn-primary btn-lg" id="submit">Add</button></td>
                    </form>
                    </tr>
                    <tr>
                      <td colspan="5"><div id="msg"></div></td>
                    </tr>
                   </tbody>
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
                                          <th>Name</th>
                                          <th>Lastname</th>
                                          <th>Username</th>
                                          <th>Password</th>
                                          <th>Email</th>
                                          <th>Contact</th>
                                          <th>Mode</th>
                                          <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'Conn.php';
                                    $sql="select * from staff where active='1' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['lastname'];?></td>
                                            <td><?php echo $row['username'];?></td>
                                            <td><?php echo decrypt($row['passwd'],$key);?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['contact'];?></td>
                                            <td><?php echo $row['type'];?></td>
                                            <!--<td><a href="delstaff.php?varname=<?php //echo $row['id'];?>">Delete</a></td>-->
                                               <td><button class="btn btn-warning notika-btn-warning"  onClick="deleteme(<?php echo $row['id'];?>)">Delete</button></td>
                                             </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Do you want Delete!")){
                                             window.location.href='delstaff.php?varname=' +delid+'';
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
                                          <th>Name</th>
                                          <th>Lastname</th>
                                          <th>Username</th>
                                          <th>Password</th>
                                          <th>Email</th>
                                          <th>Contact</th>
                                          <th>Mode</th>
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