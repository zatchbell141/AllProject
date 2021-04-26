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
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Admission Years</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
           <?php
             include 'Includes/Conn.php';
             $id=$_GET['varname'];
             $sql="select * from admissionyrs where id='$id'";
             $result=$con->query($sql);
             $row=$result->fetch_assoc();
           ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Admission Year</h4>
                                
                                 <form action="updateadmissionyrs.php" method="post" autocomplete="off">
                                     <input type="hidden" name="txtid" value="<?php echo $row['id'];?>">
                                  <table class="table table-striped">
                                    <tr>
                                      <td>Admission Years:<input type="text" name="txtadmissionyrs" class="form-control" value="<?php echo $row['name'];?>"></td>
                                    </tr>
                                    <tr>
                                      <td><input type="submit" name="btnsubmit" class="btn btn-outline-primary" value="Update Admission Year"></td>
                                      </form>
                                    </tr>
                                    <tr>
                                        <td><?php include 'Includes/updateyrs.php';?></td>
                                    </tr>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           

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
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
<?php include 'Includes/script.php';?>

</body>

</html>