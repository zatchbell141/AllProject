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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Staff</a></li>
                    </ol>
                </div>
            </div>
         
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Staff</h4>
                                  <form id="addform" action="adddstaff.php" method="post" autocomplete="off">
               <table class="table table-sc-ex table-bordered">
                                <tbody>
                                   <tr>
                                    <td colspan="5">Prefix:
                        <select class="form-control" name="prefix"class="form-control " width="10px" required>
                                <option value="">Select Prefix</option>
                                <option value="Sir">Sir</option>
                                <option value="Madam">Madam</option>
                                </select>
                    </tr>
                                    <tr>
                   
                    <td colspan="2">Name:<input type="text" class="form-control " name="txtname" placeholder="Name" required pattern="[A-Za-z]*" title="Please Enter Only Characters..!"></td>
                    <td colspan="2">Lastname:<input type="text"class="form-control " name="txtlastname" placeholder="Lastname" required pattern="[A-Za-z]*" title="Please Enter Only Characters..!"></td>
                  
                    <td>Username:<input type="text"class="form-control " name="txtusername" placeholder="Username" required></td>
                    </tr>
                  <tr>
                    <td colspan="2">Password:<input type="password"class="form-control "  name="txtpasswd" placeholder="Password" required></td>
                  
                    <td colspan="2">
                         Email:<input type="text" class="form-control "name="txtemail" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter valid Email" required>
                    </td>
                   <td colspan="3">Contact:<input type="text" class="form-control " name="txtcontact" pattern="[789][0-9]{9}" title="Please Enter 10 digit..!" placeholder="Contact" required></td>        
                    </tr>
                    <tr>
                      <td colspan="5">
                       Mode:<select class="form-control "  name="mode" width="10px" required>
                                <option value="">Select Mode</option>
                                <option value="Full time">Full Time</option>
                                <option value="Half Day">Half Day</option>
                                </select>

                      </td>
                    </tr>
                    <tr>
                      <td colspan="5"><input type="submit" name="btnsubmit" class="btn btn-outline-primary" value="Add Staff"></td>
                    </form>
                    </tr>
                    <tr>
                      <td colspan="5"><?php include 'Includes/adddstaff.php';?></td>
                    </tr>
                   </tbody>
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
                                <h4 class="card-title">Staff Details</h4>
                                <div class="table-responsive">

                                  <table class="table table-striped table-bordered zero-configuration table-hover">
                         
                           <thead class="thead-light">
                                    <tr>
                                       <th>Id</th>
                                          <th>Name</th>
                                          <th>Lastname</th>
                                          <th>Username</th>
                                          <th>Password</th>
                                          <th>Email</th>
                                          <th>Contact</th>
                                          <th>Mode</th>
                                          <th>Delete</th>
                                    </tr>
                                </thead>
                           <tbody>
                                    <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from staff where active='1' ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="table-success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['lastname'];?></td>
                                            <td><?php echo $row['username'];?></td>
                                            <td><?php echo $row['passwd'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['contact'];?></td>
                                            <td><?php echo $row['type'];?></td>
                                            <!--<td><a href="delstaff.php?varname=<?php //echo $row['id'];?>">Delete</a></td>-->
                                               <td><button class="btn btn-danger "  onClick="deleteme(<?php echo $row['id'];?>)">Delete</button></td>
                                             </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Do you want Delete!")){
                                             window.location.href='delstaff.php?varname=' +delid+'';
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