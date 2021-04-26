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
                                        <h2>Edit Online Admission Student Data</h2>
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
    <?php
    include 'Conn.php';
     $id=$_GET['varname'];
     $sql="select * from addonline where active=1 and id='$id'";
     $result=$con->query($sql);
     $row=$result->fetch_assoc();
    ?>
    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn" align="center">
                            	 <div class="data-table-area">
                            	     <form action="" method="post" autocomplete="off">
                            	     <table class="table table-border">
        <tr>
          <td>Previous Uploaded:<img src="<?php echo $row['stdphoto']?>" alt="your image" width="100" height="120" name="stdphoto"/></td>
          <td><img id="blah" src="#" alt="your image" name="stdphoto"/></td>
          <td colspan="3"><b>Photo:</b><input type="file"  onchange="readURL(this);" class="form-control" name="stdphoto"  required></td>
        </tr>
        <tr>
          <td><b>Course Code<input type="text" class="form-control " name="txtstudcode" placeholder="Course Code" value="044" readonly></b></td>
          <td><b>Course<select name="txtstudcoursename" class="form-control "  required>
          <option value="Bachelor of Computer Applications-E-First Year">Bachelor of Computer Applications-E-First Year</option>
          <option value="Bachelor of Computer Applications- R- Second Year">Bachelor of Computer Applications- R- Second Year</option>
          <option value="Bachelor of Computer Applications- R- Third Year">Bachelor of Computer Applications- R- Third Year</option>
          </select></b></td>
          <td><b>Admission Status<input type="text" class="form-control " name="txtstudadmission" placeholder="Admission Status" value="In Process" readonly></b></td>
          <td><b>Center Code<input type="text" class="form-control " name="txtcenterno" placeholder="Center Code" value="231" readonly></b></td>
        </tr>
        <tr>
          <th colspan="4"><b style="color:red" align="center">Personal Details</b></th>
        </tr>
       <tr>
        <td>Name:<input type="text" name="txtstdname" value="<?php echo $row['name']?>" class="form-control" placeholder="Name"></td>
        <td>Last name:<input type="text" name="txtstlname"  value="<?php echo $row['lastname']?>" class="form-control" placeholder="Last Name"></td>
        <td>Father name:<input type="text" name="txtsfname" value="<?php echo $row['fathername']?>" class="form-control" placeholder="Father Name"></td>
        <td>Mother name:<input type="text" name="txtsmname" value="<?php echo $row['mothername']?>" class="form-control" placeholder="Mother Name"></td>
       </tr>
       <tr>
          <td>Date of Birth:<input type="date" class="form-control " value="<?php echo $row['dob']?>" name="txtstuddob" placeholder="Date of Birth" required></td>
          <td>Gender<select name="txtstudgender"  class="form-control "  required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
          </td>
          <td>Email:<input type="text"class="form-control "  value="<?php echo $row['email']?>" name="txtstudemail" placeholder="Email" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></td>
           <td>Contact:<input type="text" class="form-control " value="<?php echo $row['contact']?>" name="txtstudcontact" placeholder="Contact No" title="Enter 10 digit Phone Number" required pattern="[7-9]{1}[0-9]{9}"></td>              
          </tr>
          <tr>
            <td>Status:<select name="txtstudstatus" class="form-control " required>
                       <option value="Married">Married</option>
                       <option value="Unmarried">Unmarried</option>
                       </select>
            </td>
            <td>Caste:<input type="text" class="form-control " value="<?php echo $row['caste']?>" name="txtstudcaste" placeholder="Caste" required></td>
          <td>Aadhar Card Number:<input type="text" class="form-control " value="<?php echo $row['aadhar']?>" name="txtstudaadhar" placeholder="Aadhar Card Number" title="Enter your 12 digit aadhar card" required pattern="\d{12}"></td>
          </tr>
          <tr>
            <th colspan="4"><b style="color:red" align="center">Address Details</b></th>
             </tr>
            <tr>
             <td colspan="2">Local Address:<input type="text" class="form-control " value="<?php echo $row['address']?>" name="txtstudlocaladd" placeholder="Local Address" required></td>
              <td>State:<input type="text" class="form-control" name="txtstudstate" value="<?php echo $row['state']?>" placeholder="State" title="Enter Only Characters" required pattern="^[A-Za-z -]+$"></td>
              <td>Pin Code:<input type="text" class="form-control" name="txtstudpin" value="<?php echo $row['pin']?>" placeholder="Pin Code" title="Enter Only Characters" required pattern="\d{6}"></td>
            </tr>
          <tr>
            <th colspan="4"><b style="color:red" align="center">Qualification Details</b></th>
         </tr>
         <tr>
            <td>Qualification:<select name="txtstudquli" class="form-control " required>
                 <option value="SSC">SSC</option>
                 </select>
            </td>
             <td>
                              University:<select class="form-control" name="txtuniversity1">
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
                                    <td>Percentage:<input type="text" class="form-control " name="txtpercan"value="<?php echo $row['per1']?>" placeholder="Percentage" required></td>
                                    <tr>
                                   <td>Qualification:<select name="txtstudqulihsc" class="form-control " required>
                              <option value="HSC">HSC</option>
                              <option value="MCVC">MCVC</option>
                              <option value="ITI-NCTVT">ITI-NCTVT</option>
                              <option value="Diploma in Computers">Diploma in Computers</option>
                              <option value="Diploma in IT">Diploma in IT</option>
                              <option value="Diploma in E&TC">Diploma in E&TC</option>
                              </select></div></td>
                            <td>
                              University:<select class="form-control" name="txtuniversity">
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
                             
                                <td>Percentage:<input type="text" class="form-control" value="<?php echo $row['per2']?>" name="txtperhsc" placeholder="Percentage" required></div></td>
                                </tr>
                                <tr>
                                  <th colspan="4"><b style="color:red" align="center">Upload Documents</b></th>
                                </tr>
                                <tr>
                                  <td>HSC:<input type="file" class="form-control" name="txtphotohsc" placeholder="Pin Code" required></td>
                                  <td>Date Of Brith Certificate:<input type="file" class="form-control" name="txtdobphoto" placeholder="Pin Code" required></td>
                                  <td>Aadhar Card:<input type="file" class="form-control" name="txtaadharphoto" placeholder="Pin Code" required></td>
                                  <td>Others:<input type="file" class="form-control" name="txtotherphoto" placeholder="Pin Code"></td>
                                </tr>
                                <tr>
                                  <th colspan="4"><b style="color:red" align="center">Uploaded Documents</b></th>
                                </tr>
                                 <tr>
                                    <td>HSC Upload Certificate:<img src="<?php echo $row['hsc']?>" alt="your image" width="100" height="120" name="stdphoto"/></td>
                                    <td>DOB Upload Certificate:<br><img src="<?php echo $row['dobcertif']?>" alt="your image" width="100" height="120" name="stdphoto"/></td>
                                    <td>Aadhar Upload Certificate:<img src="<?php echo $row['aadhrcd']?>" alt="your image" width="100" height="120" name="stdphoto"/></td>
                                    <td>Other Upload Certificate:<img src="<?php echo $row['others']?>" alt="your image" width="100" height="120" name="stdphoto"/></td>
                                </tr>
                                <tr>
                              <td colspan="4"><input type = "submit" class="button button1" value="Update"  name="btnsubmit"></td>
                              </form>
                            	 </div>
                           </div>
                           <?php include 'updatestudentonline.php';?>
                   </div>
               </div>
           </div>
    </div><script>
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
</div>
</div>                    	            <!-- jquery
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
  </html>