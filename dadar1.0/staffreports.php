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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Staff Reports</a></li>
                    </ol>
                </div>
            </div>
         
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Staff Reports</h4>
                   <form action="staffreports.php" method="post" autocomplete="off">
                                      <table class="table table-striped">
                                        <tr>
                                          <td>Form: <input type="date" name="txtform" class="form-control input-lg" required></td>
                                          <td>To:<input type="date" name="txtto" class="form-control input-lg" required></td>
                                        </tr>
                                        <tr>
                                          <td colspan="2"><input type = "submit" class="btn btn-primary"  value ="submit" name="salshs"></td>
                                          </form>
                                        </tr>
                                      </table>

          <table class="table  table-striped table-border">
            <tr>
              <th>Staff ID</th>
              <th>Name</th>
              <th>Salary</th>
              <th>Minutes</th>
              <th>Date</th>
               <th>Subject</th>
            </tr>
            <tr>
              <?php
              if(isset($_POST['salshs']))
              {
                                    include 'Includes/Conn.php';
                                    $form=$_POST['txtform'];
                                      $form=strtotime($form);
                                       $form=date('Y-m-d',$form);

                                        $to=$_POST['txtto'];
                                      $to=strtotime($to);
                                       $to=date('Y-m-d',$to);

                                    $sql="SELECT s.id,sa.name,sa.sal,sa.duration,sa.sessiondate,sa.subject FROM staff s INNER JOIN salary sa on 
                                    s.id=sa.staffid WHERE sa.sessiondate BETWEEN '$form' AND '$to' and sa.active=1";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="table-success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['sal'];?></td>
                                            <td><?php echo $row['duration'];?></td>
                                            <td><?php 
                                              $date=$row['sessiondate'];
                                              $date=strtotime($date);
                                             $date=date('d/m/Y',$date);
                                            echo $date; ?></td>
                                            <td><?php echo $row['subject'];?></td>
                                          
                                            </tr>
                                            <?php
                                        }
                                    }
                                  }
                            ?>      
            </tr>
          </table>

          <table class="table  table-striped table-border">
            <tr>

              <th colspan="4"><hr>Grand Total:<hr></th>
              
            </tr>
            <tr>
              <th>Staff ID</th>
              <th>Name</th>
              <th>Total Salary</th>
              <th>Total Minutes</th>
            </tr>
            <tr>
              <?php
                if(isset($_POST['salshs']))
              {
                                      $form=$_POST['txtform'];
                                      $form=strtotime($form);
                                       $form=date('Y-m-d',$form);

                                        $to=$_POST['txtto'];
                                      $to=strtotime($to);
                                       $to=date('Y-m-d',$to);

                                    include 'Includes/Conn.php';
                                    $ssql="select staffid,name, SUM(duration) As Hours, SUM(sal) As Salary,name from salary where sessiondate BETWEEN '$form' AND '$to' and active=1 GROUP BY staffid";
                                    $sresult=$con->query($ssql);
                                   
                                    if($sresult->num_rows>0)
                                    {
                                        while($srow=$sresult->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="table-success">
                                            <td><?php echo $srow['staffid'];?></td>
                                            <td><?php echo $srow['name'];?></td>
                                            <td><?php echo $srow['Salary'];?></td>
                                            <td><?php echo $srow['Hours'];?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                  }
                            ?>      
            </tr>
          </table>
           <table class="table  table-striped table-border">
            <tr>
              <th>Subject Wise Report</th>
            </tr>
            <tr class="table-success">
              <form action="exportstaff.php" method="post">
              <td>Export Form:<input type="date" name="formtxt" class="form-control input-lg" value="<?php echo $form?>" required> To:<input type="date" name="totxt"class="form-control input-lg" value="<?php echo $to?>" required>
               <input type = "submit" class="btn btn-danger"  value ="Export to Excel" name="export"></td>
              </form>
            </tr>
          </table>
                </div>
              </div>
            </div>
          </div>
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