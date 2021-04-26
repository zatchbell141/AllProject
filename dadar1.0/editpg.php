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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">College Receipt</a></li>
                    </ol>
                </div>
            </div>
             <?php
          
           include 'Includes/Conn.php';
            $id=$_GET['varname'];
            $sql="select * from receipt where id='$id'";
           $result=$con->query($sql);
           $row=$result->fetch_assoc();
         ?> 
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit College Receipt</h4>
                                  <form action="editpg.php" method="POST" autocomplete="off">
                           <table class="table table-striped table-bordered">
                                    <tr>
                                        <td>
                                           
                                            <input type="text" class="form-control" name="lbdate" value="<?php echo date("d-m-Y");?>" required>
                                            
                                        </td>
                                        <td>
                                        <input type="text" class="form-control" name="receipo" value="<?php echo $row['ReceiptNewNo'];?>" readonly>
                                    
                                </td>
                                        <td>
                                       
                                        <input type="text" class="form-control" name="txtprn" value="<?php echo $row['PRN'];?>" placeholder="PRN" required placeholder="PRN">
                                    
                                </td>
                                   
                                        <td>
                                          
                                        <input type="text" class="form-control" name="txttrn" value="<?php echo $row['TRN'];?>" placeholder="TRN" required placeholder="TRN">
                                     
                                        </td>
                                     </tr>
                                      <input type="hidden"  name="txtidothers" value="<?php echo $row['studentid'];?>" placeholder="PRN" required>
                                      <input type="hidden"  name="txtid" value="<?php echo $row['id'];?>" placeholder="PRN" required>
               <input type="hidden"  name="txtfathername" value="<?php echo $row['Fathername'];?>" placeholder="PRN" required>
                <input type="hidden"  name="txtcentreno" value="<?php echo $row['CenterFormNo'];?>" placeholder="PRN" required>
                <input type="hidden"  name="txtreceiptnold" value="<?php echo $row['ReceiptOld'];?>" placeholder="PRN" required>
                                    <tr>
                                        <td>
                                        <input type="text" class="form-control" name="txtfullname"value="<?php echo $row['FullName'];?>" placeholder="Sem" required >
                                    </td>
                                        <td>
                                        <input type="text" class="form-control" name="txtname" value="<?php echo $row['Name'];?>" placeholder="Name" required>
                                    </td>
                                   
                                        <td>
                                        <input type="text" class="form-control" name="txtlastname" value="<?php echo $row['Lastame'];?>" placeholder="Lastname" required>
                                    </td>
                                    
                                        <td>
                                        <input type="text" class="form-control" name="year" value="<?php echo $row['Year'];?>" placeholder="Year" required>
                                    </td>
                                     </tr>
                                    <tr>
                                        
                                        <td>
                                           
                                        <input type="text" class="form-control" name="txtsem" value="<?php echo $row['Sem'];?>" placeholder="Year" required>
                                    
                                        </td>
                                         <td>
                                        <input type="text" class="form-control" name="txtrecty" value="<?php echo $row['Receipttype'];?>" placeholder="Year" readonly>
                                    </td>
                                   
                                        <td>
                                        <input type="text" class="form-control" name="txtfees" value="<?php echo $row['Total'];?>" placeholder="Fees" readonly>
                                    </td>
                                    
                                        <td>
                                        <input type="text" class="form-control" name="txtpaidfees"  value="<?php echo $row['Paid'];?>"placeholder="Paid Fees">
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
                                        <input type="text" id="txtcheqno" name="txtcheqno" class="form-control" value="<?php echo $row['ChequeNo'];?>" placeholder="UTRNO/DD/Cheque Nor" required>
                                    </td>
                                   
                                        <td>
                                        <input type="text" id="txtbank" name="txtbank" class="form-control" value="<?php echo $row['Bank'];?>" placeholder="Cheque Bank/Remitter Bank" required>
                                    </td>
                                    
                                        <td>
                                        <input type="text" id="txtbennbank" name="txtbenbank" class="form-control" value="<?php echo $row['ben'];?>" placeholder="Beneficiary Bank" required>
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
                                        <input type="date" id="txtchequd" name="txtchequd" class="form-control" value="<?php echo $row['ChequeDate'];?>" placeholder="Cheque Bank/Remitter Bank" required>
                                         </td>
                                         <td>
                                           
                                            <input type="text" class="form-control" name="txtlatefees" id="late" value="<?php echo $row['Late'];?>" placeholder="Late Fees" required>
                                        
                                        </td>
                                     
                                       <td>
                                       
                                        <input type="text" class="form-control" name="txtfeesmode" value="<?php echo $row['ReceiptMode'];?>"  required>
                                    
                                    </td>
                                      </tr>
                                    <tr>
                                        <td colspan="4"><input type="submit" class="btn btn-outline-primary" name="btnsubmit" value="Update Receipt"></td>
                                        </form> 
                                    </tr>
                                    <tr>
                                        <td colspan="4"><?php include 'Includes/updatereceipt.php';?></td>
                                    </tr>
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
            document.getElementById("txtbenbank").disabled = true;
            
    }
    else
    {
            document.getElementById("txtbank").disabled = false;
            document.getElementById("txtcheqno").disabled = false;
            document.getElementById("txtchequd").disabled = false;
            document.getElementById("txtrembank").disabled = false;
            document.getElementById("txtbenbank").disabled = false;
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