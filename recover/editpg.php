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
          
           include 'Conn.php';
            $id=$_GET['varname'];
            $sql="select * from receipt where id='$id'";
           $result=$con->query($sql);
           $row=$result->fetch_assoc();
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
                                        <h2>Edit <?php echo $row['Receipttype'];?> Receipt</h2>
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
                                
                      <form action="editpg.php" method="POST" autocomplete="off">
                           <table class="table table-sc-ex table-bordered">
                                    <tr>
                                        <td>
                                            <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" name="lbdate" value="<?php echo date("d-m-Y");?>" required>
                                            </div>
                                        </td>
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="receipo" value="<?php echo $row['ReceiptNewNo'];?>" readonly>
                                    </div>
                                </td>
                                        <td>
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtprn" value="<?php echo $row['PRN'];?>" placeholder="PRN" required placeholder="PRN">
                                    </div>
                                </td>
                                   
                                        <td>
                                           <div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txttrn" value="<?php echo $row['TRN'];?>" placeholder="TRN" required placeholder="TRN">
                                    </div> 
                                        </td>
                                     </tr>
                                      <input type="hidden"  name="txtidothers" value="<?php echo $row['studentid'];?>" placeholder="PRN" required>
                                      <input type="hidden"  name="txtid" value="<?php echo $row['id'];?>" placeholder="PRN" required>
               <input type="hidden"  name="txtfathername" value="<?php echo $row['Fathername'];?>" placeholder="PRN" required>
                <input type="hidden"  name="txtcentreno" value="<?php echo $row['CenterFormNo'];?>" placeholder="PRN" required>
                <input type="hidden"  name="txtreceiptnold" value="<?php echo $row['ReceiptOld'];?>" placeholder="PRN" required>
                                    <tr>
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtfullname"value="<?php echo $row['FullName'];?>" placeholder="Sem" required >
                                    </div></td>
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtname" value="<?php echo $row['Name'];?>" placeholder="Name" required>
                                    </div></td>
                                   
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtlastname" value="<?php echo $row['Lastame'];?>" placeholder="Lastname" required>
                                    </div></td>
                                    
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="year" value="<?php echo $row['Year'];?>" placeholder="Year" required>
                                    </div></td>
                                     </tr>
                                    <tr>
                                        
                                        <td>
                                            <div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtsem" value="<?php echo $row['Sem'];?>" placeholder="Year" required>
                                    </div>
                                        </td>
                                         <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtrecty" value="<?php echo $row['Receipttype'];?>" placeholder="Year" readonly>
                                    </div></td>
                                   
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtfees" value="<?php echo $row['Total'];?>" placeholder="Fees" readonly>
                                    </div></td>
                                    
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtpaidfees"  value="<?php echo $row['Paid'];?>"placeholder="Paid Fees">
                                    </div></td>
                                    </tr>
                                     <tr>
                                        
                                        <td>
                                            <select name="payment" id="payment" class="form-control input-lg" onchange="changetextbox();">
                                              <option name="Cheque">Cheque</option>
                                              <option name="Cash">Cash</option>
                                              <option name="MT">MT</option>
                                              <option name="DD">DD</option>
                                              <option name="NEFT">NEFT</option>
                                            </select>
                                        </td>
                                         <td><div class="nk-int-st">
                                        <input type="text" id="txtcheqno" name="txtcheqno" class="form-control input-lg" value="<?php echo $row['ChequeNo'];?>" placeholder="UTRNO/DD/Cheque Nor" required>
                                    </div></td>
                                   
                                        <td><div class="nk-int-st">
                                        <input type="text" id="txtbank" name="txtbank" class="form-control input-lg" value="<?php echo $row['Bank'];?>" placeholder="Cheque Bank/Remitter Bank" required>
                                    </div></td>
                                    
                                        <td><div class="nk-int-st">
                                        <input type="text" id="txtbennbank" name="txtbenbank" class="form-control input-lg" value="<?php echo $row['ben'];?>" placeholder="Beneficiary Bank" required>
                                    </div></td>
                                    </tr>
                                   
                                     <tr>
                                         <td>
                                            <select class="form-control input-lg" name="pmode" id="mode"  width="10px" onchange="changetextbox1()" required>
                                                        <option value="">Select fees</option>
                                                        <option value="WithoutLateFees">Without Late Fees</option>
                                                        <option value="Late Fees">Late Fees</option>
                                                        </select>
                                        </td>
                                   
                                        
                                             <td><div class="nk-int-st">
                                        <input type="date" id="txtchequd" name="txtchequd" class="form-control input-lg" value="<?php echo $row['ChequeDate'];?>" placeholder="Cheque Bank/Remitter Bank" required>
                                         </div></td>
                                         <td>
                                            <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" name="txtlatefees" id="late" value="<?php echo $row['Late'];?>" placeholder="Late Fees" required>
                                        </div>
                                        </td>
                                     
                                       <td>
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtfeesmode" value="<?php echo $row['ReceiptMode'];?>"  required>
                                    </div>
                                    </td>
                                      </tr>
                                    <tr>
                                        <td colspan="4"><button id="submit" class="btn btn-primary notika-btn-primary btn-lg" name="btnsubmit">Update</button></td>
                                        </form> 
                                    </tr>
                                </table>  
                                <?php include 'edittmvreceipt.php';?>
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
</html>