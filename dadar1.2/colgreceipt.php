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
                            <h1 class="page-header">Receipt</h1>
                        </div>

                        <div class="col-lg-12">
                            <form action="colgreceipt.php" method="post" autocomplete="off">
                            <table class="table table-striped">
                                <tr>
                                   <td>Fullname:<input type="text" list="browsers" name="txtaddname" Placeholder="Name" class="form-control"></td>
                                    <datalist id="browsers">
                                      <?php
                                                include 'Includes/Conn.php';
                                                 $query1="select fullname,coursename from studentdt ORDER BY studentid DESC";
                                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                                 foreach($gradenameresult as $grd)
                                                 {
                                                 ?>
                                                 <option value="<?php echo $grd['fullname'];?>"><?php echo "(".$grd['coursename'].")"?></option>
                                                 <?php
                                                 }
                                                 ?>
                                    </datalist>
                                
                                    <td>Fees Mode:<input type="text" list="browsers1" name="txtinstm" Placeholder="Mode" class="form-control ">
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
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type = "submit" class="btn btn-info" value="Search"  name="txtsrchuser"></td>
                                </form>
                                </tr>
                            </table>
                        </div>
                            <?php include 'Includes/searchreceiptdetails.php';?>


                        <div class="col-lg-12">
                            <input type="hidden"  name="txtidothers" value="<?php echo $row['studentid'];?>" placeholder="PRN" readonly>
                            <input type="hidden"  name="txtfathername" value="<?php echo $row['fathername'];?>" placeholder="PRN" readonly>
                            <input type="hidden"  name="txtcentreno" value="<?php echo $row['CenterFormNo'];?>" placeholder="PRN" readonly>
                            <input type="hidden"  name="txtcentreno" value="<?php echo $row['admissionyrs'];?>" placeholder="PRN" readonly>
                             <table class="table table-striped table-bordered">
                                <tr>
                                    <td>Date:<input type="text" class="form-control " name="lbdate" value="<?php echo date("d-m-Y");?>" readonly></td>
                                    <td>Receipt No:<input type="text" class="form-control " name="receipo" value="<?php echo date("Ymd").'-'.$rn;?>" readonly></td>
                                    <td>PRN:<input type="text" class="form-control " name="txtprn" value="<?php echo $row['prn'];?>" placeholder="PRN" readonly placeholder="PRN"></td>
                                    <td>TRN:<input type="text" class="form-control " name="txttrn" value="<?php echo $row['trn'];?>" placeholder="TRN" readonly placeholder="TRN"></td>
                                </tr>
                                <tr>
                                    <td>Fullname:<input type="text" class="form-control " name="txtfullname"value="<?php echo $row['fullname'];?>" placeholder="Sem" readonly ></td>
                                    <td>Firstname:<input type="text" class="form-control " name="txtname" value="<?php echo $row['firstname'];?>" placeholder="Name" readonly></td>
                                    <td>Lastname:<input type="text" class="form-control " name="txtlastname" value="<?php echo $row['lastname'];?>" placeholder="Lastname" readonly></td>
                                    <td>Year:<input type="text" class="form-control " name="year" value="<?php echo $frow['year'];?>" placeholder="Year" readonly></td>
                                </tr>
                                <tr>
                                    <td>Sem:<input type="text" class="form-control " name="txtsem" value="<?php echo $frow['sem'];?>" placeholder="Year" readonly></td>
                                    <td>BCAFEES:<input type="text" class="form-control " name="txtrecty" value="BCAFEES" placeholder="Year" readonly></td>
                                    <td>Fees:<input type="text" class="form-control " name="txtfees" value="<?php echo $frow['fees'];?>" placeholder="Fees" readonly></td>
                                    <td>Paid Fees:<input type="text" class="form-control " name="txtpaidfees"  placeholder="Paid Fees"></td>
                                </tr>
                                <tr>
                                    <td>Payment Type:<select name="payment" id="payment" class="form-control " onchange="changetextbox();">
                                              <option name="Cheque">Cheque</option>
                                              <option name="Cash">Cash</option>
                                              <option name="MT">MT</option>
                                              <option name="DD">DD</option>
                                              <option name="NEFT">NEFT</option>
                                              <option name="TMV Fees">TMV Fees</option>
                                            </select></td>
                                    <td>UTRNO/DD/Cheque No:<input type="text" id="txtcheqno" name="txtcheqno" class="form-control " placeholder="UTRNO/DD/Cheque No" required></td>
                                    <td>Cheque Bank/Remitter Bank:<input type="text" id="txtbank" name="txtbank" class="form-control " placeholder="Cheque Bank/Remitter Bank" required></td>
                                    <td>Cheque Bank/Remitter Bank:<input type="date" id="txtchequd" name="txtchequd" class="form-control " placeholder="Cheque Bank/Remitter Bank" required></td>
                                </tr>
                                <tr>
                                     <td>Beneficiary Bank:<input type="text" id="txtbennbank" name="txtbenbank" class="form-control " placeholder="Beneficiary Bank" required value="BOM"></td>
                                     <td>Fees Mode:<select class="form-control " name="pmode" id="mode"  width="10px" onchange="changetextbox1()" required>
                                     <option value="">Select fees</option>
                                     <option value="WithoutLateFees">Without Late Fees</option>
                                     <option value="Late Fees">Late Fees</option>
                                     </select></td>
                                     <td>Late Fees:<input type="text" class="form-control " name="txtlatefees" id="late" placeholder="Late Fees" required></td>
                                     <td>Fees Mode:<input type="text" class="form-control " name="txtfeesmode" value="<?php echo $frow['mode'];?>" placeholder="Fees Mode" readonly></td>

                                </tr>
                                <tr>
                                     <td colspan="2">Admission Year:<input type="text" class="form-control " name="txtfeesmode" value="<?php echo $row['admissionyrs'];?>" placeholder="Admission Year" readonly></td>
                                     <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><input type="submit" class="btn btn-primary" value="Generate Receipt" name="btnreceipt"></td>

                                    </form> 
                                </tr>
                                <tr>
                                    <td colspan="4"><?php include 'Includes/addcolgreceipt.php';?></td>
                                </tr>
                             </table>
                        </div>




                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Receipt Details
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
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
                                                    include 'Includes/Conn.php';
                                                    $sql="select * from receipt where Receipttype='BCAFEES' and active=1 ORDER BY id DESC";
                                                    $result=$con->query($sql);
                                                    if($result->num_rows>0)
                                                    {
                                                        $no=0;
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                            $no++;
                                                            ?>
                                                            <tr class="info">
                                                                <td><?php echo $no;?></td>
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
                                                                <td><button class="btn btn-info notika-btn-info" onClick="window.location.href='printfees.php?varname=<?php echo $row['id'];?>';">Print</button></td>
                                                                <td><button class="btn btn-warning notika-btn-warning"  onClick="deleteme(<?php echo $row['id']; ?>)">Edit</button></td>
                                                            </tr>
                                                             <!-- Javascript function for deleting data -->
                                                             <script language="javascript">
                                                             function deleteme(delid)
                                                             {
                                                             if(confirm("Are You Sure you want to edit:"+" "+delid)){
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
                                        </table>
                                    </div>
                                </div>
                            </div>
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
