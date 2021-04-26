<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'Includes/header.php';?>
    </head>
    <body>

        <div id="wrapper">
 		<?php include 'Includes/menu.php';?>
           
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Add Staff</h1>
                        </div>

                        <div class="col-lg-12">

                             <form action="addstaff.php" method="post" autocomplete="off">
               <table class="table table-striped table-bordered">
                                <tbody>
                                   <tr>
                                    <td colspan="5">Prefix:
                        <select class="form-control" name="prefix"class="form-control" width="10px">
                                <option value="">Select Prefix</option>
                                <option value="Sir">Sir</option>
                                <option value="Madam">Madam</option>
                                </select>
                    </tr>
                                    <tr>
                   
                    <td colspan="2">Name:<input type="text" class="form-control" name="txtname" placeholder="Name" required></div></td>
                    <td colspan="2">Lastname:<input type="text"class="form-control" name="txtlastname" placeholder="Lastname" required></div></td>
                  
                    <td>Username:<input type="text"class="form-control" name="txtusername" placeholder="Username" required></div></td>
                    </tr>
                  <tr>
                    <td colspan="2">Password:<input type="password"class="form-control"  name="txtpasswd" placeholder="Password" required></div></td>
                  
                    <td colspan="2">Email:
                         <input type="text" class="form-control"name="txtemail" placeholder="Email" required></div>
                    </td>
                   <td colspan="3">Contact No:<input type="text" class="form-control" name="txtcontact" placeholder="Contact" required></div></td>        
                    </tr>

                    <tr>
                      <td colspan="5">Mode:
                        <select class="form-control"  name="mode" width="10px">
                                <option value="">Select Mode</option>
                                <option value="Full time">Full Time</option>
                                <option value="Half Day">Half Day</option>
                                </select>

                      </td>
                    </tr>
                    <tr>
                      <td colspan="5"><input type="submit" name="btnsubmit" class="btn btn-primary" value="Add Staff"></td>
                    </form>
                    </tr>
                    <tr>
                      <td colspan="5"><?php include 'Includes/addstaff.php';?></td>
                    </tr>
                   </tbody>
                </table>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Users Details
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                               <thead>
                                    <tr>
                                          <th>Id</th>
                                          <th>Name</th>
                                          <th>Lastname</th>
                                          <th>Username</th>
                                          <!-- <th>Password</th> -->
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
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['lastname'];?></td>
                                            <td><?php echo $row['username'];?></td>
                                            <!-- <td><?php echo $row['passwd'];?></td> -->
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['contact'];?></td>
                                            <td><?php echo $row['type'];?></td>
                                            <!--<td><a href="delstaff.php?varname=<?php //echo $row['id'];?>">Delete</a></td>-->
                                               <td><button class="btn btn-warning notika-btn-warning"  onClick="deleteme(<?php echo $row['id'];?>)">Delete</button></td>
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

                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

       <?php include 'Includes/footor.php';?>
    </body>
</html>
