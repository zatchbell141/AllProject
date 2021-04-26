<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'Includes/header.php';?>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include 'Includes/sidebar.php';?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
       <?php include 'Includes/topmenu.php';?>
        <!-- Topbar -->
         <?php
             include 'Includes/bcaConn.php';
            $name=$_SESSION['login_id'];
            $sql="select * from addonline where tempuserid='$name'";
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
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Admin Table</h6>
                </div>
                <div class="table-responsive p-3">
                  <form action="" method="post" autocomplete="off">
                    <table class="table align-items-center table-flush table-hover table-bordered" id="dataTableHover">
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
            <td colspan="5"><input type="submit" class="btn btn-outline-primary" value="Submit"  name="btnsubmit"></td>
          </form>
        </tr>
        <tr>
          
        </tr>
                  </table>
                </div>
              </div>
            </div>
        </div>
        <!---Container Fluid-->
      </div>
     <?php include 'Includes/footer.php';?>
    </div>
  </div>

 <?php include 'Includes/script.php';?>
</body>

</html>