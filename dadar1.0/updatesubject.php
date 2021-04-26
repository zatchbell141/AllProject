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
                 include 'Includes/conn.php';
                 $id=$_GET['varname'];
                 $sql="select * from subject where id='$id' ORDER BY id DESC";
                 $result=$con->query($sql);
                 $row=$result->fetch_assoc();
            ?>
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Update Subject</h4>
                                <form action="updatesubject.php" method="POST" autocompleted="off">
                                    <input type="hidden" name="txtid" value="<?php echo $row['id']?>">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <td>Subject Code:<input type="text" name="txtsubcode" class="form-control" value="<?php echo $row['code']?>" requires></td>
                                            <td>Subject Name:<input type="text" name="txtsubname" class="form-control" value="<?php echo $row['name']?>" requires></td>
                                        </tr>
                                        <tr>
                                            <td>Edition:<input type="text" name="txtedition" class="form-control" value="<?php echo $row['edition']?>" requires></td>
                                            <td>Sem:<input type="text" name="txtsem" class="form-control" value="<?php echo $row['sem']?>" requires></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input type="submit" name="btnsubmit" value="Update Subject" class="btn btn-outline-primary"></td>
                                            </form>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><?php include 'Includes/updatesub.php';?></td>
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