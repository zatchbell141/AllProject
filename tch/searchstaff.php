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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Search For Staff</a></li>
                    </ol>
                </div>
            </div>
         
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Search For Staff</h4>
                   <form  action="searchstaff.php" method="post" autocomplete="off">
            <table class="table table-sc-ex table-bordered" align="center">
               <td colspan="2"> <div class="nk-int-st"><input type="text" name="txtdname" class="form-control input-lg" list="browsers" placeholder="Name" required></div></td>
                <datalist id="browsers">
                      <?php
                                include 'Includes/Conn.php';
                                 $query1="select * from staff";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['id']?>"><?php echo $grd['name']." ".$grd['lastname']?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist>
             </tr>
            <td>Form: <input type="date" name="txtform" class="form-control input-lg" required></td>
            <td>To:<input type="date" name="txtto" class="form-control input-lg" required></td>
             <tr>
              <td><input type = "submit" class="btn btn-primary"  value ="submit" name="staffdet"></td>
                </form>
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
                if(isset($_POST['submit']))
              {
                                    $ts=protect($_POST['txtdname']);
                                    $form=protect($_POST['txtform']);
                                    $to=protect($_POST['txtto']);

                                    include 'Includes/Conn.php';
                                    $ssql="select staffid,name, SUM(duration) As Hours, SUM(sal) As Salary,name from salary where staffid='$ts' and sessiondate  BETWEEN '$form' AND '$to' and active=1 GROUP BY staffid";
                                    $sresult=$con->query($ssql);
                                   
                                    if($sresult->num_rows>0)
                                    {
                                        while($srow=$sresult->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="table-danger">
                                            <td><b><?php echo $srow['staffid'];?></b></td>
                                            <td><b><?php echo $srow['name'];?></b></td>
                                            <td><b><?php echo $srow['Salary'];?></b></td>
                                            <td><b><?php echo $srow['Hours'];?></b></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                  }
                            ?>      
            </tr>
          </table>
                            <table class="table table-bordered  table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                         <th>Staff Id</th>
                                        <th>Name</th>
                                        <th>Tropic</th>
                                        <th>Subject</th>
                                        <th>Class</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Duration</th>
                                        <th>Date</th>
                                        <th>Salary</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'Includes/Conn.php';
                                    if(isset($_POST['submit']))
                                    {
                                        $ts=protect($_POST['txtdname']);
                                    $start=protect($_POST['txtform']);
                                    $end=protect($_POST['txtto']);
                                    $sql="select * from salary where staffid='$ts' and sessiondate between '$start' and '$end' order by id desc";
                                   
                                                                    
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="table-info">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['staffid'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['topic'];?></td>
                                            <td><?php 
                                            
                                            
                                            $sub=$row['subjectId'];
                                            $tsisql="select * from subject where id='$sub' and active='1' ORDER BY id DESC";
                                            $tsiresult=$con->query($tsisql);
                                            $tsirow=$tsiresult->fetch_assoc();
                                            echo $tsirow['name'];
                                            
                                            
                                            ?></td>
                                            <td><?php echo $row['class'];?></td>
                                            <td><?php echo $row['starttime'];?></td>
                                            <td><?php echo $row['endtime'];?></td>
                                            <td><?php echo $row['duration'];?></td>
                                            <td>
                                            <?php $date= $row['sessiondate'];
                                                    $date=strtotime($date);
                                                    $date=date('d-m-Y',$date); 
                                                    echo $date;
                                                   ?></td>
                                            <td><?php echo $row['sal'];?></td>
                                            
                                            <?php
                                        }
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