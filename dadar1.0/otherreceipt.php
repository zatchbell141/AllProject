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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Other Receipt</a></li>
                    </ol>
                </div>
            </div>
          <?php
        include 'Conn.php';
            $rsql="SELECT * FROM `receipt` ORDER BY `receipt`.`ReceiptNewNo` DESC";
           $rresult=$con->query($rsql);
           $rrow=$rresult->fetch_assoc();
           $recptno=explode('-', $rrow['ReceiptNewNo']);
           $rn=$recptno[1]+1;
         ?>
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Other Receipt</h4>
                                     <form  action="otheradd.php" method="post" autocomplete="off">
                               <table class="table table-striped table-bordered"> 
                              
        
            <tr>
                <td colspan="4">Receipt Type:<input type="text" class="form-control input-lg"  name="txtrecpty" Value="BCAOTHER" Readonly></td>
              </tr>
            <tr>
              <td colspan="2"> Date:<input type="text" class="form-control input-lg"  name="txtdate" value="<?php echo date("d/m/Y");?>" readonly></td>
              
              <td colspan="2"> Receipt No:<input type="text" class="form-control input-lg"  name="receipo" value="<?php  echo date("Ymd").'-'.$rn;?>" readonly></td>
            
            </tr>
              <tr>
                <td>PRN:<input type="text" class="form-control input-lg"  name="txtprn" placeholder="PRN" required></td>
                <td>TRN:<input type="text" class="form-control input-lg"  name="txttrn" placeholder="TRN" required></td>    
                 <td>Name:<input type="text" class="form-control input-lg"  name="txtname" placeholder="Name" required></td>
                <td>Lastname:<input type="text" class="form-control input-lg"  name="txtlastname" placeholder="Lastname" required></td>           
              </tr>
              <tr>
                <td>Father Name:<input type="text" class="form-control input-lg"  name="txtfname" placeholder="FatherName" required></td>  
                <td colspan="1">Decription:<input type="text" class="form-control input-lg"  name="txtdecp" placeholder="Reason" required></td>
                <td>Total Fees:<input type="text" class="form-control input-lg"  name="txtfees" placeholder="Fees" required></td>
                <td>Paid Fees:<input type="text" class="form-control input-lg"  name="txtpaidfees" placeholder="Paid Fees" required></td>
              </tr>
              <tr>
                <td>Payment Type:<select name="payment" id="payment" class="form-control input-lg"  onchange="changetextbox();">
                  <option name="Cheque">Cheque</option>
                  <option name="Cash">Cash</option>
                </select>
                <td>Cheque No:<input type="text" id="txtcheqno" class="form-control input-lg" name="txtcheqno" placeholder="Cheque Number" required></td>
                <td>Cheque Date: 
                                        <input type="date" id="txtchequd" class="form-control" name="txtchequd" placeholder="dd/mm/yyyy" required>
                                  
                                </td>
                <td>Bank:<input type="text" id="txtbank"class="form-control input-lg"  name="txtbank" placeholder="Bank" required></td>
              </tr>
              <tr>
                 <td colspan="2">Mode:<select class="form-control input-lg"  name="pmode" id="mode" width="10px" onchange="changetextbox1()"  required>
                                <option value="">Select fees</option>
                                <option value="Late Fees">Late Fees</option>
                                <option value="WithoutLateFees">Without Late Fees</option>
                                </select></td>
           
                  <td colspan="2">Late Fees:<input type="text" class="form-control input-lg"  name="txtlatefees" id="late" placeholder="Paid Fees" required></td>
              </tr>

              <tr>
                <td colspan="4"><input type="submit" class="btn btn-primary" name="btnsubmit" Value="submit"></td>
                </form>
              </tr>
              <tr>
                <td colspan="4"><?php include 'Includes/otheradd.php';?></td>
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
                                <h4 class="card-title">Other Receipt</h4>
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
                                    include 'Includes/Conn.php';
                                    $sql="select * from receipt where Receipttype='BCAOTHER' and active=1 ORDER BY id DESC";
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