<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'Includes/header.php';?>
</head>

<body>

   <?php include 'Includes/loader.php';?>

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="images/logo1.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo1.png" alt=""></span>
                    <span class="brand-title">
                       <!--  <img src="images/logo-text.png" alt=""> --><b style="color: white">YASH INFOTECH</b>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
       <?php include 'Includes/topmenu.php';?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       <?php include 'Includes/menu.php';?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <!-- Topbar -->
            <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">TMV Receipt</a></li>
                    </ol>
                </div>
            </div>
         
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">TMV Receipt</h4>
                                    <form action="tmvreceipt.php" method="post" autocomplete="off">
                               <table class="table table-striped table-bordered">
            <tr>
                <td>
             
                <input type="text" list="browsers" name="txtaddname" Placeholder="Name" class="form-control">
               
             </td>
               <datalist id="browsers">
                      <?php
                                include 'Includes/Conn.php';
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
             <tr>
              <td>
                
                <input type="text" list="browsers1" name="txtinstm" Placeholder="Mode" class="form-control">
          
            </td>
               <datalist id="browsers1">
                      <?php
                                include 'Includes/Conn.php';
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
             
            </tr>
            <tr>
              <td><input type = "submit" class="btn btn-outline-info" value="Search"  name="txtsrchuser"></td>
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


            $fname=$row['coursename'];
            $feesmode=$_POST['txtinstm'];
            $fsql="select * from fees where name='$fname' and mode='$feesmode' and active=1 order by feesid desc";
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
         <form action="tmvreceipt.php" method="POST" autocomplete="off">
                           <table class="table table-sc-ex table-bordered">
                                    <tr>
                                        <td>
                                          
                                            <input type="text" class="form-control" name="lbdate" value="<?php echo date("d-m-Y");?>" readonly>
                                            
                                        </td>
                                        <td>
                                        <input type="text" class="form-control" name="receipo" value="<?php echo date("Ymd").'-'.$rn;?>" readonly>
                                    
                                </td>
                                        <td>
                                      
                                        <input type="text" class="form-control" name="txtprn" value="<?php echo $row['prn'];?>" placeholder="PRN" readonly placeholder="PRN">
                                    
                                </td>
                                   
                                        <td>
                                         
                                        <input type="text" class="form-control" name="txttrn" value="<?php echo $row['trn'];?>" placeholder="TRN" readonly placeholder="TRN">
                                     
                                        </td>
                                     </tr>
                                      <input type="hidden"  name="txtidothers" value="<?php echo $row['studentid'];?>" placeholder="PRN" readonly>
               <input type="hidden"  name="txtfathername" value="<?php echo $row['fathername'];?>" placeholder="PRN" readonly>
                <input type="hidden"  name="txtcentreno" value="<?php echo $row['CenterFormNo'];?>" placeholder="PRN" readonly>
                                    <tr>
                                        <td>
                                        <input type="text" class="form-control" name="txtfullname"value="<?php echo $row['fullname'];?>" placeholder="Sem" readonly >
                                    </td>
                                        <td>
                                        <input type="text" class="form-control" name="txtname" value="<?php echo $row['firstname'];?>" placeholder="Name" readonly>
                                    </td>
                                   
                                        <td>
                                        <input type="text" class="form-control" name="txtlastname" value="<?php echo $row['lastname'];?>" placeholder="Lastname" readonly>
                                    </td>
                                    
                                        <td>
                                        <input type="text" class="form-control" name="year" value="<?php echo $frow['year'];?>" placeholder="Year" readonly>
                                    </td>
                                     </tr>
                                    <tr>
                                        
                                        <td>
                                          
                                        <input type="text" class="form-control" name="txtsem" value="<?php echo $frow['sem'];?>" placeholder="Year" readonly>
                                    
                                        </td>
                                         <td>
                                        <input type="text" class="form-control" name="txtrecty" value="TMVFEES" placeholder="Year" readonly>
                                    </td>
                                   
                                        <td>
                                        <input type="text" class="form-control" name="txtfees" value="<?php echo $frow['tmvFees'];?>" placeholder="Fees" readonly>
                                    </td>
                                    
                                        <td>
                                        <input type="text" class="form-control" name="txtpaidfees"  placeholder="Paid Fees">
                                    </td>
                                    </tr>
                                     <tr>
                                        
                                        <td>
                                            <select name="payment" id="payment" class="form-control" onchange="changetextbox();">
                                              <option name="Cheque">Cheque</option>
                                              <option name="Cash">Cash</option>
                                              <option name="MT">MT</option>
                                              <option name="DD">DD</option>
                                              <option name="NEFT">NEFT</option>
                                            </select>
                                        </td>
                                         <td>
                                        <input type="text" id="txtcheqno" name="txtcheqno" class="form-control" placeholder="UTRNO/DD/Cheque Nor" required>
                                    </td>
                                   
                                        <td>
                                        <input type="text" id="txtbank" name="txtbank" class="form-control" placeholder="Cheque Bank/Remitter Bank" required>
                                    </td>
                                    
                                        <td>
                                        <input type="text" id="txtbennbank" name="txtbenbank" class="form-control" placeholder="Beneficiary Bank" required>
                                    </td>
                                    </tr>
                                   
                                     <tr>
                                         <td>
                                            <select class="form-control" name="pmode" id="mode"  width="10px" onchange="changetextbox1()" required>
                                                        <option value="">Select fees</option>
                                                        <option value="WithoutLateFees">Without Late Fees</option>
                                                        <option value="Late Fees">Late Fees</option>
                                                        </select>
                                        </td>
                                   
                                        
                                             <td>
                                        <input type="date" id="txtchequd" name="txtchequd" class="form-control" placeholder="Cheque Bank/Remitter Bank" required>
                                         </td>
                                         <td>
                                          
                                            <input type="text" class="form-control" name="txtlatefees" id="late" placeholder="Late Fees" required>
                                        
                                        </td>
                                     
                                       <td>
                                      
                                        <input type="text" class="form-control" name="txtfeesmode" value="<?php echo $frow['mode'];?>"  readonly>
                                    
                                    </td>
                                      </tr>
                                    <tr>
                                        <td colspan="4"><input type="submit" class="btn btn-outline-primary" name="btnsubmit" value="Save"></td>
                                        </form> 
                                    </tr>
                                    <tr>
                                        <td colspan="4"><?php include 'Includes/addtmvfees.php';?></td>
                                    </tr>
                                </table>  
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
              <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">TMV Receipt</h4>
                                <div class="table-responsive">
                                       <table class="table table-striped table-bordered zero-configuration table-hover">
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
                                    $sql="select * from receipt where Receipttype='TMVFEES' and active=1 ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="table-success">
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
                                                <td><button class="btn btn-info notika-btn-info" onClick="window.location.href='tmvprintfees.php?varname=<?php echo $row['id'];?>';">Print</button></td>
                                                <td><button class="btn btn-warning notika-btn-warning"  onClick="deleteme(<?php echo $row['id']; ?>)">Edit</button></td>
                                            </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Are You Sure you want to delete:"+" "+delid)){
                                             window.location.href='editcolgfees.php?varname=' +delid+'';
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
                  </div>
              </div>
 <!---Container Fluid-->
       <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by AV(Yash Infotech)</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
     </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
<?php include 'Includes/script.php';?>

</body>

</html>