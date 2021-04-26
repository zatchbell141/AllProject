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
                                        <h2>Convocation Fees Receipt</h2>
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
        <!-- Main Menu area End-->
     <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn" align="center">
                                 <form action="convo.php" method="post" autocomplete="off">
                               <table class="table table-sc-ex table-bordered">
            <tr>
                <td>
              <div class="nk-int-st">
                <input type="text" list="browsers" name="txtaddname" Placeholder="Name" class="form-control input-lg">
                 </div>
             </td>
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
            <!--  <tr>
              <td>
                 <div class="nk-int-st">
                <input type="text" list="browsers1" name="txtinstm" Placeholder="Mode" class="form-control input-lg">
            </div>
            </td>
               <datalist id="browsers1">
                      <?php
                                include 'Conn.php';
                                 $query1="select DISTINCT(mode) from fees";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['mode'];?>"><?php echo $grd['mode']?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist>
             
            </tr> -->
            <tr>
              <td><input type = "submit" class="button button1" value="Search"  name="txtsrchuser"></td>
           </form>
            </tr>
         </table>
         <?php
          
          if(isset($_POST['txtsrchuser']))
          {
             include 'Conn.php';
            $name=$_POST['txtaddname'];
            $sql="select * from studentdt where fullname='".$name."'";
           $result=$con->query($sql);
           $row=$result->fetch_assoc();

            $fname="CONVO";
            //$feesmode=$_POST['txtinstm'];
            $fsql="select * from fees where name='$fname' and active=1";
           $fresult=$con->query($fsql);
           $frow=$fresult->fetch_assoc();

             
            $rsql="SELECT ReceiptNewNo FROM `receipt` ORDER BY id DESC";
           $rresult=$con->query($rsql);
           $rrow=$rresult->fetch_assoc();
           $recptno=explode('-', $rrow['ReceiptNewNo']);
           $rn=$recptno[1]+1;
           //echo $rrow['ReceiptNewNo'];
          }

         ?>
                                 
                    <form id="addform" action="coladd.php" method="POST" autocomplete="off">
                           <table class="table table-sc-ex table-bordered">
                                    <tr>
                                        <td>
                                            <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" name="lbdate" value="<?php echo date("d-m-Y");?>" readonly>
                                            </div>
                                        </td>
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="receipo" value="<?php echo date("Ymd").'-'.$rn;?>" readonly>
                                    </div>
                                </td>
                                        <td>
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtprn" value="<?php echo $row['prn'];?>" placeholder="PRN" readonly placeholder="PRN">
                                    </div>
                                </td>
                                   
                                        <td>
                                           <div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txttrn" value="<?php echo $row['trn'];?>" placeholder="TRN" readonly placeholder="TRN">
                                    </div> 
                                        </td>
                                     </tr>
                                      <input type="hidden"  name="txtidothers" value="<?php echo $row['studentid'];?>" placeholder="PRN" readonly>
               <input type="hidden"  name="txtfathername" value="<?php echo $row['fathername'];?>" placeholder="PRN" readonly>
                <input type="hidden"  name="txtcentreno" value="<?php echo $row['CenterFormNo'];?>" placeholder="PRN" readonly>
                                    <tr>
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtfullname"value="<?php echo $row['fullname'];?>" placeholder="Sem" readonly >
                                    </div></td>
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtname" value="<?php echo $row['firstname'];?>" placeholder="Name" readonly>
                                    </div></td>
                                   
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtlastname" value="<?php echo $row['lastname'];?>" placeholder="Lastname" readonly>
                                    </div></td>
                                    
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="year" value="<?php echo $frow['year'];?>" placeholder="Year" readonly>
                                    </div></td>
                                     </tr>
                                    <tr>
                                        
                                        <td>
                                            <div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtsem" value="<?php echo $frow['sem'];?>" placeholder="Year" readonly>
                                    </div>
                                        </td>
                                         <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtrecty" value="BCACONVOCATION" placeholder="Year" readonly>
                                    </div></td>
                                   
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtfees" value="<?php echo $frow['fees'];?>" placeholder="Fees" readonly>
                                    </div></td>
                                    
                                        <td><div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtpaidfees"  placeholder="Paid Fees">
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
                                              <option name="TMV Fees">TMV Fees</option>
                                            </select>
                                        </td>
                                         <td><div class="nk-int-st">
                                        <input type="text" id="txtcheqno" name="txtcheqno" class="form-control input-lg" placeholder="UTRNO/DD/Cheque Nor" required>
                                    </div></td>
                                   
                                        <td><div class="nk-int-st">
                                        <input type="text" id="txtbank" name="txtbank" class="form-control input-lg" placeholder="Cheque Bank/Remitter Bank" required>
                                    </div></td>
                                      <td><div class="nk-int-st">
                                        <input type="date" id="txtchequd" name="txtchequd" class="form-control input-lg" placeholder="Cheque Bank/Remitter Bank" required>
                                         </div></td>
                                       
                                    </tr>
                                     <tr>
                                         <td><div class="nk-int-st">
                                        <input type="text" id="txtbennbank" name="txtbenbank" class="form-control input-lg" placeholder="Beneficiary Bank" required>
                                    </div></td>
                                         <td>
                                            <select class="form-control input-lg" name="pmode" id="mode"  width="10px" onchange="changetextbox1()" required>
                                                        <option value="">Select fees</option>
                                                        <option value="WithoutLateFees">Without Late Fees</option>
                                                        <option value="Late Fees">Late Fees</option>
                                                        </select>
                                        </td>
                                          
                                         <td>
                                            <div class="nk-int-st">
                                            <input type="text" class="form-control input-lg" name="txtlatefees" id="late" placeholder="Late Fees" required>
                                        </div>
                                        </td>
                                     
                                       <td colspan="2">
                                        <div class="nk-int-st">
                                        <input type="text" class="form-control input-lg" name="txtfeesmode" value="<?php echo $frow['mode'];?>" placeholder="Fees Mode"  readonly>
                                    </div>
                                    </td>
                                      </tr>
                                      <tr>
                                        <td colspan="2">
                                        <input type="text" list="browsers1" class="form-control input-lg" name="txtexam"  placeholder="Exam Event"  required>
                                       <datalist id="browsers1">
                                           <?php
                                include 'Conn.php';
                                 $query1="SELECT DISTINCT(examyrs) FROM `receipt` order by id desc";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['examyrs'];?>"><?php echo $grd['examyrs']?></option>
                                 <?php
                                 }
                                 ?>
                                       </datalist>
                                    </td>
                                        <td colspan="2"> <select name="txtpost" class="form-control input-lg" required>
                                            <option value="">Please Select Mode</option>
                                            <option value="By Post">By Post</option>
                                            <option value="In Person">In Person</option>
                                        </select></td>
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
                                        <th>Receipt No</th>
                                        <th>Date</th>
                                        <th>Exam Event</th>
                                        <th>Fullname</th>
                                        <th>PRN</th>
                                        <th>TRN</th>
                                        <th>POST/Person</th>
                                        <th>Payment Type</th>
                                        <th>Total</th>
                                        <th>Paid</th>
                                        <th>Balance</th>
                                        <th>Chaque No</th>
                                        <th>Chaque Date</th>
                                        <th>Bank</th>
                                        <th>Print</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    include 'Conn.php';
                                    $sql="select * from receipt where Receipttype='BCACONVOCATION' and active=1 ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                                <td><?php echo $row['ReceiptNewNo'];?></td>
                                                <td><?php echo $row['Date'];?></td>
                                                <td><?php echo $row['examyrs'];?></td>
                                                <td><?php echo $row['FullName'];?></td>
                                                <td><?php echo $row['PRN'];?></td>
                                                <td><?php echo $row['TRN'];?></td>
                                                <td><?php echo $row['decp'];?></td>
                                                 <td><?php echo $row['PaymentType'];?></td>
                                                <td><?php echo $row['Total'];?></td>
                                                <td><?php echo $row['Paid'];?></td>
                                                <td><?php echo $row['Balance'];?></td>
                                                <td><?php echo $row['ChequeNo'];?></td>
                                                <td><?php echo $row['ChequeDate'];?></td>
                                                <td><?php echo $row['Bank'];?></td>
                                                <td><button class="btn btn-info notika-btn-info" onClick="window.location.href='printconv.php?varname=<?php echo $row['id'];?>';">Print</button></td>
                                                <td><button class="btn btn-warning notika-btn-warning"  onClick="deleteme(<?php echo $row['id']; ?>)">Edit</button></td>
                                            </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Are You Sure you want to delete:"+" "+delid)){
                                             window.location.href='editpg.php?varname=' +delid+'';
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
                                        <th>Receipt No</th>
                                        <th>Date</th>
                                        <th>Fullname</th>
                                        <th>PRN</th>
                                        <th>TRN</th>
                                         <th>Payment Type</th>
                                        <th>Total</th>
                                        <th>Paid</th>
                                        <th>Balance</th>
                                        <th>Chaque No</th>
                                        <th>Chaque Date</th>
                                        <th>Bank</th>
                                        <th>Print</th>
                                        <th>Edit</th>
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