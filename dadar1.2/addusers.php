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
                            <h1 class="page-header">Add Users</h1>
                        </div>
                        <div class="col-lg-12">
                              <form action="addusers.php" method="post">
          <table class="table table-striped table-bordered">
            <tr>
              <td>Student Name:<input type="text" list="browsers"class="form-control" name="txtaddname" Placeholder="Name"></div></td>
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
              <td><input type = "submit" class="btn btn-primary"  value ="submit" name="txtsrchuser"></td>
           
            </tr>
         </table>
          </form>    


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

        <form id="addform" action="addusers.php" method="post">
         <table class="table table-sc-ex table-bordered">
          <tr>
              <input type="hidden"  name="txtsubjectid" value="<?php echo $row['studentid']?>" required>
               <input type="hidden"  name="txtstdprn" value="<?php echo $row['prn']?>" required>
              <td colspan="3">Fullname:<input type="text"class="form-control" name="txtaddfullname" value="<?php echo $row['fullname']?>"  readonly></div></td>
            </tr>
            <tr>
              <td>Firstname:<input type="text"class="form-control" name="txtaddname"  value="<?php echo $row['firstname']?>" readonly></div></td>
              <td>Lastname<input type="text"class="form-control" name="txtaddlastname" value="<?php echo $row['lastname']?>" readonly></div></td>
              <td>Username:<input type="text"class="form-control" name="txtaddusername" placeholder="Username" required></div></td>
          </tr>
          <tr>
             <td>Year:<input type="text"class="form-control" name="txtaddyear" value="<?php echo $frow['year']?>" readonly></div></td>
              <td>Sem:<input type="text"class="form-control" name="txtaddsem" value="<?php echo $frow['sem']?>" readonly></div></td>
              
              <td>Password:<input type="text"class="form-control" name="txtaddpasswd" value="bca@2020" Placeholder="Name" readonly></div></td>
          </tr>
          <tr>
            <td colspan="3"><input type="submit" name="btnaddusers" value="Add Users" class="btn btn-primary"></td>
            </form>
          </tr>
           <tr>
            <td colspan="3"><?php include 'Includes/addusers.php';?></td>
          </tr>
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
                                                            <th>Sr.No</th>
                                                            <th>Fullname</th>
                                                             <th>Name</th>
                                                             <th>Lastname</th>
                                                             <th>PRN</th>
                                                             <th>Year</th>
                                                             <th>Sem</th>
                                                             <th>Reference Code</th>
                                                             <th>Username</th>
                                                             <th>Edit</th>
                                                             <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php
                                                        include 'Includes/Conn.php';
                                                        $sql="select * from studreg where active=1 ORDER BY id DESC";
                                                        $result=$con->query($sql);
                                                        if($result->num_rows>0)
                                                        {
                                                            $no=0;
                                                            while($row=$result->fetch_assoc())
                                                            {
                                                                $no++;
                                                                ?>
                                                                <tr class="success">
                                                                <td><?php echo $no;?></td>
                                                                <td><?php echo $row['fullname'];?></td>
                                                                <td><?php echo $row['name'];?></td>
                                                                <td><?php echo $row['lname'];?></td>
                                                                <td><?php echo $row['PRN'];?></td>
                                                                <td><?php echo $row['year'];?></td>
                                                                <td><?php echo $row['sem'];?></td>
                                                                 <td><?php echo $row['recfno'];?></td>
                                                                <td><?php echo $row['username'];?></td>
                                                                
                                                                 <td><button class="btn btn-info" onClick="window.location.href='useredite.php?varname=<?php echo $row['id'];?>';">Edit</button></td>
                                                               
                                                                <td><button class="btn btn-danger" onClick="deleteme(<?php echo $row['id']; ?>)">Delete</button></td>
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
