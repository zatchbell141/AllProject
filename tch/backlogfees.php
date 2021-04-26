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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Backlog Fees</a></li>
                    </ol>
                </div>
            </div>
         <?php include 'Includes/backlogsearch.php';?>
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Backlog Fees</h4>
                                     <form action="backlogfees.php" method="POST" autocomplete="off">
            <input type="hidden" name="txtstudentid" value="<?php echo $sid;?>">
          <table class="table table-sc-ex table-bordered">
            <tr>
             <td colspan="2"> Receipt No:<input type="text" class="form-control" name="receipo" value="<?php echo date('Ymd').'-'.$rn;?>" readonly></td>
             <td colspan="2"> PRN:<input type="text" class="form-control" name="prn" value="<?php echo $prn;?>" readonly></td>
            </tr>
            <tr>
              <td>Fullname:<input type="text" class="form-control" name="txtfullname" value="<?php echo $fullname;?>"></td>
              <td>Seat No:<input type="text" class="form-control" name="txtseat" value="<?php echo $seat;?>"></td>
              <td>Total Fees:<input type="text" class="form-control"  name="txtfees" value="<?php echo $totalfees;?>"></td>
            </tr>
            <tr>
              <td>Paid Fees:<input type="text" class="form-control" name="txtpaid"></td>
              <td>Payment Type:<select name="payment" class="form-control" id="payment" onchange="changetextbox();">
                  <option name="Cheque">Cheque</option>
                  <option name="Cash">Cash</option>
                  <option name="MT">MT</option>
                  <option name="DD">DD</option>
                  <option name="NEFT">NEFT</option>
                </select>
                <td>UTRNO/DD/Cheque No:<input type="text" class="form-control" id="txtcheqno" name="txtcheqno" placeholder="Cheque Number" required></td>
               
              </tr>
               <tr>
                 <td>UTRNO/DD/MT/Cheque Date:<input type="date" class="form-control" id="txtchequd" name="txtchequd" placeholder="Paid Fees" required></td>
                <!--<td>Bank:<input type="text" id="txtbank" name="txtbank" placeholder="Bank" required></td>-->
                <td>Cheque Bank/Remitter Bank:<input type="text" class="form-control"id="txtbank" name="txtbank" placeholder="Remitter Bank" required></td>
                <td>Beneficiary Bank:<input type="text"class="form-control" id="txtbenabank" name="txtbenbank" placeholder="Beneficiary Bank" required></td>
              </tr>
               <tr>
                 <td>Receipt Type:<input type="text" class="form-control" name="txtrecty" value="BCABACKLOG" placeholder="Year" readonly></td>
                 <td>Mode:<select class="form-control" name="pmode" id="mode"  width="10px" onchange="changetextbox1()" required>
                                <option value="">Select fees</option>
                                <option value="WithoutLateFees">Without Late Fees</option>
                                <option value="Late Fees">Late Fees</option>
                                </select></td>
           
                 <td>Late Fees:<input type="text" class="form-control" name="txtlatefees" id="late" placeholder="Paid Fees" required></td>
              </tr>
              <tr>
                <td>Change Of Exam center Fees:
                    <select class="form-control" name="ccenter" id="chgcenter" onchange="changetextbox2();">
                  <option value="">Select Center fees</option>
                  <option value="yash">Yash</option>
                  <option value="others">Others</option>
                </select>
                </td>
                <td>Center fees:<input type="text" class="form-control" name="txtcenter" id="center1" placeholder="Center Fees" required></td>
                <td colspan="1"> Date:<input type="text" class="form-control" name="lbdate" value="<?php echo date('d-m-Y');?>" readonly></td>
              </tr>
            </tr>
           <tr>
                                        <td colspan="4"><input type="submit" class="btn btn-outline-primary" name="btnsubmit" value="Submit"></td>
                                        </form> 
                                    </tr>
                                </table>  
                                 <?php include 'Includes/backlogaddfees.php';?>
                                    
                                
                        
                    
                
            
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