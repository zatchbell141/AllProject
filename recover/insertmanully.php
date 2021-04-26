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
                                        <h2>Insert Manually</h2>
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
                <form id="addform" action="addstudentdata.php" method="post" autocomplete="off">
               <table class="table table-sc-ex table-bordered">
                <tr>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudname" placeholder="Name" required></td>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudlast" placeholder="Lastname" required></td>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudfather" placeholder="Fathername" required></td>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudmother" placeholder="Mothername" required></td>
                </tr>
                <tr>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudcode" placeholder="Course Code" value="044" readonly></td>
                  <td>Course<div class="nk-int-st"><select name="txtstudcoursename" class="form-control input-lg"  required>
                  <option value="Bachelor of Computer Applications-E-First Year">Bachelor of Computer Applications-E-First Year</option>
                  <option value="Bachelor of Computer Applications- R- Second Year">Bachelor of Computer Applications- R- Second Year</option>
                  <option value="Bachelor of Computer Applications- R- Third Year">Bachelor of Computer Applications- R- Third Year</option>
                  </select></td>
                  <td>Date of Birth:<input type="date" class="form-control input-lg" name="txtstuddob" placeholder="Date of Birth" required></td>
                  <td>Gender:<div class="nk-int-st"><select name="txtstudgender"  class="form-control input-lg" required>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  </select></td>
                </tr>
                <tr>
                     <td><div class="nk-int-st"><select name="txtstudstatus" class="form-control input-lg" required>
                  <option value="Married">Married</option>
                  <option value="Unmarried">Unmarried</option>
                  </select></td>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudlocaladd" placeholder="Local Address" required></td>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudperment" placeholder="Permant Address" required></td>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudstate" placeholder="State" required></td>
                  
                </tr>
                <tr>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudpin" placeholder="Pin Code" required></td>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudcaste" placeholder="Caste" required></td>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudcontact" placeholder="Contact No" required></td>
                  <td><div class="nk-int-st"><input type="text"class="form-control input-lg"  name="txtstudemail" placeholder="Email" required></td>
                </tr>
                <tr>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudprn" placeholder="PRN" required></td>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudtrn" placeholder="TRN" required></td>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudquli" placeholder="Qualification" required></td>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudmedium" placeholder="Medium" required></td>
                </tr>
                <tr>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudadmission" placeholder="Admission Status" value="In Process" readonly></td>
                  <td><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtstudaadhar" placeholder="Aadhar Card" required></td>
                  <td colspan="2"><div class="nk-int-st"><input type="text" class="form-control input-lg" name="txtcenterno" placeholder="Center Form No" value="231" readonly></td>
                  
                  </form>
                </tr>
                <tr>
                    <td colspan="4"><button class="btn btn-primary notika-btn-primary btn-lg" id="submit">Add Students</button></td>
                </tr>
                
                
                <tr>
                   <td colspan="4"><div id="msg"></td>
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
                <th>StudentId</td>
                <th>Course Code</td>
                <th>Course Name</td>
                <th>Admission Years</td>
                <th>Lastname</td>
                <th>Firstname</td>
                <th>Fathername</td>
                <th>Mothername</td>
                <th>Date of Birth</td>
                <th>Gender</td>
                 <th>Status Married</td>
                <th>LocalAddress</td>
                <th>PermantAddress</td>
                <th>Caste</td>
                <th>State</td>
                <th>Pincode</td>
                <th>Contact</td>
                <th>Email</td>
                <th>PRN</td>
                <th>TRN</td>
                <th>Qualification</td>
                <th>Medium</td>
                <th>Admission Status</td>
                <th>Aadhar</td>
                <th>Edit</td>
                <th>Delete</td>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    include 'Conn.php';
                                    $sql="select * from studentdt where active=1 ORDER BY studentid DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['studentid'];?></td>
                                            <td><?php echo $row['coursecode'];?></td>
                                            <td><?php echo $row['coursename'];?></td>
                                             <td><?php echo $row['admissionyrs'];?></td>
                                            <td><?php echo $row['lastname'];?></td>
                                            <td><?php echo $row['firstname'];?></td>
                                            <td><?php echo $row['fathername'];?></td>
                                            <td><?php echo $row['mothername'];?></td>
                                            <td><?php echo $row['dob'];?></td>
                                            <td><?php echo $row['gender'];?></td>

                                            <td><?php echo $row['statusm'];?></td>
                                            <td><?php echo $row['localaddress'];?></td>
                                            <td><?php echo $row['permaddress'];?></td>
                                            <td><?php echo $row['caste'];?></td>
                                            <td><?php echo $row['state'];?></td>
                                            <td><?php echo $row['pincode'];?></td>
                                            <td><?php echo $row['mob'];?></td>
                                            <td><?php echo $row['email'];?></td>

                                            <td><?php echo $row['prn'];?></td>
                                            <td><?php echo $row['trn'];?></td>
                                            <td><?php echo $row['qualification'];?></td>
                                            <td><?php echo $row['medium'];?></td>
                                            <td><?php echo $row['admissionstatus'];?></td>
                                            <td><?php echo $row['aadhar'];?></td>
                                            <td><a href="editstudentrecord.php?varname=<?php echo $row['studentid'];?>">Edit</a></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="deleteme(<?php echo $row['studentid']; ?>)">Delete</button>
                                             </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Are You Sure you want to delete:"+" "+delid)){
                                             window.location.href='delstudent.php?varname=' +delid+'';
                                             return true;
                                             }
                                             } 
                                             </script>
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>
                                
                               </tbody>
                                <tfoot>
                                    <tr>
                                        <th>StudentId</td>
                <th>Course Code</td>
                <th>Course Name</td>
                 <th>Center Form No</td>
                <th>Lastname</td>
                <th>Firstname</td>
                <th>Fathername</td>
                <th>Mothername</td>
                <th>Date of Birth</td>
                <th>Gender</td>
                 <th>Status Married</td>
                <th>LocalAddress</td>
                <th>PermantAddress</td>
                <th>Caste</td>
                <th>State</td>
                <th>Pincode</td>
                <th>Contact</td>
                <th>Email</td>
                <th>PRN</td>
                <th>TRN</td>
                <th>Qualification</td>
                <th>Medium</td>
                <th>Admission Status</td>
                <th>Aadhar</td>
                <th>Delete</td>
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