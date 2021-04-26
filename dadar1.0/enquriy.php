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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Enquiry Report</a></li>
                    </ol>
                </div>
            </div>
         
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Enquiry Report</h4>
                  <form class="forms-sample" autocomplete="off" action="enquriy.php" method="post">
                    <table class="table table-bordered">
                      <tr>
                        <td>Name:<input type="text" class="form-control" name="txtname" placeholder="Name" pattern="[A-Za-z]*" title="Please Enter Only Characters..!" required></td>
                        <td>Fathername:<input type="text" class="form-control" name="txtfathername" placeholder="Father name" pattern="[A-Za-z]*" title="Please Enter Only Characters..!" required></td>
                        <td>Lastname:<input type="text" class="form-control" name="txtlastname" placeholder="Lastname" pattern="[A-Za-z]*" title="Please Enter Only Characters..!" required></td>
                      </tr>
                      <tr>
                        <td>Percentage:<input type="text" class="form-control" name="txtpercentage" placeholder="Percentage" required></td>
                        <td>College:<input type="text" class="form-control" name="txtcollege" placeholder="College" pattern="[A-Za-z]*" required></td>
                        <td>
                          Stream:<input type="text" class="form-control" name="txtstream" placeholder="Stream" pattern="[A-Za-z]*" required>
                        </td>
                      </tr>
                      <tr>
                         <td>Reference:<input type="text" class="form-control" name="txtemail" placeholder="Reference" pattern="[A-Za-z]*" required></td>
                         <td>Contact No:<input type="text" class="form-control" name="txtcontact" pattern="[789][0-9]{9}" title="Please Enter 10 digit..!" placeholder="Contact No" required></td>
                         <td>Address:<input type="text" class="form-control" name="txtaddress" placeholder="Address" required></td>
                      </tr>
                       <tr>
                          <td colspan="4"><input type="submit" name="btnsubmit" value="Add Enquiry" class="btn btn-outline-primary btn-fw"></td>
                          </form> 
                      </tr>
                      <tr>
                          </td colspan="4"><?php include 'Includes/addenquiry.php';?></td>
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
                                <h4 class="card-title">Enquiry Details</h4>
                                <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration table-hover">
                         
                           <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>College</th>
                                        <th>Stream</th>
                                        <th>Contact</th>
                                        <th>Percentage</th>
                                        <th>Reference</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Admitted</th>
                                    </tr>
                                </thead>
                           <tbody>
                                     <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from enquiry ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            ?>
                                            <tr class="table-success">
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['Address'];?></td>
                                                <td><?php echo $row['college'];?></td>
                                                <td><?php echo $row['Stream'];?></td>
                                                <td><?php echo $row['phno'];?></td>
                                                <td><?php echo $row['per'];?></td>
                                                <td><?php echo $row['reference'];?></td>
                                                <td><?php
                                                    $status=$row['admitted'];
                                                    if($status=='1')
                                                    {
                                                        echo '<b style="color:Green">Admitted</b>';
                                                    }
                                                    else
                                                    {
                                                       echo '<b style="color:red">Not Admitted</b>'; 
                                                    }
                                                ?></td>
                                                <td><?php echo $row['date'];?></td>
                                                <td><button class="btn btn-outline-danger"  onClick="location.href = 'admitedenq.php?varname=<?php echo $row['id'];?>';">Admit</button></td>
                                                <td><button class="btn btn-outline-warning"  onClick="location.href = 'editenquiry.php?varname=<?php echo $row['id'];?>';">Edit</button></td>
                                            </tr>
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