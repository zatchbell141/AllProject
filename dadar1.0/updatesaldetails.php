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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Subject</a></li>
                    </ol>
                </div>
            </div>
             <?php
    include 'Includes/Conn.php';
      $ts=$_GET['varname'];
      $tssql="select * from salary where id='$ts'";
      $tsresult=$con->query($tssql);
      $tsrow=$tsresult->fetch_assoc();
    ?>
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Update Salary</h4>
                                 <form  action="updatesaldetails.php" method="post">
                                    <table class="table table-striped table-bordered">
                <tr>
                    <input type="hidden"class="form-control" name="txtid" value="<?php echo $tsrow['id'];?>" placeholder="Name" required>
              <td colspan="1"><input type="hidden"class="form-control" name="txtstaffid" value="<?php echo $tsrow['staffid'];?>" placeholder="Name" required></td>
              
            </tr>
            <tr>
              <td colspan="2"><input type="hidden"class="form-control" name="txtphno" value="<?php echo $tsrow['contact'];?>" placeholder="Name" required></td>
            </tr>
            <tr>
              <td colspan="4"><input type="text"class="form-control" name="txtdname" value="<?php echo $tsrow['name']?>" placeholder="Name" required></td>
            </tr>
             <tr>
             <td><input type="text" list="subject"class="form-control" name="txtsubject" placeholder="Subject" value="<?php echo $tsrow['subject']?>" required>
                     <datalist id="subject">
                      <?php
                                include 'Conn.php';
                                 $query1="select * from subject where active=1";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['id'];?>"><?php echo $grd['subject']?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist>
                </td>
              </td>
           
               <td><input type="text" name="txttropic"class="form-control" placeholder="Topic:" value="<?php echo $tsrow['topic']?>" required></td>
            
              <td><input type="text"class="form-control" name="txtdate" value="<?php 
                 
                $to=date('Y-m-d');
              
              echo $to?>" required></td>
              <td><select name="year"class="form-control">
                  <hr>
                  <option name="<?php echo $tsrow['class']?>"><?php echo $tsrow['class']?></option>
                  <hr>
                  <option name="FYBCA">FYBCA</option>
                  <option name="SYBCA">SYBCA</option>
                  <option name="TYBCA">TYBCA</option>
                </select></td>
             </tr>
              <tr>
                 <td colspan="2">Start Lecture Time:<input type="time" class="form-control" name="starttime" value="<?php echo $tsrow['starttime']?>"  placeholder="Start Lecture Time" required></td>
              </td>
              <td colspan="2">End Lecture Time<input type="time"class="form-control" name="endtime" placeholder="Start Lecture Time" value="<?php echo $tsrow['endtime']?>" required></td>
            
              </td>

              </tr>
              <tr>
                <td colspan="2"><input type="submit" name="btnsubmit" class="btn btn-outline-primary" value="Update Salary"></td>
            </form>
              </tr>
               <tr>
        <td colspan="4"><?php include 'Includes/updatesal.php';?></td>
      </tr>
            </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
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