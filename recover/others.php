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
     <?php
        include 'Conn.php';
            $rsql="SELECT * FROM `receipt` ORDER BY `receipt`.`ReceiptNewNo` DESC";
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
                                        <h2>Others Fees Receipt</h2>
                                        <p>Welcome to Yash Infotech <span class="bread-ntd">Username</span></p>
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
                                 <form id="addform" action="otheradd.php" method="post" autocomplete="off">
                               <table class="table table-sc-ex table-bordered"> 
                              
        
            <tr>
                <td colspan="4">Receipt Type:<div class="nk-int-st"><input type="text" class="form-control input-lg"  name="txtrecpty" Value="BCAOTHER" Readonly></td>
              </tr>
            <tr>
              <td colspan="2"> Date:<div class="nk-int-st"><input type="text" class="form-control input-lg"  name="txtdate" value="<?php echo date("d/m/Y");?>" readonly></td>
              
              <td colspan="2"> Receipt No:<div class="nk-int-st"><input type="text" class="form-control input-lg"  name="receipo" value="<?php  echo date("Ymd").'-'.$rn;?>" readonly></td>
            
            </tr>
              <tr>
                <td>PRN:<div class="nk-int-st"><input type="text" class="form-control input-lg"  name="txtprn" placeholder="PRN" required></div></td>
                <td>TRN:<div class="nk-int-st"><input type="text" class="form-control input-lg"  name="txttrn" placeholder="TRN" required></div></td>    
                 <td>Name:<div class="nk-int-st"><input type="text" class="form-control input-lg"  name="txtname" placeholder="Name" required></div></td>
                <td>Lastname:<div class="nk-int-st"><input type="text" class="form-control input-lg"  name="txtlastname" placeholder="Lastname" required></div></td>           
              </tr>
              <tr>
                <td>Father Name:<div class="nk-int-st"><input type="text" class="form-control input-lg"  name="txtfname" placeholder="FatherName" required></div></td>  
                <td colspan="1">Decription:<div class="nk-int-st"><input type="text" class="form-control input-lg"  name="txtdecp" placeholder="Reason" required></div></td>
                <td>Total Fees:<div class="nk-int-st"><input type="text" class="form-control input-lg"  name="txtfees" placeholder="Fees" required></div></td>
                <td>Paid Fees:<div class="nk-int-st"><input type="text" class="form-control input-lg"  name="txtpaidfees" placeholder="Paid Fees" required></div></td>
              </tr>
              <tr>
                <td>Payment Type:<select name="payment" id="payment" class="form-control input-lg"  onchange="changetextbox();">
                  <option name="Cheque">Cheque</option>
                  <option name="Cash">Cash</option>
                </select>
                <td>Cheque No:<div class="nk-int-st"><input type="text" id="txtcheqno" class="form-control input-lg" name="txtcheqno" placeholder="Cheque Number" required></div></td>
                <td>Cheque Date: 
                                        <input type="date" id="txtchequd" class="form-control" name="txtchequd" placeholder="dd/mm/yyyy" required>
                                  
                                </td>
                <td>Bank:<div class="nk-int-st"><input type="text" id="txtbank"class="form-control input-lg"  name="txtbank" placeholder="Bank" required></div></td>
              </tr>
              <tr>
                 <td colspan="2">Mode:<select class="form-control input-lg"  name="pmode" id="mode" width="10px" onchange="changetextbox1()"  required>
                                <option value="">Select fees</option>
                                <option value="Late Fees">Late Fees</option>
                                <option value="WithoutLateFees">Without Late Fees</option>
                                </select></td>
           
                  <td colspan="2">Late Fees:<div class="nk-int-st"><input type="text" class="form-control input-lg"  name="txtlatefees" id="late" placeholder="Paid Fees" required></div></td>
              </tr>

              <tr>
                <td colspan="4"><button class="btn btn-primary notika-btn-primary btn-lg" id="submit">Submit</button></td>
                </form>
              </tr>
              <tr>
                <td colspan="4"><div id="msg"></div></td>
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
                                </thead>
                                <tbody>
                                     <?php
                                    include 'Conn.php';
                                    $sql="select * from receipt where Receipttype='BCAOTHER' and active=1 ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                                <td><?php echo $row['ReceiptNewNo'];?></td>
                                                <td><?php echo $row['Date'];?></td>
                                                <td><?php echo $row['FullName'];?></td>
                                                <td><?php echo $row['PRN'];?></td>
                                                <td><?php echo $row['TRN'];?></td>
                                                 <td><?php echo $row['PaymentType'];?></td>
                                                <td><?php echo $row['Total'];?></td>
                                                <td><?php echo $row['Paid'];?></td>
                                                <td><?php echo $row['Balance'];?></td>
                                                <td><?php echo $row['ChequeNo'];?></td>
                                                <td><?php echo $row['ChequeDate'];?></td>
                                                <td><?php echo $row['Bank'];?></td>
                                                <td><button class="btn btn-info notika-btn-info" onClick="window.location.href='othersfees.php?varname=<?php echo $row['id'];?>';">Print</button></td>
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