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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Enquiry</a></li>
                    </ol>
                </div>
            </div>
            <?php
                include'Includes/Conn.php';
                $id=$_GET['varname'];
                $sql="select * from enquiry where id='$id'";
                $result=$con->query($sql);
                $row=$result->fetch_assoc();
            ?>
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Enquiry</h4>
                  <form class="forms-sample" autocomplete="off" action="editenquiry.php" method="post">
                      <input type="hidden" name="txtid" value="<?php echo $row['id']?>">
                    <table class="table table-bordered">
                      <tr>
                        <td colspan="3">Fullname:<input type="text" class="form-control" name="txtname" placeholder="Name"  title="Please Enter Only Characters..!" value="<?php echo $row['name'];?>" required></td>
                       
                      </tr>
                      <tr>
                        <td>Percentage:<input type="text" class="form-control" name="txtpercentage" placeholder="Percentage" value="<?php echo $row['per'];?>" required></td>
                        <td>College:<input type="text" class="form-control" name="txtcollege" placeholder="College" pattern="[A-Za-z]*" value="<?php echo $row['college'];?>" required></td>
                        <td>
                          Stream:<input type="text" class="form-control" name="txtstream" placeholder="Stream" pattern="[A-Za-z]*" value="<?php echo $row['Stream'];?>" required>
                        </td>
                      </tr>
                      <tr>
                         <td>Reference:<input type="text" class="form-control" name="txtemail" placeholder="Reference" value="<?php echo $row['reference'];?>" required></td>
                         <td>Contact No:<input type="text" class="form-control" name="txtcontact" pattern="[789][0-9]{9}" title="Please Enter 10 digit..!" value="<?php echo $row['phno'];?>" placeholder="Contact No" required></td>
                         <td>Address:<input type="text" class="form-control" name="txtaddress" placeholder="Address" value="<?php echo $row['Address'];?>" required></td>
                      </tr>
                       <tr>
                          <td colspan="4"><input type="submit" name="btnsubmit" value="Update Enquiry" class="btn btn-outline-primary btn-fw"></td>
                          </form> 
                      </tr>
                      <tr>
                          </td colspan="4"><?php include 'Includes/updatenquiry.php';?></td>
                      </tr>
                    </table>
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