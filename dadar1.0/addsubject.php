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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Subject</a></li>
                    </ol>
                </div>
            </div>
         
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Subject</h4>
                           <form action="addsubject.php" method="post" autocomplete="off">
                       <table class="table table-striped table-bordered">
                        <tr>
                          <td>Subject Code:<input type="text" class="form-control "  name="txtsubjectcode" placeholder="Subject Code"  required></td>
                          <td>Subject Name:<input type="text" class="form-control "  name="txtsubjectname" placeholder="Subject Name" pattern="[A-Za-z]*" title="Please enter Only characters..!!" required></td>
                        </tr>
                        <tr>
                          <td>Sem:<select class="form-control"  name="txtsem" width="10px">
                                        <option value="">Select Sem</option>
                                        <option value="I">I</option>
                                        <option value="II">II</option>
                                        <option value="III">III</option>
                                        <option value="IV">IV</option>
                                         <option value="V">V</option>
                                        <option value="VI">VI</option>
                                        </select></td>
                          <td>Edition:<select class="form-control" name="txtedition" width="10px">
                                        <option value="">Select Edition</option>
                                        <option value="New">New</option>
                                        <option value="Old">Old</option>
                                        </select></td>
                        </tr>
                        <tr>
                          <td colspan="2"><input type="submit" name="btnsubmit" value="Add Subject" class="btn btn-outline-primary"></td>
                          </form>
                        </tr>
                        <tr>
                          <td colspan="2"><?php include 'Includes/adddsuject.php';?></td>
                        </tr>
                       </table>
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
                                <h4 class="card-title">Subject Details</h4>
                                <div class="table-responsive">

                                  <table class="table table-striped table-bordered zero-configuration table-hover">
                         
                           <thead>
                                    <tr>
                                       <th>Id</th>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Sem</th>
                                         <th>Subject</th>
                                        <th>Edition</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                            <tbody>
                                      <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from subject where active='1' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="table-success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['code'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['sem'];?></td>
                                            <td><?php echo $row['subject'];?></td>
                                            <td><?php echo $row['edition'];?></td>
                                            <!--<td><a href="delsubject.php?varname=<?php echo $row['id'];?>">Delete</a></td>-->
                                             <td><button class="btn btn-info" onClick="window.location.href='updatesubject.php?varname=<?php echo $row['id'];?>';">Edit</button></td>
                                             <td><button class="btn btn-danger"  onClick="deleteme(<?php echo $row['id'];?>)">Delete</button></td>
                                             </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Do you want Delete!")){
                                             window.location.href='delsubject.php?varname=' +delid+'';
                                             return true;
                                             }
                                             } 
                                             </script>
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