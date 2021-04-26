<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'Includes/header.php';?>
</head>
<?php require'Includes/bcaConn.php' ?>
<?php
session_start();
if(!isset($_SESSION['user_id'])){
  header("Location: login.php");
}
$query ="SELECT * FROM test";
$results=$con->query($query);
/*$row=$results->fetch_assoc();*/
?>
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
                  <h6 class="m-0 font-weight-bold text-primary">Active Tests</h6>
                </div>
                <div class="table-responsive p-3">

         	
            <table class="table align-items-center table-flush table-hover table-bordered" id="dataTableHover">
                  <thead>
                    <tr>
                      <th>Test Name</th>
                      <th>Subject</th>
                      <th>Ends on</th>
                      <th>Start Test</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($results as $result):
                    if((strtotime($result['sdatetime']) <= strtotime(date("Y-m-d h:i:sa")))  && (strtotime($result['edatetime']) > strtotime(date("Y-m-d h:i:sa")))  ){ ?>
                          <tr>
                            <td><?php echo $result['test_name'];?></td>
                            <td><?php echo $result['subject']; ?></td>
                            <td><?php echo $result['edatetime']; ?></td>
                            <td><a href="solveTest.php?var=<?php echo $result['test_id'];?>" class="btn btn-primary">Start Test</a></td>
                          </tr>
                    <?php } ?>
                  <?php endforeach; ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Upcoming Tests</h6>
                </div>
                <div class="table-responsive p-3">
            
              <table class="table align-items-center table-flush table-hover table-bordered" id="dataTable">
                  <thead>
                    <tr>
                      <th>Test Name</th>
                      <th>Subject</th>
                      <th>Starts on</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($results as $result):
                    if(strtotime($result['sdatetime']) > strtotime(date("Y-m-d h:i:sa"))){ ?>
                          <tr>
                            <td><?php echo $result['test_name'];?></td>
                            <td><?php echo $result['subject']; ?></td>
                            <td><?php echo $result['sdatetime']; ?></td>
                          </tr>
                    <?php } ?>
                  <?php endforeach; ?>
                  </tbody>
              </table>
                </div>
      </div>
  </div>

  <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Past Tests</h6>
                </div>
                <div class="table-responsive p-3">
         
            <table class="table align-items-center table-flush table-hover table-bordered" >
                  <thead>
                    <tr>
                      <th>Test Name</th>
                      <th>Subject</th>
                      <th>Ended on</th>
                      <th>Check Results</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($results as $result):
                    if((strtotime($result['edatetime']) < strtotime(date("Y-m-d h:i:sa")))){ ?>
                          <tr>
                            <td><?php echo $result['test_name'];?></td>
                            <td><?php echo $result['subject']; ?></td>
                            <td><?php echo $result['edatetime']; ?></td>
                            <td><a href="" class="btn btn-primary">Summary</a></td>
                          </tr>
                    <?php } ?>
                  <?php endforeach; ?>
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