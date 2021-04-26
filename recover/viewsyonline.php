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
<?php
include 'Conn.php';
    $id=$_GET['varname'];
    $sql="select * from addonline where active=1 and id='$id'";
    $result=$con->query($sql);
    $row=$result->fetch_assoc();

    $name=$row['fullname'];
    $feessql="select * from receipt where FullName='$name' and receipttype='TMVFEES' and year='SYBCA' order by id ASC";
    $feesresult=$con->query($feessql);
    $feesrow=$feesresult->fetch_assoc();

    $receiptno=$feesrow['ReceiptNewNo'];
    $imgfeessql="select * from receiptupload where receiptid='$receiptno' order by id ASC";
    $imgfeesresult=$con->query($imgfeessql);
    $imgfeesrow=$imgfeesresult->fetch_assoc();

?>

    <table class="table table-border table-hover">
        <tr class="success">
            <th colspan="5" style=" text-align: center;"><b style="color:red;">Center Details</b></th>
        </tr>
        <tr>
             <td><b>Course:<?php echo $row['course'];?></b></td>
            <td><b>Center Code:<?php echo $row['centercode'];?></b></td>
            <td><b>Course Code:<?php echo $row['coursecode'];?></b></td>
            <td colspan="2"><b>Admission Status:<?php echo $row['addmissionstatus'];?></b></td>
            
        </tr>

        <tr>
            <td><img src="https://stdm.bcaedu.in/syform/<?php echo $row['stdphoto'];?>" height="200"  width="150"></td>
            <td><img src="https://stdm.bcaedu.in/syform/<?php echo $row['sign'];?>" height="200"  width="150"></td>
        </tr>
        <tr>
            
        </tr>
        <tr class="success">
            <td colspan="5" style=" text-align: center;"><b style="color:red;">Personal Details</b></td>
        </tr>
        <tr>
            <td><b>Fullname:<?php echo $row['fullname'];?></b></td>
            <td><b>Name:<?php echo $row['name'];?></b></td>
            <td><b>Last name:<?php echo $row['lastname'];?></b></td>
            <td><b>Father Name:<?php echo $row['fathername'];?></b></td>
            <td><b>Mother Name:<?php echo $row['mothername'];?></b></td>
        </tr>
        <tr>
            <td><b>Address:<?php echo $row['address'];?></b></td>
            <td><b>State:<?php echo $row['state'];?></b></td>
            <td><b>Pin Code:<?php echo $row['pin'];?></b></td>
            <td><b>Contact No:<?php echo $row['contact'];?></b></td>
            <td><b>Email:<?php echo $row['email'];?></b></td>
        </tr>
        <tr>
            <td><b>Date Of Birth:<?php echo $row['dob'];?></b></td>
            <td><b>Aadhar Card Number:<?php echo $row['aadhar'];?></b></td>
            <td><b>Status:<?php echo $row['statusm'];?></b></td>
            <td><b>Caste:<?php echo $row['caste'];?></b></td>
            <td><b>PRN:<?php echo $row['prn'];?></b></td>
        </tr>
        <tr class="success">
            <th colspan="5" style=" text-align: center;"><b style="color:red;">Qualification Details</b></th>
        </tr>
        	 <?php
					$univer2=$row['univer1'];
					$unv2sql="select * from coldata where id='$univer2'";
					$unv2result=$con->query($unv2sql);
					$unv2row=$unv2result->fetch_assoc();

				?>
        <tr>
            <td><b>Qualification:<?php echo $row['qulic1'];?></b></td>
            <td><b>University:<?php echo $unv2row['name'];?></b></td>
            <td><b>Passing Year:<?php echo $row['year1'];?></b></td>
            <td><b>Percentage:<?php echo $row['per1'];?></b></td>
            <td>&nbsp;</td>
        </tr>
        <?php
        	

			$id=$row['univer2'];
			$uni2sql="select * from coldata where id='$id'";
			$uni2result=$con->query($uni2sql);
			$uni2row=$uni2result->fetch_assoc();
        ?>
         <tr>
            <td><b>Qualification:<?php echo $row['qulic2'];?></b></td>
            <td><b>University:<?php echo $uni2row['name'];?></b></td>
            <td><b>Passing Year:<?php echo $row['year2'];?></b></td>
            <td><b>Percentage:<?php echo $row['per2'];?></b></td>
            <td>&nbsp;</td>
        </tr>
        <tr class="success">
            <td colspan="5" style=" text-align: center;"><b style="color:red;">Documents Download</b></td>
        </tr>
        <tr>
            <td><b><a href="https://stdm.bcaedu.in/syform/<?php echo $row['aadhrcd'];?>" target="_blank">Aadhar Card</a></b></td>
            <td><b><a href="https://stdm.bcaedu.in/syform/<?php echo $row['hsc'];?>" target="_blank">HSC</a></b></td>
            <td><b><a href="https://stdm.bcaedu.in/syform/<?php echo $row['dobcertif'];?>" target="_blank">DOB</a></b></td>
            <td><b><a href="https://stdm.bcaedu.in/syform/<?php echo $row['others'];?>" target="_blank">Other</a></b></td>
            <td>&nbsp;</td>
        </tr>
         <tr class="success">
            <th colspan="5" style=" text-align: center;"><b style="color:red;">Fees Details</b></th>
        </tr>
        <tr>
                    <td><b>Receipt No:<?php echo $feesrow['ReceiptNewNo'];?></b></td>
                    <td><b>Total Fees:<?php echo $feesrow['Total'];?></b></td>
                    <td><b>Paid Fees:<?php echo $feesrow['Paid'];?></b></td>
                    <td><b>Balance Fees:<?php echo $feesrow['Balance'];?></b></td>
                </tr>
                <tr>
                    <td><b>Payment Type:<?php echo $feesrow['PaymentType'];?></b></td>
                    <td><b>UTRNO/DD/Cheque Number:<?php echo $feesrow['ChequeNo'];?></b></td>
                    <td><b>Chaque/DD/NEFT/MT Date:<?php 
                        $date=$feesrow['ChequeDate'];
                                $date=strtotime($date);
                                $date=date('d-m-Y',$date);
                                echo $date

                    ?></b></td>
                    <td><b>Cheque Bank/Remitter Bank:<?php echo $feesrow['Bank'];?></b></td>
                    
                </tr>
                <tr>
                    <td colspan="4"><b>Beneficiary Bank:<?php echo $feesrow['ben'];?></b></td>
                </tr>
        <tr class="success">
            <td colspan="5" style=" text-align: center;"><b style="color:red;">Bank Slip </b></td>
        </tr>
        <tr>
            <td colspan="5"><img src="https://stdm.bcaedu.in/syform/<?php echo $imgfeesrow['file'];?>" height="200"  width="1300"></td>
        </tr>
    </table>

    



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