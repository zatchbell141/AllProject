<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'Includes/header.php'; $date=date('Y-m-d');?>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include 'Includes/menu.php';?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include 'Includes/topmenu.php';?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Receipt</div>
                      <?php
                        include 'Includes/Conn.php';
                        $date1=date('Y-m-d');
                         $bcasql="SELECT SUM(Paid) as Total FROM `receipt` WHERE `Receipttype`='BCAFEES' and Date='$date1'";
                         $bcaresult=$con->query($bcasql);
                         $bcarow=$bcaresult->fetch_assoc();
                      ?>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $bcarow['Total']?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                       <!--  <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                        <span>Since last month</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <?php
                        include 'Includes/Conn.php';
                         $bcasql="SELECT SUM(Paid) as Total FROM `receipt` WHERE `Receipttype`='BCABACKLOG' and Date='$date'";
                         $bcaresult=$con->query($bcasql);
                         $bcarow=$bcaresult->fetch_assoc();
                      ?>
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Backlog</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $bcarow['Total']?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                       <!--  <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                        <span>Since last month</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <?php
                        include 'Includes/Conn.php';
                         $bcasql="SELECT SUM(Paid) as Total FROM `receipt` WHERE `Receipttype`='BCACONVOCATION' and Date='$date'";
                         $bcaresult=$con->query($bcasql);
                         $bcarow=$bcaresult->fetch_assoc();
                      ?>
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Convocation</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $bcarow['Total']?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                       <!--  <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                        <span>Since last month</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <?php
                        include 'Includes/Conn.php';
                         $bcasql="SELECT SUM(Paid) as Total FROM `receipt` WHERE `Receipttype`='BCAOTHER' and Date='$date'";
                         $bcaresult=$con->query($bcasql);
                         $bcarow=$bcaresult->fetch_assoc();

                      ?>
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Other Receipt</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $bcarow['Total']?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                        <span>Since last month</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Area Chart -->
           <!--  <div class="col-xl-8 col-lg-7">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Monthly Recap Report</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                      aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- Pie Chart -->
            <!-- <div class="col-xl-4 col-lg-5">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Products Sold</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle btn btn-primary btn-sm" href="#" role="button" id="dropdownMenuLink"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Month <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                      aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Select Periode</div>
                      <a class="dropdown-item" href="#">Today</a>
                      <a class="dropdown-item" href="#">Week</a>
                      <a class="dropdown-item active" href="#">Month</a>
                      <a class="dropdown-item" href="#">This Year</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="mb-3">
                    <div class="small text-gray-500">Oblong T-Shirt
                      <div class="small float-right"><b>600 of 800 Items</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="small text-gray-500">Gundam 90'Editions
                      <div class="small float-right"><b>500 of 800 Items</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="small text-gray-500">Rounded Hat
                      <div class="small float-right"><b>455 of 800 Items</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="small text-gray-500">Indomie Goreng
                      <div class="small float-right"><b>400 of 800 Items</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="small text-gray-500">Remote Control Car Racing
                      <div class="small float-right"><b>200 of 800 Items</b></div>
                    </div>
                    <div class="progress" style="height: 12px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <a class="m-0 small text-primary card-link" href="#">View More <i
                      class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </div> -->
            <!-- Invoice Example -->
            <div class="col-xl-8 col-lg-7 mb-4">
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Bonafide Certificate Application</h6>
                  <a class="m-0 float-right btn btn-danger btn-sm" href="bonafideapply.php">View More <i
                      class="fas fa-chevron-right"></i></a>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Sr.No</th>
                        <th>Fullname</th>
                       
                        <th>Date</th>
                        <th>Subject</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from bonafide ORDER BY id DESC LIMIT 5";
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
                          <td><?php echo $row['fullname'];?></td>
                        
                          <td><?php echo $row['appldate'];?></td>
                          <td><?php echo $row['subject'];?></td>
                           <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                        </tr>
                        <?php
                           }
                        }
                        ?>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
            <!-- Message From Customer-->
            <div class="col-xl-4 col-lg-5 ">
              <div class="card">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-light">Message From Students</h6>
                </div>
                <div>
                   <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from msg ORDER BY id DESC LIMIT 5";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                      $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                           $no++; 
                                           $username=$row['username'];
                                           $unsql="select * from studreg where studentid='$username'";
                                           $unresult=$con->query($unsql);
                                           $unrow=$unresult->fetch_assoc();
                        ?>
                  <div class="customer-message align-items-center">
                    <a class="font-weight-bold" href="#">
                      <div class="text-truncate message-title"><?php echo $row['msg']?></div>
                      <div class="small text-gray-500 message-time font-weight-bold"><?php echo $unrow['name']?>· <?php echo $row['date']?></div>
                    </a>
                  </div>
                  <?php
                    }
                  }
                  ?>
                  <div class="card-footer text-center">
                    <a class="m-0 small text-primary card-link" href="#">View More <i
                        class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- <div class="row">
            <div class="col-lg-12 text-center">
              <p>Do you like this template ? you can download from <a href="https://github.com/indrijunanda/RuangAdmin"
                  class="btn btn-primary btn-sm" target="_blank"><i class="fab fa-fw fa-github"></i>&nbsp;GitHub</a></p>
            </div>
          </div>
 -->
        </div>
        <!---Container Fluid-->
      </div>
      <?php include 'Includes/footor.php';?>
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <?php include 'Includes/script.php';?>
</body>

</html>