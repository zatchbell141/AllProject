<?php
//include "session.php";
include 'Conn.php';
$msg="";
$output = '';
if(isset($_POST["import"]))
{
   $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {

    $output .= "<tr>";
    $centerno= mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(22, $row)->getValue());
    $coursecode = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $coursename = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $lastname = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $firstname = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(3, $row)->getValue());
    $fathername = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(4, $row)->getValue());
    $mothername = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
    $dob = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(6, $row)->getValue());
    $dob=strtotime($dob);
    $dob=date('Y-m-d',$dob);
    $gender = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
    $statusm = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
    $localaddress = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(9, $row)->getValue());
    $permaddress = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
    $caste = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(11, $row)->getValue());
    $state = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(12, $row)->getValue());
    $pincode = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(13, $row)->getValue());
    $mob = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(14, $row)->getValue());
    $email = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(15, $row)->getValue());
    $prn = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(16, $row)->getValue());
    $trn = mysqli_real_escape_string($con,$worksheet->getCellByColumnAndRow(17, $row)->getValue());
    $qualification = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(18, $row)->getValue());
    $medium = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(19, $row)->getValue());
    $admissionstatus = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(20 ,$row)->getValue());
    $aadhar = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(21 ,$row)->getValue());
    $mode="program learning";
    $fullname=$lastname." ".$firstname." ".$fathername;
   $query = "INSERT INTO studentdt(fullname,coursecode,coursename,lastname,firstname,fathername,mothername,dob,gender,statusm,localaddress,permaddress,
    caste,state,pincode,mob,email,prn,trn,qualification,medium,admissionstatus,aadhar,CenterFormNo)
    VALUES ('$fullname','$coursecode','$coursename','$lastname','$firstname','$fathername','$mothername','$dob','$gender','$statusm','$localaddress',
      '$permaddress','$caste','$state','$pincode','$mob','$email','$prn','$trn','$qualification','$medium','$admissionstatus','$aadhar','$centerno')";
   mysqli_query($con, $query);
    $output .= '<td>'.$coursecode.'</td>';
    $output .= '<td>'.$coursename.'</td>';
    $output .= '<td>'.$lastname.'</td>';
    $output .= '<td>'.$firstname.'</td>';
    $output .= '<td>'.$mothername.'</td>';

    $output .= '<td>'.$dob.'</td>';
    $output .= '<td>'.$gender.'</td>';
    $output .= '<td>'.$statusm.'</td>';
    $output .= '<td>'.$localaddress.'</td>';
    $output .= '<td>'.$permaddress.'</td>';

    $output .= '<td>'.$caste.'</td>';
    $output .= '<td>'.$state.'</td>';
    $output .= '<td>'.$statusm.'</td>';
    $output .= '<td>'.$pincode.'</td>';
    $output .= '<td>'.$mob.'</td>';

    $output .= '<td>'.$email.'</td>';
    $output .= '<td>'.$prn.'</td>';
    $output .= '<td>'.$trn.'</td>';
    $output .= '<td>'.$qualification.'</td>';
    $output .= '<td>'.$medium.'</td>';
    $output .= '<td>'.$aadhar.'</td>';
     $output .= '<td>'.$centerno.'</td>';
    $output .= '</tr>';
   }
  } 
  $output .= '</table>';
 }
else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
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
                                        <h2>Import Students Records</h2>
                                        <p>Welcome to Yash Infotech <span class="bread-ntd">Username</span></p>
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
                                 <form method="post" enctype="multipart/form-data">
                                  <h2>Select Excel File</h2>
                                  <input type="file" name="excel" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf,.csv" />
                                  <input type="submit" name="import" class="button button1" value="Import" />
                                 </form>
                                 <br />
                                 <br />
                                
                                 <?php
                                 echo $output;
                                 ?>
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
</html>