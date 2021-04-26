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
           
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Admission Years</h4>
                                 <form action="addadmissionyrs.php" method="post" autocomplete="off">
                                  <table class="table table-striped">
                                    <tr>
                                      <td>Admission Years:<input type="text" name="txtadmissionyrs" class="form-control"></td>
                                    </tr>
                                    <tr>
                                      <td><input type="submit" name="btnsubmit" class="btn btn-primary" value="Add Admission Year"></td>
                                      </form>
                                    </tr>
                                    <tr>
                                        <td><?php include 'Includes/addadmissionyrs.php';?></td>
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
                                <h4 class="card-title">Admission Year Details</h4>
                                <div class="table-responsive">
                                   <table class="table table-striped table-bordered zero-configuration table-hover">
                         
                           <thead class="thead-light">
                                    <tr>
                                       <th>Id</th>
                                       <th>Admission Years</th>
                                       <th>Edit</th>
                                       
                                    </tr>
                                </thead>
                           <tbody>
                                    <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from admissionyrs ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                      $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            ?>
                                            <tr class="table-primary">
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $row['name'];?></td>
                                            
                                            <td><button class="btn btn-outline-danger"  onClick="deleteme(<?php echo $row['id'];?>)">Edit</button></td>
                                             </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Do you want Update..!")){
                                             window.location.href='updateadmissionyrs.php?varname=' +delid+'';
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