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
         
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">College Receipt</h4>
                   <form action="receipt.php" method="post" autocomplete="off">
                               <table class="table table-striped table-bordered">
            <tr>
                <td>
              
                Student ID:<input type="text" list="browsers" name="txtaddname" Placeholder="Name" class="form-control ">
                 
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
                 
                Receipt Mode:<input type="text" list="browsers1" name="txtinstm" Placeholder="Mode" class="form-control ">
            
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
              <td><input type = "submit" class="btn btn-info" value="Search"  name="txtsrchuser"></td>
           </form>
            </tr>
         </table>
         <?php
          
          if(isset($_POST['txtsrchuser']))
          {
             include 'Includes/Conn.php';
            $name=$_POST['txtaddname'];
            $sql="select * from studentdt where fullname='".$name."'";
           $result=$con->query($sql);
           $row=$result->fetch_assoc();

            $fname=$row['coursename'];
            $feesmode=$_POST['txtinstm'];
            $fsql="select * from fees where name='".$fname."' and mode='".$feesmode."' and active=1";
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
                                 
                    <form id="addform" action="receipt.php" method="POST" autocomplete="off">
                           <table class="table table-striped table-bordered">
                                    <tr>
                                        <td>
                                            
                                            Date:<input type="text" class="form-control " name="lbdate" value="<?php echo date("d-m-Y");?>" readonly>
                                            
                                        </td>
                                        <td>
                                        Receipt No:<input type="text" class="form-control " name="receipo" value="<?php echo date("Ymd").'-'.$rn;?>" readonly>
                                    
                                </td>
                                        <td>
                                        
                                        PRN:<input type="text" class="form-control " name="txtprn" value="<?php echo $row['prn'];?>" placeholder="PRN" readonly placeholder="PRN">
                                    
                                </td>
                                   
                                        <td>
                                           
                                        TRN:<input type="text" class="form-control " name="txttrn" value="<?php echo $row['trn'];?>" placeholder="TRN" readonly placeholder="TRN">
                                     
                                        </td>
                                     </tr>
                                      <input type="hidden"  name="txtidothers" value="<?php echo $row['studentid'];?>" placeholder="PRN" readonly>
               <input type="hidden"  name="txtfathername" value="<?php echo $row['fathername'];?>" placeholder="PRN" readonly>
                <input type="hidden"  name="txtcentreno" value="<?php echo $row['CenterFormNo'];?>" placeholder="PRN" readonly>
                                    <tr>
                                        <td>
                                        Fullname:<input type="text" class="form-control " name="txtfullname"value="<?php echo $row['fullname'];?>" placeholder="Sem" readonly >
                                    </td>
                                        <td>
                                        First Name:<input type="text" class="form-control " name="txtname" value="<?php echo $row['firstname'];?>" placeholder="Name" readonly>
                                    </td>
                                   
                                        <td>
                                        Last Name:<input type="text" class="form-control " name="txtlastname" value="<?php echo $row['lastname'];?>" placeholder="Lastname" readonly>
                                    </td>
                                    
                                        <td>
                                        Year:<input type="text" class="form-control " name="year" value="<?php echo $frow['year'];?>" placeholder="Year" readonly>
                                    </td>
                                     </tr>
                                    <tr>
                                        
                                        <td>
                                            
                                        SEM:<input type="text" class="form-control " name="txtsem" value="<?php echo $frow['sem'];?>" placeholder="Year" readonly>
                                    
                                        </td>
                                         <td>
                                        Type:<input type="text" class="form-control " name="txtrecty" value="BCAFEES" placeholder="Year" readonly>
                                    </td>
                                   
                                        <td>
                                        Total:<input type="text" class="form-control " name="txtfees" value="<?php echo $frow['fees'];?>" placeholder="Fees" readonly>
                                    </td>
                                    
                                        <td>
                                        Paid:<input type="text" class="form-control " name="txtpaidfees"  placeholder="Paid Fees">
                                    </td>
                                    </tr>
                                     <tr>
                                        
                                        <td>
                                            Payment Type:<select name="payment" id="payment" class="form-control " onchange="changetextbox();">
                                              <option name="Cheque">Cheque</option>
                                              <option name="Cash">Cash</option>
                                              <option name="MT">MT</option>
                                              <option name="DD">DD</option>
                                              <option name="NEFT">NEFT</option>
                                            </select>
                                        </td>
                                         <td>
                                        Cheque No:<input type="text" id="txtcheqno" name="txtcheqno" class="form-control " placeholder="UTRNO/DD/Cheque Nor" required>
                                    </td>
                                   
                                        <td>
                                        Bank:<input type="text" id="txtbank" name="txtbank" class="form-control " placeholder="Cheque Bank/Remitter Bank" required>
                                    </td>
                                      <td>
                                        Cheque Date:<input type="date" id="txtchequd" name="txtchequd" class="form-control " placeholder="Cheque Bank/Remitter Bank" required>
                                         </td>
                                       
                                    </tr>
                                     <tr>
                                         <td>
                                       Beneficiary Bank:<input type="text" id="txtbennbank" name="txtbenbank" class="form-control " placeholder="Beneficiary Bank" required>
                                    </td>
                                         <td>
                                            Fees:<select class="form-control " name="pmode" id="mode"  width="10px" onchange="changetextbox1()" required>
                                                        <option value="">Select fees</option>
                                                        <option value="WithoutLateFees">Without Late Fees</option>
                                                        <option value="Late Fees">Late Fees</option>
                                                        </select>
                                        </td>
                                          
                                         <td>
                                            
                                            Late Fees:<input type="text" class="form-control " name="txtlatefees" id="late" placeholder="Late Fees" required>
                                        
                                        </td>
                                     
                                       <td colspan="2">
                                        
                                        <input type="text" class="form-control " name="txtfeesmode" value="<?php echo $frow['mode'];?>"  readonly>
                                    
                                    </td>
                                      </tr>
                                    <tr>
                                        <td colspan="4"><input type="submit" class="btn btn-primary" value="Generate Receipt" name="btnreceipt"></td>
                                        </form> 
                                    </tr>
                                    <tr>
                                        <td colspan="4"><?php include 'Includes/coladd.php';?></td>
                                    </tr>
                                </table>  
                                 </div>
              </div>
            </div>
          </div>
            </div>
            <<div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">College Receipt</h4>
                                <div class="table-responsive">
                             <table class="table table-striped table-bordered zero-configuration table-hover">
                                <thead>
                                    <tr>
                                         <th>Print</th>
                                        <th>Edit</th>
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
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from receipt where Receipttype='BCAFEES' and active=1 ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="table-primary">
                                                
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
                                                <td><button class="btn btn-info" onClick="window.location.href='printfees.php?varname=<?php echo $row['id'];?>';">Print</button></td>
                                                <td><button class="btn btn-primary"  onClick="deleteme(<?php echo $row['id']; ?>)">Edit</button></td>
                                            </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Are You Sure you want to edit:"+" "+delid)){
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