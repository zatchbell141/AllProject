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
                                <ul class="nav nav-pills mb-3">
                                    <li class="nav-item"><a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Admitted</a>
                                    </li>
                                    <li class="nav-item"><a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">No Admitted</a>
                                    </li>
                                    <li class="nav-item"><a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Total Enquiry Reports</a>
                                    </li>
                                </ul>
                                <div class="tab-content br-n pn">
                                    <div id="navpills-1" class="tab-pane active">
                                        <h4>Admitted</h4>
                                <table class="table table-striped table-bordered zero-configuration table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Stream</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from enquiry where admitted='1' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                                <td><?php echo $row['name'];?></td>
                                                
                                                <td><?php echo $row['Stream'];?></td>
                                                <td><?php echo $row['phno'];?></td>
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
                                            </tr>
                                            <?php
                                        }
                                    }
                                            ?>
                                
                               </tbody>
                                </table>
                                    </div>
                                      <div id="navpills-2" class="tab-pane">
                                         <table id="data-table-basic" class="table table-bordered  table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Stream</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from enquiry where admitted='0' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                                <td><?php echo $row['name'];?></td>
                                                
                                                <td><?php echo $row['Stream'];?></td>
                                                <td><?php echo $row['phno'];?></td>
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
                                            </tr>
                                            <?php
                                        }
                                    }
                                            ?>
                                
                               </tbody>
                           </table>
                                    </div>
                                      <div id="navpills-3" class="tab-pane">
                                         <?php
                                            $nasql="select count(*) as NA from enquiry where admitted='0' ORDER BY id DESC";
                                            $naresult=$con->query($nasql);
                                            $narow=$naresult->fetch_assoc();
                                            
                                            $asql="select count(*) as admitted from enquiry where admitted='1' ORDER BY id DESC";
                                            $aresult=$con->query($asql);
                                            $arow=$aresult->fetch_assoc();
                                        ?>
                                            <table class="table table-striped table-border">
                                                <tr class="success">
                                                    <td><b>Number Of Admitted:<?php echo $arow['admitted'];?></b></td>
                                                </tr>
                                                <tr class="danger">
                                                    <td><b>Number Of Not Admitted:<?php echo $narow['NA'];?></b></td>
                                                </tr>
                                            </table>
                                     </div>
                                </div>
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
                                            <h4 class="card-title">Enquiry Report</h4>
                                            <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"></div>
                                        </div>
                                    </div>
                               
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
    <script src="plugins/chartist/js/chartist.min.js"></script>
    <script src="plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script>
          var data = {
    series: [<?php echo $arow['admitted'];?>,<?php echo $narow['NA'];?>]
  };
  
  var sum = function(a, b) { return a + b };
  
  new Chartist.Pie('#simple-pie', data, {
    labelInterpolationFnc: function(value) {
      return Math.round(value / data.series.reduce(sum) * 100) + '%';
    }
  });
    </script>
</body>

</html>