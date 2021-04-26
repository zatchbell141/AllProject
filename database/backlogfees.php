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

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Backlog Fees Table</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Sr.No</th>
                        <th>Id</th>
                        <th>Student ID</th>
                        <th>Fullname</th>
                        <th>Payment Type</th>
                        <th>Course Mode</th>
                        <th>Fees</th>
                        <th>Late Fees</th>
                        <th>Center Fees</th>
                        <th>Paid Fees</th>
                        <th>Balance</th>
                        <th>Date</th>
                        <th>Cheque Date</th>  
                        <th>Cheque No</th>
                        <th>Bank</th>
                        <th>Receipt No</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          include 'Includes/bcaConn.php';
                          $sql="select * from backfees ORDER BY id DESC";
                          $result=$con->query($sql);
                          if($result->num_rows>0)
                          {
                            $no=0;
                              while($row=$result->fetch_assoc())
                              {
                              $no++;              
                      ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td><?php echo $row['id'];?></td>
                          <td><?php echo $row['studentid'];?></td>
                          <td><?php echo $row['fullname'];?></td>
                          <td><?php echo $row['paymenttype'];?></td>
                          <td><?php echo $row['cnmode'];?></td>
                          <td><?php echo $row['fees'];?></td>
                          <td><?php echo $row['lfees'];?></td>
                          <td><?php echo $row['cfees'];?></td>
                          <td><?php echo $row['paid'];?></td>
                          <td><?php echo $row['balane'];?></td>
                          <td><?php echo $row['date'];?></td>
                          <td><?php echo $row['chdate'];?></td>
                          <td><?php echo $row['chqno'];?></td>
                          <td><?php echo $row['bank'];?></td>
                          <td><?php echo $row['ReceiptNewNo'];?></td>
                          <td><button class="btn btn-outline-success" onClick="edit(<?php echo $row['id'];?>)">Edit</button></td>
                          <td><button class="btn btn-outline-danger" onClick="deleteme(<?php echo $row['id'];?>)">Delete</button></td>
                        </tr>
                         <script language="javascript">
                           function deleteme(delid)
                           {
                             if(confirm("Do you want Delete!")){
                             window.location.href='Includes/deletebcaadmin.php?varname=' +delid+'';
                             return true;
                             }
                           } 
                           function edit(delid)
                           {
                             if(confirm("Do you want Edit!")){
                             window.location.href='editbacklogfees.php?editbacklogfees=' +delid+'';
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
        <!---Container Fluid-->
      </div>
     <?php include 'Includes/footer.php';?>
    </div>
  </div>

 <?php include 'Includes/script.php';?>
</body>

</html>