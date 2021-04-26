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
       
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <?php include 'menumbile.php';?>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
   <?php include 'onlinemenu.php';?>
    <!-- Main Menu area End-->
    <?php
             include 'Conn.php';
            $name=$_GET['varname'];
            $sql="select * from addonline where fullname='$name'";
           $result=$con->query($sql);
           $row=$result->fetch_assoc();

           $rsql="SELECT ReceiptNewNo FROM `receipt` ORDER BY id DESC";
           $rresult=$con->query($rsql);
           $rrow=$rresult->fetch_assoc();
           $recptno=explode('-', $rrow['ReceiptNewNo']);
           $rn=$recptno[1]+1;

           $fname=$row['course'];
            $feesmode="2019-2020 TMV REGULAR LATEFEESFYBCA";
            $fsql="select * from fees where name='$fname' and mode='$feesmode' and active=1 ";
           $fresult=$con->query($fsql);
           $frow=$fresult->fetch_assoc();
    ?>    
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
                                        <p><b style="color:red"><span class="bread-ntd">If You Done with NEFT,RTGS or MT then Only Fill This form.</span></b></p>
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
     <form id="addform" action="onlinefrees.php" method="POST" autocomplete="off" enctype="multipart/form-data">
     <table class="table table-bordered">
        <tr>
            <td>Date<input type="text" name="lbdate" value="<?php echo date('d-m-Y')?>" class="form-control" readonly></td>
            <td>Fullname<input type="text" name="txtfullname" class="form-control" value="<?php echo $row['fullname']?>" readonly></td>
            <td>Receipt No:<input type="text" class="form-control" name="receipo" value="<?php echo date("Ymd").'-'.$rn;?>" readonly></td>
            <td>Name<input type="text" class="form-control " name="txtname" value="<?php echo $row['name'];?>" placeholder="Name" readonly></td>
            <td>Last Name<input type="text" class="form-control " name="txtlastname" value="<?php echo $row['lastname'];?>" placeholder="Name" readonly></td>
        </tr>
        <tr>
            <td>Father Name<input type="text" class="form-control " name="txtfathername" value="<?php echo $row['fathername'];?>" placeholder="Name" readonly></td>
            <td>Mother Name<input type="text" class="form-control " name="txtothername" value="<?php echo $row['mothername'];?>" placeholder="Name" readonly></td>
             <td colspan="2">Course<input type="text" class="form-control " name="txtcoursenm" value="<?php echo $row['course'];?>" placeholder="Name" readonly></td>
             <td>
                 Sem:<input type="text" class="form-control" name="txtsem" value="<?php echo $frow['sem'];?>" placeholder="Year" readonly>
             </td>
             
        </tr>
        <tr>
            <td>
                  Payment Type:<select name="payment" id="payment" class="form-control" onchange="changetextbox();">
                                              
                                              <option name="MT">MT</option>
                                              <option name="DD">DD</option>
                                              <option name="NEFT">NEFT</option>
                                            </select>
                                        </td>
            <td>Fees<input type="text" class="form-control " name="txtfees" value="<?php echo $frow['tmvFees'];?>" placeholder="Name" readonly></td>
            <td>Paid Fees<input type="text" class="form-control" name="txtpaidfees"  placeholder="Paid Fees"></td>

            <td>UTRNO/DD/Number:<input type="text" id="txtcheqno" name="txtcheqno" class="form-control" placeholder="UTRNO/DD/Cheque No" required></td>
            
            <td>Chaque/DD/NEFT/MT Date:<input type="date" id="txtchequd" name="txtchequd" class="form-control" placeholder="Chaque/DD/NEFT/MT" required></td>
            
           
        </tr>
        <tr>
             
            <td colspan="2">
                Cheque Bank/Remitter Bank:<input type="text" id="txtbank" name="txtbank" class="form-control" placeholder="Cheque Bank/Remitter Bank" required>
            </td>
            <td>
                Beneficiary Bank:<input type="text" id="txtbennbank" name="txtbenbank" class="form-control" placeholder="Beneficiary Bank" required>
            </td>
            <td>
                Late Fees:<input type="text" class="form-control" name="txtlatefees" id="late" placeholder="Late Fees" value="0" readonly>
            </td>
             <td>Bank Receipt:<input type="file" name="txtbankreceipt" class="form-control" required></td>
                
        </tr>
        <tr>
          <td><input type="hidden" class="form-control" name="txtrecty" value="TMVFEES" placeholder="Year" readonly></td>
               
           <td><input type="hidden" class="form-control" name="txtidothers" value="TMVFEES" placeholder="Year" value="<?php echo $row['id'];?>" readonly></td>
         
        </tr>
        <tr>
            <td colspan="5"><input type = "submit" class="button button1" value="Submit"  name="btnsubmit"></td></form>
        </tr>
     </table>
     <?php include 'addtmvfeesonline.php';?>
     <table class="table tbale-striped">
         <tr>
             <td>Step No:1 Select More setting</td>
             <td>Step No:2 Check this checkbox</td>
         </tr>
         <tr>
             <td><img src="img/stepno 1.JPG"></td>
             <td><img src="img/step no2.JPG"></td>
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
  function changetextbox()
  {
    y=document.getElementById("payment").value;
    if(y=="Cash")
    {
            document.getElementById("txtbank").disabled = true;
            document.getElementById("txtcheqno").disabled = true;
            document.getElementById("txtchequd").disabled = true;
            document.getElementById("txtrembank").disabled = true;
            document.getElementById("txtbennbank").disabled = true;
            
    }
    else
    {
            document.getElementById("txtbank").disabled = false;
            document.getElementById("txtcheqno").disabled = false;
            document.getElementById("txtchequd").disabled = false;
            document.getElementById("txtrembank").disabled = false;
            document.getElementById("txtbennbank").disabled = false;
    }
}
     function changetextbox1()
  {
    x=document.getElementById("mode").value;
    if(x=="WithoutLateFees")
    {
            document.getElementById("late").disabled = true;
               }
    else
    {
            document.getElementById("late").disabled = false;
 
    }
    
}
</script>
  </body>
</html>