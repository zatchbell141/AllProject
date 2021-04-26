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
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Users</h4>
                                     <form action="adduser.php" method="post">
                              <table class="table table-striped table-bordered">
                                <tr>
                                  <td><input type="text" list="browsers"class="form-control" name="txtaddname" Placeholder="Name"></td>
                                   <datalist id="browsers">
                                          <?php
                                                    include 'Includes/Conn.php';
                                                     $query1="select fullname from studentdt";
                                                      $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                                     foreach($gradenameresult as $grd)
                                                     {
                                                     ?>
                                                     <option value="<?php echo $grd['fullname'];?>"><?php echo $grd['fullname']?></option>
                                                     <?php
                                                     }
                                                     ?>
                                        </datalist>
                                 
                                </tr>
                                <tr>
                                  <td><input type = "submit" class="btn btn-info"  value ="submit" name="txtsrchuser"></td>
                               </form>
                                </tr>
                             </table>
                              <?php
                             include 'Includes/Conn.php';
                              if(isset($_POST['txtsrchuser']))
                              {
                                
                                $name=$_POST['txtaddname'];
                                $sql="select * from studentdt where fullname='".$name."'";
                               $result=$con->query($sql);
                               $row=$result->fetch_assoc();
                                 
                                 $fname=$row['coursename'];
                                $fsql="select * from fees where name='".$fname."'";
                               $fresult=$con->query($fsql);
                               $frow=$fresult->fetch_assoc();
                              }
                    
                             ?>
                             <form action="adduser.php" method="post">
         <table class="table table-striped table-bordered">
          <tr>
              <input type="hidden"  name="txtsubjectid" value="<?php echo $row['studentid']?>" required>
               <input type="hidden"  name="txtstdprn" value="<?php echo $row['prn']?>" required>
              <td colspan="3">Fullname:<input type="text"class="form-control" name="txtaddfullname" value="<?php echo $row['fullname']?>"  readonly></td>
            </tr>
            <tr>
              <td>Firstname:<input type="text"class="form-control" name="txtaddname"  value="<?php echo $row['firstname']?>" readonly></td>
              <td>Lastname:<input type="text"class="form-control" name="txtaddlastname" value="<?php echo $row['lastname']?>" readonly></td>
              <td>Username<input type="text"class="form-control" name="txtaddusername" placeholder="Username"></td>
          </tr>
          <tr>
             <td>Year:<input type="text"class="form-control" name="txtaddyear" value="<?php echo $frow['year']?>" readonly></td>
              <td>Sem:<input type="text"class="form-control" name="txtaddsem" value="<?php echo $frow['sem']?>" readonly></td>
              
              <td>Password:<input type="text"class="form-control" name="txtaddpasswd" value="passwd" Placeholder="Name" readonly></td>
          </tr>
          <tr>
            <td colspan="3"><input type="submit" class="btn btn-primary" name="btnsubmit" value="Add Users"></td>
            </form>
          </tr>
           <tr>
            <td colspan="3"><?php include 'Includes/addruser.php';?></td>
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
                                <h4 class="card-title">Users Details</h4>
                                <div class="table-responsive">
                                    
                            <table class="table table-striped table-bordered zero-configuration table-hover">
                                <thead>
                                    <tr>
                                        <th>Fullname</th>
                                         <th>Name</th>
                                         <th>Lastname</th>
                                         <th>PRN</th>
                                         <th>Year</th>
                                         <th>Sem</th>
                                         <th>Reference Code</th>
                                         <th>Username</th>
                                         <th>Password</th>
                                         <th>Edit</th>
                                         <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    include 'Includes/Conn.php';
                                    include 'Includes/pass.php';
                                    $sql="select * from studreg where active=1 ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="table-success">
                                            
                                            <td><?php echo $row['fullname'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['lname'];?></td>
                                            <td><?php echo $row['PRN'];?></td>
                                            <td><?php echo $row['year'];?></td>
                                            <td><?php echo $row['sem'];?></td>
                                             <td><?php echo $row['recfno'];?></td>
                                            <td><?php echo $row['username'];?></td>
                                            <td><?php echo decrypt($row['passwd'],$key);?></td>
                                            
                                             
                                            <!--<td><a href="othersfees.php?varname=<?php echo $row['id'];?>">Other Print</a></td>-->
                                             <td><button class="btn btn-info notika-btn-info" onClick="window.location.href='editcolgfees.php?varname=<?php echo $row['id'];?>';">Edit</button></td>
                                            <!--<td><a href="editcolgfees.php?varname=<?php //echo $row['id'];?>">Edit</a></td>-->
                                            <!--<td><a href="printfees.php?varname=<?php //echo $row['id'];?>">Print</a></td>-->
                                             
                                            <!--<td><a href="colgdel.php?varname=<?php //echo $row['id'];?>">Delete</a></td>-->
                                            <td><button class="btn btn-danger notika-btn-danger" onClick="deleteme(<?php echo $row['id']; ?>)">Delete</button></td>
                                             </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Are You Sure you want to delete:"+" "+delid)){
                                             window.location.href='delusers.php?varname=' +delid+'';
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