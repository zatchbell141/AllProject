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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Backlog Report</a></li>
                    </ol>
                </div>
            </div>
         
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Backlog Report</h4>
                                 <form action="backlogreport.php" method="post">
             <table class="table table-striped table-bordered">
                <th colspan="2" align="center"><h1 colspan="2">Search</h1></th>
                <tr>
                        <td>Start Date: <input type="date" name="std" class="form-control"></td>
                        <td>End Date:<input type="date" name="endd" class="form-control"></td>
                    </tr>
                   
                    	<tr>
            		<td colspan="2"><input type="submit" name="btnsearch" class="btn btn-outline-warning" Value="Search"></td>
            	</form>
                     </tr>   
            </table>
                                <div class="table-responsive">
                                      <table class="table table-striped table-bordered zero-configuration table-hover">
                            <thead>
                                	<th>Sr.No</th>
                        			<th>PRN</th>
                        			<th>SEAT NO</th>
                        			<th>NAME OF STUDENT</th>
                        			<th>BACKLOG</th>
                        			<th>SUBJECT</th>
                        			<th>EXT</th>
                        			<th>INT</th>
                        			<th>PRAC/PROJECT</th>
                        			<th>FEES</th>
                        			<th>LATE FEES</th>
                        			<th>Change of exam center Fees</th>
                            </thead>
                            <tbody>
                                	<?php
				include 'Includes/Conn.php';
				if(isset($_POST['btnsearch']))
				{
				    $std=$_POST['std'];
				    $endd=$_POST['endd'];
				    $sql="SELECT b1.seat,b1.fullname,b1.subcode,b1.subname,b1.prn,b1.inter,b1.exter,b1.pract,b2.bank,b2.paid,b2.fees,b2.cfees,b2.lfees,b2.paymenttype,b2.cnmode,b2.chdate,b2.chqno,b2.rbank , b2.date from backlog b1,backfees b2 where b2.studentid=b1.studentid and b2.date=b1.date and b1.date BETWEEN '$std' and '$endd' group by b1.studentid order by b1.prn asc";
				}
				else
				{
				   $sql="SELECT b1.seat,b1.fullname,b1.subcode,b1.subname,b1.prn,b1.inter,b1.exter,b1.pract,b2.bank,b2.paid,b2.fees,b2.cfees,b2.lfees,b2.paymenttype,b2.cnmode,b2.chdate,b2.chqno,b2.rbank , b2.date from backlog b1,backfees b2 where b2.studentid=b1.studentid and b2.date=b1.date group by b1.studentid order by b1.id desc"; 
				}
   
     $bresult=$con->query($sql);
     $int=0;
     
     if($bresult->num_rows>0)
      {
         while($brow=$bresult->fetch_assoc())
           {
               	$int++;       
            ?>
            	<tr class="table-success" rowspan="2">
            		<td><?php echo $int;?></td>
            		<td><?php echo $brow['prn'];?></td>
            		<td><?php echo $brow['seat'];?></td>
            		<td><?php echo $brow['fullname'];?></td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td><?php echo $brow['paid'];?></td>
            		<td><?php echo $brow['lfees'];?></td>
            		<td><?php echo $brow['cfees'];?></td>
            	</tr>
            
		</tr>
		<tr>
			<?php
				include 'Includes/Conn.php';
   $sql="select * from backlog where fullname='".$brow['fullname']."' and seat='".$brow['seat']."' and date='".$brow['date']."' order by subcode ASC";
     $result=$con->query($sql);
     if($result->num_rows>0)
      {
         while($row=$result->fetch_assoc())
           {
               	     
            ?>
            	<tr class="table-warning">
            	<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td><?php echo $row['subcode'];?></td>
            		<td><?php echo $row['subname'];?></td>
            		<td><?php echo $row['exter'];?></td>
            		<td><?php echo $row['inter'];?></td>
            		<td><?php echo $row['pract'];?></td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            		<td>&nbsp;</td>
            	</tr>
            <?php

        }
    
         }
    }
}
            ?>
		</tr>
		<?php
				 include 'Includes/Conn.php';
				 if(isset($_POST['btnsearch']))
				{
				    $std=$_POST['std'];
				    $endd=$_POST['endd'];
				    $fsql="SELECT SUM(paid) As paid,SUM(lfees) as lfees,SUM(cfees) as cfees from backfees where date between '$std' and '$endd'";
				}
				else
				{
				   $fsql="SELECT SUM(paid) As paid,SUM(lfees) as lfees,SUM(cfees) as cfees from backfees";
				}
                 
                 $fresult=$con->query($fsql);
                 $frow=$fresult->fetch_assoc();
                 $tol=$frow['paid']+$frow['lfees']+$frow['cfees'];
            ?>
		<tr>
			<td colspan="8"  rowspan="2">&nbsp;</td>
			<td align="right"><b>Total</b></td>
			<td><b><?php echo $frow['paid']?></b></td>
			<td><b><?php echo $frow['lfees']?></b></td>
			<td><b><?php echo $frow['cfees']?></b></td>
		</tr>
		<tr>
			
			<td align="right"><b>Gr.Total</b></td>
			<td colspan="3" align="center"><b><?php echo $tol;?></b></td>
		</tr>
                            </tbody>
                            </table>
                            </div>
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