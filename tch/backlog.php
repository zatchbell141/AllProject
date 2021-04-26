<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'Includes/header.php';?>
   <style>
     .ex4 {
    background-color: white;
     width: 100%;

    height: 223px;

    overflow: auto;
}

</style>
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Backlog Receipt</a></li>
                    </ol>
                </div>
            </div>
         
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Backlog Receipt</h4>
                                     <form action="backlog.php" method="post" autocomplete="off">
            <table class="table table-striped table-bordered">
              <tr>
                <td>Fullname:<input type="text" list="browsers" name="txtstudent" class="form-control"></td>
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
                <td><input type="submit" name="btnsubmit" value="Search" class="btn btn-outline-info"></td>
              </tr>
            </form>
              <?php
                if(isset($_POST['btnsubmit']))
                {
                    $name=$_POST['txtstudent'];
                     $sql="select * from studentdt where fullname='".$name."'";
                     $result=$con->query($sql);
                     $row=$result->fetch_assoc();
                }
              ?>
            </table>
            <input type="hidden" name="txtstudentid" value="<?php echo $row['studentid']?>">
            <table class="table table-striped table-bordered">
              <tr>
                <td colspan="3">Date:<input type="text" class="form-control" name="txtdate" value="<?php echo date('Y-m-d')?>" readonly></td>
              </tr>
              <tr>
                <td>PRN:<input type="text" name="txtprn" class="form-control"  value="<?php echo $row['prn']?>" readonly></td>
                 <td>FullName:<input type="text" class="form-control" name="txtfullname" value="<?php echo $row['fullname']?>" readonly></td>
                  <td>Seat No:<input type="text" class="form-control" name="txtseat"></td>
              </tr>
               <tr>
          <td>
            Exam Mode:
            <select name="type" class="form-control" >
        <option value="Internal">Internal</option>
        <option value="External">External</option>
        <option value="Pratical">Pratical</option>
        <option value="BOT">Both INT & EXT</option>
    </select>
          </td>
           <td colspan="2">Mode:<select name="paytype"  class="form-control">
        <option value="Regular">Regular</option>
        <option value="Late">Late</option>
       
    </select></td>
               
             
            </tr>
         </tr>  
         
            </table>
            <div class="ex4">
             <?php

                                    include 'includes/Conn.php';
                                    $sql="select * from subject where active='1'";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {                              

    ?>
    
        
 <input type="checkbox" class="i-checks" name="check_list[]" value="<?php echo $row['id'];?>"><i></i><?php echo $row['subject'];?><br>
  
<?php

}
}
?>

</div>
<table class="table table-bordered  table-hover">
  <tr>
      <td><input type="submit" class="btn btn-outline-primary" name="btnsub" value="Submit">
  </tr>
</table>
<?php include 'Includes/addbacklogsubject.php';?>
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
                                <h4 class="card-title">Backlog Details</h4>
                                <div class="table-responsive">
                                     <table class="table table-striped table-bordered zero-configuration table-hover">
                               <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>PRN</th>
                                        <th>Seat No</th>
                                        <th>Fullname</th>
                                        <th>Backlog</th>
                                        <th>Subject</th>
                                        <th>External</th>
                                        <th>Internal</th>
                                        <th>Pratical</th>
                                        <th>Pay</th>
                                        <th>Print Receipt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from backlog ORDER BY id desc";
                                    $result=$con->query($sql);
                                    $no=0;
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            ?>
                                            <tr class="table-success">
                                            <td><?php echo $no?></td>
                                            <td><?php echo $row['prn']?></td>
                                              <td><?php echo $row['seat']?></td>
                                            <td><?php echo $row['fullname']?></td>
                                          
                                            <td><?php echo $row['subcode']?></td>
                                            <td><?php echo $row['subname']?></td>
                                            <td><?php echo $row['exter']?></td>
                                             <td><?php echo $row['inter']?></td>
                                             <td><?php echo $row['pract']?></td>
                                              <td><a class="btn btn-warning" href='backlogfees.php?varname=<?php echo $row['fullname']?>&date=<?php echo $row['prn']?>&seat=<?php echo $row['seat']?>&sid=<?php echo $row['studentid']?>'>Pay</a></td>
                                               <td><a href='backlogreceipt.php?varname=<?php echo $row['studentid']?>' class="btn btn-primary">Print</a></td>
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