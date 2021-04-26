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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Bonafide Application</a></li>
                    </ol>
                </div>
            </div>
         <?php
                            include 'Conn.php';
                            $id=$_GET['varname'];
                            $sql="select * from bonafide where id='$id'";
                            $result=$con->query($sql);
                            $row=$result->fetch_assoc();
                        ?>
        <!-- Container Fluid-->
          <!--<div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bonafide Application</h4>
                                    
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>-->
              <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Replay Bonafide Application</h4>
                                 <form action="replybonof.php" method="POST" autocomplete="off">
                                <input type="hidden" name="txtid" class="form-control" value="<?php echo $row['id']?>" readonly>
                           <table class="table table-bordered table-hover">
                               <tr>
                                   <td>Fullname:<input type="text" name="txtfullname" class="form-control" value="<?php echo $row['fullname']?>" readonly></td>
                                   <td>PRN:<input type="text" name="txtprn" class="form-control" value="<?php echo $row['prn']?>" readonly></td>
                                   <td>Subject:<input type="text" name="txtsubject" class="form-control" value="<?php echo $row['subject']?>" readonly></td>
                               </tr>
                               <tr>
                                   <td>Date Of Birth:<input type="text" name="txtdob" class="form-control" value="<?php echo $row['dob']?>" readonly></td>
                                   <td>Application Date:<input type="text" name="txtappldate" class="form-control" value="<?php echo $row['appldate']?>" readonly></td>
                                   <td>Status:<input type="text" name="txtstatus" class="form-control" value="<?php echo $row['status']?>"></td>
                               </tr>
                               <tr>
                                   <td colspan="3"><input class="btn btn-outline-primary" name="btnstatus" type="submit" value="Replay"></td>
                                   </form>
                               </tr>
                               <tr>
                                   <td colspan="3"><?php include 'Includes/updatestatus.php';?></td>
                                </tr>
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