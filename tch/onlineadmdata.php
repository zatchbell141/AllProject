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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Online Admission Data</a></li>
                    </ol>
                </div>
            </div>
         
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Online Admission Data</h4>                   
                              <!--   <div class="widget-tabs-list"> -->
                             <ul class="nav nav-pills mb-3">
                                <li class="nav-item"><a href="#home2" class="nav-link active" data-toggle="tab" aria-expanded="false"><b>FYBCA</b></a></li>
                                <li class="nav-item"><a href="#menu12" class="nav-link" data-toggle="tab" aria-expanded="false"><b>Direct SYBCA</b></a></li>
                                 <li class="nav-item"><a href="#menu22" class="nav-link" data-toggle="tab" aria-expanded="true"><b>Cancelled Admission</b></a></li>
                            </ul>
                            <div class="tab-content tab-custom-st tab-ctn-right">
                                <div id="home2" class="tab-pane fade in active">
                                    <div class="tab-ctn">
                                        <h1>FYBCA Online Admission</h1>
                                        <div class="ex3">
                                        <table id="dataTableHover" class="table table-bordered  table-hover">
                                            <tr>
                                                 <th>Sr.No</th>
                                                 <th>Student Photos</th>
                                                 <th>Fullname</th>
                                                 <th colspan="4" style="Text-Align:center">Option</th>
                                            </tr>
                                            <tr>
                                                 <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from addonline where active=1 and course='Bachelor of Computer Applications-E-First Year' and active='1' and addmissionstatus='In Process' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            ?>
                                            <td><?php echo $no;?></td>
                                            <td><img src="<?php echo $row['stdphoto'];?>" height="200"  width="150"></td>
                                            <td><?php echo $row['fullname'];?></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'editstudt.php?varname=<?php echo $row['id'];?>';">Edit</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'viewstudentdata.php?varname=<?php echo $row['id'];?>';">View</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'deladdonline.php?varname=<?php echo $row['id'];?>';">Delete</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'canceladmission.php?varname=<?php echo $row['id'];?>';">Admission Cancelled</button></td>
                                             </tr>
                                            <?php
                                        }
                                    }
                                            ?>
                                            </tr>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                                 <div id="menu12" class="tab-pane fade ">
                                    <div class="tab-ctn">
                                         <div class="ex3">
                                        <h1>Direct Online Admission</h1>
                                         <table class="table table-bordered  table-hover">
                                            <tr>
                                                 <th>Sr.No</th>
                                                 <th>Student Photos</th>
                                                 <th>Fullname</th>
                                                 <th colspan="3" style="Text-Align:center">Option</th>
                                            </tr>
                                            <tr>
                                                 <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from addonline where active=1 and course='Bachelor of Computer Applications- R- Direct Second'  and active='1' and addmissionstatus='In Process' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            ?>
                                            <td><?php echo $no;?></td>
                                            <td><img src="<?php echo $row['stdphoto'];?>" height="200"  width="150"></td>
                                            <td><?php echo $row['fullname'];?></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'editstudt.php?varname=<?php echo $row['id'];?>';">Edit</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'viewstudentdata.php?varname=<?php echo $row['id'];?>';">View</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'deladdonline.php?varname=<?php echo $row['id'];?>';">Delete</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'canceladmission.php?varname=<?php echo $row['id'];?>';">Admission Cancelled</button></td>
                                             </tr>
                                            <?php
                                        }
                                    }
                                            ?>
                                            </tr>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                                 <div id="menu22" class="tab-pane fade">
                                    <div class="tab-ctn">
                                        <h1>Cancelled Online Admission</h1>
                                         <div class="ex3">
                                        <table class="table table-bordered  table-hover">
                                            <tr>
                                                 <th>Sr.No</th>
                                                 <th>Student Photos</th>
                                                 <th>Fullname</th>
                                                 <th colspan="3" style="Text-Align:center">Option</th>
                                            </tr>
                                            <tr>
                                                 <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from addonline where active=1 and addmissionstatus='Cancelled' and active='1'  ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            ?>
                                            <td><?php echo $no;?></td>
                                            <td><img src="<?php echo $row['stdphoto'];?>" height="200"  width="150"></td>
                                            <td><?php echo $row['fullname'];?></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'editstudt.php?varname=<?php echo $row['id'];?>';">Edit</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'viewstudentdata.php?varname=<?php echo $row['id'];?>';">View</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'deladdonline.php?varname=<?php echo $row['id'];?>';">Delete</button></td>
                                             <td><button class="btn btn-danger notika-btn-danger btn-lg"  onClick="location.href = 'canceladmission.php?varname=<?php echo $row['id'];?>';">Admission Cancelled</button></td>
                                             </tr>
                                            <?php
                                        }
                                    }
                                            ?>
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