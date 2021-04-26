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
                            <h1 class="page-header">Balance Receipt</h1>
                        </div>

                        <div class="col-lg-12">
                            <form action="colgbalance.php" method="POST" autocomplete="off">
                                  <table class="table table-sc-ex table-bordered">
                                    <tr>
                                      <td>
                                        Fullname:
                                        <input type="text" list="browsers" name="txtaddname" Placeholder="Name" class="form-control"></td>
                                      <datalist id="browsers">
                                              <?php
                                                        include 'Includes/Conn.php';
                                                         $query1="select fullname,coursename from studentdt order by studentid desc";
                                                          $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                                         foreach($gradenameresult as $grd)
                                                         {
                                                         ?>
                                                         <option value="<?php echo $grd['fullname'];?>"><?php echo "(".$grd['coursename'].")"?></option>
                                                         <?php
                                                         }
                                                         ?>
                                            </datalist>
                                     
                                    </tr>
                                    <tr>
                                      <td><input type = "submit" class="btn btn-primary"  value ="Search" name="txtsrchuser"></td>
                                      </form>
                                    </tr>
                                 </table>
                            
                        </div>
                            <?php include 'Includes/searchbalance.php';?>

                        <div class="col-lg-12">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                              <tr>
                                  <th>Fullname</th>
                                  <th>Year</th>
                                  <th>Fees Type</th>
                                  <th>Total Fees</th>
                                  <th>Paid Fees</th>
                                  <th>Balance Fees</th>
                              </tr>
                              <?php
                                include 'Includes/Conn.php';
                               if(isset($_POST['txtsrchuser'])){
                                 $checkname=$row['FullName'];
                                $checksql="select * from receipt where active=1 and Receipttype='BCAFEES' and FullName='$checkname'  ORDER BY id ASC";
                               $checkresult=$con->query($checksql);
                                if($checkresult->num_rows>0)
                                {
                                    while($checkrow=$checkresult->fetch_assoc())
                                    {
                              
                                
                                                            
                                        ?>
                                        <tr class="success">
                                            <td><?php echo $checkrow['FullName'];?></td>
                                            <td><?php echo $checkrow['Year'];?></td>
                                            <td><?php echo "Yash Fees";?></td>
                                            <td><?php echo $checkrow['Total'];?></td>
                                            <td><?php echo $checkrow['Paid'];?></td>
                                            <td><?php echo $checkrow['Balance'];?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                 }
                                        ?>
                          </table>
                        </div>

                        <div class="col-lg-12">
                             <form action="colgbalance.php" method="POST" autocomplete="off">
                                 <input type="hidden"  name="txtidothers" value="<?php echo $row['id'];?>" placeholder="PRN" readonly>
                                <input type="hidden"  name="txtfathername" value="<?php echo $row['Fathername'];?>" placeholder="PRN" readonly>
                                <input type="hidden"  name="txtcentreno" value="<?php echo $row['code'];?>" placeholder="PRN" readonly>
                                <input type="hidden"  name="txtadmyrs" value="<?php echo $row['code'];?>" placeholder="PRN" readonly>
                                <table class="table table-striped">
                                    <tr>
                                        <td><input type="text" class="form-control" name="lbdate" value="<?php echo date("d-m-Y");?>" readonly></td>
                                        <td><input type="text" class="form-control" name="receipo" value="<?php echo date("Ymd").'-'.$rn;?>" readonly></td>
                                        <td><input type="text" class="form-control" name="txtprn" value="<?php echo $row['PRN'];?>" placeholder="PRN" readonly></td>
                                        <td><input type="text" class="form-control"  name="txttrn" value="<?php echo $row['TRN'];?>" placeholder="PRN" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="txtfullname"value="<?php echo $row['FullName'];?>" placeholder="Sem" readonly></td>
                                        <td><input type="text" class="form-control" name="txtname" value="<?php echo $row['Name'];?>" placeholder="Name" readonly></td>
                                        <td><input type="text" class="form-control" name="txtlastname" value="<?php echo $row['Lastame'];?>" placeholder="Lastname" readonly></td>
                                        <td><input type="text" class="form-control" name="year" value="<?php echo $row['Year'];?>" placeholder="Year" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="txtsem" value="<?php echo $row['Sem'];?>" placeholder="Year" readonly></td>
                                        <td><input type="text" class="form-control" name="txtrecty" value="BCAFEES" placeholder="Year" readonly></td>
                                        <td><input type="text" class="form-control" name="btxtfees" value="<?php echo $row['Balance'];?>" placeholder="Fees" readonly></td>
                                        <td><input type="text" class="form-control" name="txtpaidfees"  placeholder="Paid Fees" required></td>
                                    </tr>
                                    <tr>
                                        <td><select name="payment" id="payment" class="form-control" onchange="changetextbox();">
                                              <option name="Cheque">Cheque</option>
                                              <option name="Cash">Cash</option>
                                              <option name="MT">MT</option>
                                              <option name="DD">DD</option>
                                              <option name="NEFT">NEFT</option>
                                              <option name="TMV Fees">TMV Fees</option>
                                            </select></td>
                                            <td><input type="text" id="txtcheqno" class="form-control" name="txtcheqno" placeholder="Cheque Number" required></td>
                                            <td><input type="date" id="txtchequd"class="form-control" name="txtchequd" placeholder="Paid Fees" required></td>
                                            <td><input type="text" id="txtbank"class="form-control" name="txtbank" placeholder="Bank" required></td>
                                    </tr>
                                    <tr>
                                        <td><select class="form-control" name="pmode" id="mode"  width="10px" onchange="changetextbox1()" required>
                                                        <option value="">Select Mode fees</option>
                                                        <option value="WithoutLateFees">Without Late Fees</option>
                                                        <option value="Late Fees">Late Fees</option>
                                                        </select></td>
                                                <td><input type="text" class="form-control" name="txtlatefees" id="late" placeholder="Paid Fees" required></td>
                                                <td><input type="text" class="form-control" name="txtfees" value="<?php echo $row['Total'];?>" placeholder="Fees" readonly></td>
                                                <td><input type="text" class="form-control" name="txtfeesmode" value="<?php echo $row['ReceiptMode'];?>"  required></td>
                                    </tr>
                                     <tr>
                                        <td colspan="4"><input type="submit" name="btnsubmit" class="btn btn-primary" value="Generate Receipt"></td>
                                        </form>
                                      </tr>
                                </table>
                        </div>


                        <div class="col-lg-12">
                             <div class="panel panel-default">
                                <div class="panel-heading">
                                    Balance Details
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                    include 'Includes/Conn.php';
                                    $sql="select * from receipt where active=1 and Receipttype='BCAFEES'  ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            ?>
                                            <tr class="success">
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
                                                <td><button class="btn btn-info" onClick="window.location.href='balance.php?varname=<?php echo $row['id'];?>';">Print</button></td>
                                                <td><button class="btn btn-warning" onClick="deleteme(<?php echo $row['id']; ?>)">Edit</button></td>
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
    </body>
</html>
