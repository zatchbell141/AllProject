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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Syllabus</a></li>
                    </ol>
                </div>
            </div>
         
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Syllabus</h4>
                                <form action="addsyllabus.php" method="Post">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <td>Subject:<input type="text" list="subject"class="form-control" name="txtsubject" placeholder="Subject"  required>
                                             <datalist id="subject">
                                              <?php
                                                        include 'Includes/Conn.php';
                                                         $query1="select * from subject where active=1";
                                                          $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                                         foreach($gradenameresult as $grd)
                                                         {
                                                         ?>
                                                         <option value="<?php echo $grd['id'];?>"><?php echo $grd['subject']?></option>
                                                         <?php
                                                         }
                                                         ?>
                                            </datalist></td>
                                       
                                            <td>Syllabus:<input type="text" name="txtsyllabus" class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><input type="submit" name="btnsubmit" value="Add Syllabus" class="btn btn-outline-primary"></td>
                                            </form>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><?php include 'Includes/addsyllabus.php';?></td>
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
                                <h4 class="card-title">Syllabus Details</h4>
                                <div class="table-responsive">

                                  <table class="table table-striped table-bordered zero-configuration table-hover">
                         
                           <thead class="thead-light">
                                    <tr>
                                          <th>Id</th>
                                          <th>Name</th>
                                          <th>Edit</th>
                                    </tr>
                                </thead>
                           <tbody>
                                    <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from syllabus  ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="table-success">
                                            <td><?php echo $row['subjectid'];?></td>
                                            <td><?php echo $row['syllabus'];?></td>
                                            <!--<td><a href="delstaff.php?varname=<?php //echo $row['id'];?>">Delete</a></td>-->
                                               <td><button class="btn btn-outline-warning "  onClick="deleteme(<?php echo $row['id'];?>)">Edit</button></td>
                                             </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Do you want Delete!")){
                                             window.location.href='editsyllabus.php?varname=' +delid+'';
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