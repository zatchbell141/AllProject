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
    <?php
  $fullname=$_GET['varname'];
  $examyrs=$_GET['examyrs'];
  $prn=$_GET['prnno'];
  $seat=$_GET['seat'];
  $sid=$_GET['sid'];  
  $date=$_GET['date'];
  include 'Conn.php';
  $isql="select count(inter) As Internal from backlog where seat='$seat' and inter='Internal' and date='$date'";
  $iresult=$con->query($isql);
  $irow=$iresult->fetch_assoc();

  $esql="select count(exter) As External from backlog where seat='$seat' and exter='External' and date='$date'";
  $eresult=$con->query($esql);
  $erow=$eresult->fetch_assoc();


    $psql="select count(pract) As Pratical from backlog where seat='$seat' and pract='Pratical' and date='$date'";
  $presult=$con->query($psql);
  $prow=$presult->fetch_assoc();

  $ifsql="select fees from fees where name='Internal'";
  $ifresult=$con->query($ifsql);
  $ifrow=$ifresult->fetch_assoc();


  $efsql="select fees from fees where name='External'";
  $efresult=$con->query($efsql);
  $efrow=$efresult->fetch_assoc();

   $pfsql="select fees from fees where name='Pratical'";
  $pfresult=$con->query($pfsql);
  $pfrow=$pfresult->fetch_assoc();

 $totalinter=$irow['Internal']*$ifrow['fees'];
 $totalexter=$erow['External']*$efrow['fees'];
 $totalpract=$prow['Pratical']*$pfrow['fees'];
 $totalfees=$totalinter+$totalexter+$totalpract;

  $rsql="SELECT ReceiptNewNo FROM `receipt` ORDER BY id DESC";
           $rresult=$con->query($rsql);
           $rrow=$rresult->fetch_assoc();
           $recptno=explode('-', $rrow['ReceiptNewNo']);
           $rn=$recptno[1]+1;

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
                                        <h2>Backlog Details</h2>
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
                             <form id="addform" action="backlogaddfees.php" method="POST" autocomplete="off">
            <input type="hidden" name="txtstudentid" value="<?php echo $sid;?>">
          <table class="table table-sc-ex table-bordered">
            <tr>
             <td> Receipt No:<div class="nk-int-st"><div class="nk-int-st"><input type="text" class="form-control " name="receipo" value="<?php echo date('Ymd').'-'.$rn;?>" readonly></div></td>
             <td> Exam Year:<div class="nk-int-st"><div class="nk-int-st"><input type="text" class="form-control " name="txtexamyrs" value="<?php echo $examyrs;?>" readonly></div></td>
             <td colspan="2"> PRN:<div class="nk-int-st"><div class="nk-int-st"><input type="text" class="form-control " name="prn" value="<?php echo $prn;?>" readonly></div></td>
            </tr>
            <tr>
              <td>Fullname:<div class="nk-int-st"><div class="nk-int-st"><input type="text" class="form-control " name="txtfullname" value="<?php echo $fullname;?>"></div></td>
              <td>Seat No:<div class="nk-int-st"><div class="nk-int-st"><input type="text" class="form-control " name="txtseat" value="<?php echo $seat;?>"></div></td>
              <td>Total Fees:<div class="nk-int-st"><div class="nk-int-st"><input type="text" class="form-control "  name="txtfees" value="<?php echo $totalfees;?>"></div></td>
            </tr>
            <tr>
              <td>Paid Fees:<div class="nk-int-st"><div class="nk-int-st"><input type="text" class="form-control " name="txtpaid" required></div></td>
              <td>Payment Type:<select name="payment" class="form-control " id="payment" onchange="changetextbox();">
                  <option name="Cheque">Cheque</option>
                  <option name="Cash">Cash</option>
                  <option name="MT">MT</option>
                  <option name="DD">DD</option>
                  <option name="NEFT">NEFT</option>
                  <option name="TMV Fees">TMV Fees</option>
                </select>
                <td>UTRNO/DD/Cheque No:<div class="nk-int-st"><input type="text" class="form-control " id="txtcheqno" name="txtcheqno" placeholder="Cheque Number" required></div></td>
               
              </tr>
               <tr>
                 <td>UTRNO/DD/MT/Cheque Date:<div class="nk-int-st"><input type="date" class="form-control " id="txtchequd" name="txtchequd" placeholder="Paid Fees" required></div></td>
                <!--<td>Bank:<input type="text" id="txtbank" name="txtbank" placeholder="Bank" required></td>-->
                <td>Cheque Bank/Remitter Bank:<div class="nk-int-st"><input type="text" class="form-control "id="txtbank" name="txtbank" placeholder="Remitter Bank" required></div></td>
                <td>Beneficiary Bank:<div class="nk-int-st"><input type="text"class="form-control " id="txtbenabank" name="txtbenbank" placeholder="Beneficiary Bank" required></div></td>
              </tr>
               <tr>
                 <td>Receipt Type:<div class="nk-int-st"><input type="text" class="form-control " name="txtrecty" value="BCABACKLOG" placeholder="Year" readonly></div></td>
                 <td>Mode:<select class="form-control " name="pmode" id="mode"  width="10px" onchange="changetextbox1()" required>
                                <option value="">Select fees</option>
                                <option value="WithoutLateFees">Without Late Fees</option>
                                <option value="Late Fees">Late Fees</option>
                                </select></td>
           
                 <td>Late Fees:<div class="nk-int-st"><input type="text" class="form-control " name="txtlatefees" id="late" placeholder="Paid Fees" required></div></td>
              </tr>
              <tr>
                <td>Change Of Exam center Fees:
                    <select class="form-control " name="ccenter" id="chgcenter" onchange="changetextbox2();">
                  <option value="">Select Center fees</option>
                  <option value="yash">Yash</option>
                  <option value="others">Others</option>
                </select>
                </td>
                <td>Center fees:<div class="nk-int-st"><input type="text" class="form-control " name="txtcenter" id="center1" placeholder="Center Fees" required></div></td>
                <td colspan="1"> Date:<div class="nk-int-st"><input type="text" class="form-control " name="lbdate" value="<?php echo date('d-m-Y');?>" readonly></div></td>
              </tr>
            </tr>
           <tr>
                                        <td colspan="4"><button id="submit" class="btn btn-primary notika-btn-primary btn-lg">Save</button></td>
                                        </form> 
                                    </tr>
                                </table>  
                                 <div id="msg"></div>
                                    </div>
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
            document.getElementById("txtbenabank").disabled = true;
            
    }
    else
    {
            document.getElementById("txtbank").disabled = false;
            document.getElementById("txtcheqno").disabled = false;
            document.getElementById("txtchequd").disabled = false;
            document.getElementById("txtrembank").disabled = false;
            document.getElementById("txtbenabank").disabled = false;
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


      function changetextbox2()
  {
    x=document.getElementById("chgcenter").value;
    if(x=="yash")
    {
            document.getElementById("center1").disabled = true;
               }
    else
    {
            document.getElementById("center1").disabled = false;
 
    }
     }

</script>
</html>