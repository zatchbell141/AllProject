<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'Includes/header.php';?>
    </head>
    <body>

        <div id="wrapper">
 		<?php include 'Includes/menu.php';?>
           
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Backlog Fees Details</h1>
                        </div>

                        <?php include 'Includes/searchdetailbacklog.php';?>
                        <div class="col-lg-12">
                             <form  action="backlogfees.php" method="POST" autocomplete="off">
                    <input type="hidden" name="txtstudentid" value="<?php echo $sid;?>">
                  <table class="table table-striped table-bordered">
                    <tr>
                     <td> Receipt No:<input type="text" class="form-control " name="receipo" value="<?php echo date('Ymd').'-'.$rn;?>" readonly></td>
                     <td> Exam Year:<input type="text" class="form-control " name="txtexamyrs" value="<?php echo $examyrs;?>" readonly></td>
                     <td colspan="2"> PRN:<input type="text" class="form-control " name="prn" value="<?php echo $prn;?>" readonly></td>
                    </tr>
                    <tr>
                      <td>Fullname:<input type="text" class="form-control " name="txtfullname" value="<?php echo $fullname;?>"></td>
                      <td>Seat No:<input type="text" class="form-control " name="txtseat" value="<?php echo $seat;?>"></td>
                      <td>Total Fees:<input type="text" class="form-control "  name="txtfees" value="<?php echo $totalfees;?>"></td>
                    </tr>
                    <tr>
                      <td>Paid Fees:<input type="text" class="form-control " name="txtpaid" required></td>
                      <td>Payment Type:<select name="payment" class="form-control " id="payment" onchange="changetextbox();">
                          <option name="Cheque">Cheque</option>
                          <option name="Cash">Cash</option>
                          <option name="MT">MT</option>
                          <option name="DD">DD</option>
                          <option name="NEFT">NEFT</option>
                          <option name="TMV Fees">TMV Fees</option>
                        </select>
                        <td>UTRNO/DD/Cheque No:<input type="text" class="form-control " id="txtcheqno" name="txtcheqno" placeholder="Cheque Number" required></td>
                       
                      </tr>
                       <tr>
                         <td>UTRNO/DD/MT/Cheque Date:<input type="date" class="form-control " id="txtchequd" name="txtchequd" placeholder="Paid Fees" required></td>
                        <!--<td>Bank:<input type="text" id="txtbank" name="txtbank" placeholder="Bank" required></td>-->
                        <td>Cheque Bank/Remitter Bank:<input type="text" class="form-control "id="txtbank" name="txtbank" placeholder="Remitter Bank" required></td>
                        <td>Beneficiary Bank:<input type="text"class="form-control " id="txtbenabank" name="txtbenbank" placeholder="Beneficiary Bank" required></td>
                      </tr>
                       <tr>
                         <td>Receipt Type:<input type="text" class="form-control " name="txtrecty" value="BCABACKLOG" placeholder="Year" readonly></td>
                         <td>Mode:<select class="form-control " name="pmode" id="mode"  width="10px" onchange="changetextbox1()" required>
                                        <option value="">Select fees</option>
                                        <option value="WithoutLateFees">Without Late Fees</option>
                                        <option value="Late Fees">Late Fees</option>
                                        </select></td>
                   
                         <td>Late Fees:<input type="text" class="form-control " name="txtlatefees" id="late" placeholder="Paid Fees" required></td>
                      </tr>
                      <tr>
                        <td>Change Of Exam center Fees:
                            <select class="form-control " name="ccenter" id="chgcenter" onchange="changetextbox2();">
                          <option value="">Select Center fees</option>
                          <option value="yash">Yash</option>
                          <option value="others">Others</option>
                        </select>
                        </td>
                        <td>Center fees:<input type="text" class="form-control " name="txtcenter" id="center1" placeholder="Center Fees" required></td>
                        <td colspan="1"> Date:<input type="text" class="form-control " name="lbdate" value="<?php echo date('d-m-Y');?>" readonly></td>
                      </tr>
                    </tr>
                   <tr>
                        <td colspan="4"><input type="submit" name="btnsubmit" class="btn btn-primary" value="Save"></td>
                                                </form> 
                                            </tr>
                                            <tr>
                                                <td colspan="4"><?php include 'Includes/addbacklogfees.php';?></td>
                                            </tr>
                                        </table>   
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

       <?php include 'Includes/footor.php';?>
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
    </body>
</html>
