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
                                <h4 class="card-title">Bonafide Application</h4>
                                <div class="table-responsive">
                                     <table class="table table-striped table-bordered zero-configuration table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Fullname</th>
                                        <th>Date of Birth</th>
                                        <th>PRN</th>
                                        <th>Subject</th>
                                        <th>Applied Date</th>
                                        <th>Status</th>
                                        <th>Replay</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from bonafide  ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;   
                                            ?>
                                            <tr class="table-success">
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $row['fullname'];?></td>
                                            <td><?php echo $row['dob'];?></td>
                                            <td><?php echo $row['prn'];?></td>
                                            <td><?php echo $row['subject'];?></td>
                                            <td><?php echo $row['appldate'];?></td>
                                            <td><?php echo $row['status'];?></td>
                                            <!--<td><a href="delstudent.php?varname=<?php echo $row['studentid'];?>">Delete</a></td>-->
                                             <td><button class="btn btn-outline-danger"  onClick="deleteme(<?php echo $row['id']; ?>)">Replay</button>
                                             </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Are You Sure you want to do replay:"+" "+delid)){
                                             window.location.href='replybonof.php?varname=' +delid+'';
                                             return true;
                                             }
                                             } 
                                             </script>
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