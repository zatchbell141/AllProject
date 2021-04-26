<!doctype html>
<html class="no-js" lang="">

<?php include 'onlineformhead.php' ?>
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
        <?php //include 'header.php'?>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <?php include 'menumbile.php';?>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
   <?php include 'onlinemenu.php';?>
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
                                        <h2>Online Form</h2>
                                        <p><b style="color:red"><span class="bread-ntd">Please Do not Upload .pfd file in this form</span></b></p>
                                        <p><b style="color:red"><span class="bread-ntd">First pay your Unversity Fees by NEFT/RGST/MT then fill this form</span></b></p>
                                        <p><b style="color:red"><span class="bread-ntd">Scan Your Every Document With CamScanner</span></b></p>
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
    <div class="col-sm-12">
       <!-- <marquee><h2 style="color:red">BCA Admission Process 2019-20 is open  till Saturday 06-July-2019. Please Visit Enquiry Desk between 1pm-5pm</h2></marquee>-->
      <form action="onlineform.php" method="post" enctype="multipart/form-data" autocomplete="off">
          <input type="hidden" class="form-control " name="txtdate" value="<?php echo date('Y-m-d');?>" readonly>
       <table class="table table-border">
        <tr>
          <td><img id="blah" src="#" alt="your image" name="stdphoto"/></td>
          <td><b>Photo:</b><input type="file" onchange="readURL(this);" class="form-control" name="stdphoto" placeholder="Pin Code" required accept=".jpg,.png"></td>
        </tr>
        <tr>
          <td><b>Course Code<input type="text" class="form-control " name="txtstudcode" placeholder="Course Code" value="044" readonly></b></td>
          <td><b>Course<select name="txtstudcoursename" class="form-control "  required>
          <option value="Bachelor of Computer Applications-E-First Year">Bachelor of Computer Applications-E-First Year</option>
          <option value="Bachelor of Computer Applications- R- Second Year">Bachelor of Computer Applications- R- Second Year</option>
          <option value="Bachelor of Computer Applications- R- Third Year">Bachelor of Computer Applications- R- Third Year</option>
          <option value="Bachelor of Computer Applications- R- Direct Second">Bachelor of Computer Applications- R- Direct Second</option>
          </select></b></td>
          <td><b>Admission Status<input type="text" class="form-control " name="txtstudadmission" placeholder="Admission Status" value="In Process" readonly></b></td>
          <td><b>Center Code<input type="text" class="form-control " name="txtcenterno" placeholder="Center Code" value="231" readonly></b></td>
        </tr>
        <tr>
          <th colspan="4"><b style="color:red" align="center">Personal Details</b></th>
        </tr>
       <tr>
        <td>Name:<input type="text" name="txtstdname" class="form-control" placeholder="Name"></td>
        <td>Last name:<input type="text" name="txtstlname" class="form-control" placeholder="Last Name"></td>
        <td>Father name:<input type="text" name="txtsfname" class="form-control" placeholder="Father Name"></td>
        <td>Mother name:<input type="text" name="txtsmname" class="form-control" placeholder="Mother Name"></td>
       </tr>
       <tr>
          <td>Date of Birth:<input type="date" class="form-control " name="txtstuddob" placeholder="Date of Birth" required></td>
          <td>Gender<select name="txtstudgender"  class="form-control " required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
          </td>
          <td>Email:<input type="text"class="form-control "  name="txtstudemail" placeholder="Email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></td>
           <td>Contact:<input type="text" class="form-control " name="txtstudcontact" placeholder="Contact No" title="Enter 10 digit Phone Number" required pattern="[7-9]{1}[0-9]{9}"></td>              
          </tr>
          <tr>
            <td>Status:<select name="txtstudstatus" class="form-control " required>
                       <option value="Married">Married</option>
                       <option value="Unmarried">Unmarried</option>
                       </select>
            </td>
            <td>Caste:<input type="text" class="form-control " name="txtstudcaste" placeholder="Caste" required></td>
          <td>Aadhar Card Number:<input type="text" class="form-control " name="txtstudaadhar" placeholder="Aadhar Card Number" title="Enter your 12 digit aadhar card" required pattern="\d{12}"></td>
          </tr>
          <tr>
            <th colspan="4"><b style="color:red" align="center">Address Details</b></th>
             </tr>
            <tr>
             <td colspan="2">Local Address:<input type="text" class="form-control " name="txtstudlocaladd" placeholder="Local Address" required></td>
              <td>State:<input type="text" class="form-control " name="txtstudstate" placeholder="State" title="Enter Only Characters" required pattern="^[A-Za-z -]+$"></td>
              <td>Pin Code:<input type="text" class="form-control " name="txtstudpin" placeholder="Pin Code" title="Enter Only Characters" required pattern="\d{6}"></td>
            </tr>
          <tr>
            <th colspan="4"><b style="color:red" align="center">Qualification Details</b></th>
         </tr>
         <tr>
            <td>Qualification:<select name="txtstudquli" class="form-control " required>
                 <option value="SSC">SSC</option>
                 <option value="Bachelor of Computer Applications-E-First Year">FYBCA</option>
                 </select>
            </td>
             <td>
                              University/Board:<select class="form-control" name="txtuniversity1">
                                 <?php
                                include 'Conn.php';
                                 $query1="select * from coldata";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['id']?>"><?php echo $grd['name'];?></option>
                                 <?php
                                 }
                                 ?>
                              </select>
                            </td>
            <td>Passing Year:
                                 <select name="year" class="form-control ">
                                  <option value=''>Select Year of Passing</option>
                                  <?php
                                    for ($year = 1991; $year <= 2019; $year++) {
                                      $selected = (isset($getYear) && $getYear == $year) ? 'selected' : '';
                                      echo "<option value=$year $selected>$year</option>";
                                    }
                                  ?>
                                </select>
                                </div></td>
            <td>Percentage:<input type="text" class="form-control " name="txtpercan" placeholder="Percentage" required></td>
            <tr>
                                   <td>Qualification:<select name="txtstudqulihsc" class="form-control " required>
                              <option value="HSC">HSC</option>
                              <option value="MCVC">MCVC</option>
                              <option value="ITI-NCTVT">ITI-NCTVT</option>
                              <option value="Diploma in Computers">Diploma in Computers</option>
                              <option value="Diploma in IT">Diploma in IT</option>
                              <option value="Diploma in E&TC">Diploma in E&TC</option>
                              <option value="Bachelor of Computer Applications- R- Second Year">SYBCA</option>
                              </select></div></td>
                            <td>
                              University/Board:<select class="form-control" name="txtuniversity">
                                 <?php
                                include 'Conn.php';
                                 $query1="select * from coldata";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['id']?>"><?php echo $grd['name'];?></option>
                                 <?php
                                 }
                                 ?>
                              </select>
                            </td>
                               <td>Passing Year:
                                 <select name="yearhsc" class="form-control ">
                                  <option value=''>Select Year of Passing</option>
                                  <?php
                                    for ($year = 1991; $year <= 2019; $year++) {
                                      $selected = (isset($getYear) && $getYear == $year) ? 'selected' : '';
                                      echo "<option value=$year $selected>$year</option>";
                                    }
                                    ?>
                                </select>
                                </td>
                             
                                <td>Percentage:<input type="text" class="form-control " name="txtperhsc" placeholder="Percentage" required></div></td>
                                </tr>
                                <tr>
                                  <th colspan="4"><b style="color:red" align="center">Upload Documents</b></th>
                                </tr>
                                <tr>
                                  <td>HSC/FYBCA/SYBCA:<input type="file" class="form-control" name="txtphotohsc" placeholder="Pin Code" required  accept=".jpg,.png"></td>
                                  <td>Date Of Brith Certificate:<input type="file" class="form-control" name="txtdobphoto" placeholder="Pin Code" required accept=".jpg,.png"></td>
                                  <td>Aadhar Card:<input type="file" class="form-control" name="txtaadharphoto" placeholder="Pin Code" required accept=".jpg,.png"></td>
                                  <td>Others:<input type="file" class="form-control" name="txtotherphoto" placeholder="Pin Code" accept=".jpg,.png"></td>
                                </tr>
                                <tr>
                              <td colspan="4"><input type = "submit" class="button button1" value="Next"  name="btnsubmit"></td>
                            </form>
     </table>
     <?php include 'addstudentdataonline.php';?>
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
<script>
       function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(120);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
</body>
</html>