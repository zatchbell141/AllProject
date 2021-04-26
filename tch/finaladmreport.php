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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Final Admission Report</a></li>
                    </ol>
                </div>
            </div>
         
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Final Admission Report</h4>
                                        <table class="table table-striped table-bordered zero-configuration table-hover">
                                        	<tr>
                                        		<th>Sr.No</th>
                                        		<th>Student Name</th>
                                        		<th>Year</th>
                                        		<th>Receipt No</th>
                                        		<th>Date</th>
                                        		<th>Total FEES</th>
                                        		<th>FEES</th>
                                        		<th>Paid FEES</th>
                                        		<th>Balance FEES</th>
                                        		<th>Total Balance</th>
                                                <th>Admission Year</th>
                                        	</tr>
                                        	<?php
                                                    include 'Includes/Conn.php';
                                                    $sql="select * from studentdt where active='1' and coursename='Bachelor of Computer Applications-E-First Year' ORDER BY studentid DESC";
                                                    $result=$con->query($sql);
                                                    if($result->num_rows>0)
                                                    {  $no=0;
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                            $no++;
                                                            
                                                            
                                                           
                                        	?>
                                        	<tr class="table-warning">
                                        		<td><?php echo $no;?></td>
                                        		<td><b><?php echo $row['fullname'];?></b></td>
                                        		<td>&nbsp;</td>
                                        		<td>&nbsp;</td>
                                        		<td>&nbsp;</td>
                                        	    <td>&nbsp;</td>
                                        		<td>&nbsp;</td>
                                        		<td>&nbsp;</td>
                                        		<td>&nbsp;</td>
                                        		<td>&nbsp;</td>
                                        		<td>&nbsp;</td>
                                        	</tr>
                                        	<?php
                                                $name=$row['fullname'];
                                                 $rsql="select * from receipt where FullName='$name' and Receipttype='TMVFEES' and year='FYBCA' or year='Bachelor of Computer Applications-E-First Year'";
                                                    $rresult=$con->query($rsql);
                                                    if($rresult->num_rows>0)
                                                    {  
                                                        while($rrow=$rresult->fetch_assoc())
                                                        {
                                                     
                                            ?>
                                            <tr class="table-danger">
                                                <td>&nbsp;</td>
                                                <td  style="text-align: right;"><b>TMV FEES</b></td>
                                                <td><?php echo $rrow['Year'];?></td>
                                                <td><?php echo $rrow['ReceiptNewNo'];?></td>
                                                <td><?php echo $rrow['Date'];?></td>
                                                <td>&nbsp;</td>
                                                <td><?php echo $rrow['Total'];?></td>
                                                <td><?php echo $rrow['Paid'];?></td>
                                                <td><?php echo $rrow['Balance'];?></td>
                                                <td>&nbsp;</td>
                                                <td><?php echo $rrow['ReceiptMode'];?></td>
                                            </tr>
                                        <?php }
                                    }?>
                                        	<?php
                                        		$name=$row['fullname'];
                                        		 $rbcsql="select * from receipt where FullName='$name' and Receipttype='BCAFEES' and year='FYBCA' ";
                                                    $rbcresult=$con->query($rbcsql);
                                                    if($rbcresult->num_rows>0)
                                                    {  
                                                        while($rbcrow=$rbcresult->fetch_assoc())
                                                        {
                                                     
                                        	?>
                                        	<tr class="table-success">
                                        		<td>&nbsp;</td>
                                        		<td  style="text-align: right;"><b>YASH FEES</b></td>
                                        		<td><?php echo $rbcrow['Year'];?></td>
                                        		<td><?php echo $rbcrow['ReceiptNewNo'];?></td>
                                        		<td><?php echo $rbcrow['Date'];?></td>
                                        		<td>&nbsp;</td>
                                        		<td><?php echo $rbcrow['Total'];?></td>
                                        		<td><?php echo $rbcrow['Paid'];?></td>
                                        		<td><?php echo $rbcrow['Balance'];?></td>
                                        		<td>&nbsp;</td>
                                                <td><?php echo $rbcrow['ReceiptMode'];?></td>
                                        	</tr>
                                        	
                                        	<?php
                                        	
                                        }
                                    }
                                    $totalfeessql="select SUM(Paid) as Paid,Total from receipt where FullName='$name' and Receipttype='TMVFEES' and year='FYBCA'";
                                                            $totalfeesresult=$con->query($totalfeessql);
                                                            $totalfeesrow=$totalfeesresult->fetch_assoc();
                                                            
                                                            $totalfeesclsql="select SUM(Paid) as Paid,Total from receipt where FullName='$name' and Receipttype='BCAFEES' and year='FYBCA'";
                                                            $totalfeesclresult=$con->query($totalfeesclsql);
                                                            $totalfeesclrow=$totalfeesclresult->fetch_assoc();
                                                            
                                                            $bal=$totalfeesrow['Total']-$totalfeesrow['Paid'];
                                                            $balcl=$totalfeesclrow['Total']-$totalfeesclrow['Paid'];
                                    ?>
                                       <tr class="table-danger">
                                        		<td>&nbsp;</td>
                                        			<td><b><?php echo $row['fullname'];?></b></td>
                                        		<td><?php echo $row['coursename'];?></td>
                                        		<td><b>Total Fees</b></td>
                                        		<td>&nbsp;</td>
                                        		<td><?php echo $totalfeesrow['Total']+$totalfeesclrow['Total']?></td>
                                        			<td>&nbsp;</td>
                                        			<td>&nbsp;</td>
                                        			<td>&nbsp;</td>
                                        		<td><?php echo $bal+$balcl;?></td>
                                                	<td>&nbsp;</td>
                                        	</tr>
                                    <?php
                                }
                                    }
                                        	?>
                                        </table>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
              <!-- <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Backlog Details</h4>
                                <div class="table-responsive">
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> -->
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