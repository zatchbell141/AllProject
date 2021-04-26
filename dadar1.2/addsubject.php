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
                            <h1 class="page-header">Add Subject</h1>
                        </div>
                        <div class="col-lg-12">
                             <form action="addsubject.php" method="post">
                               <table class="table table-striped">
                                <tr>
                                  <td>Subject Code:<input type="text" class="form-control"  name="txtsubjectcode" placeholder="Subject Code" required></div></td>
                                  <td>Subject Name:<input type="text" class="form-control"  name="txtsubjectname" placeholder="Subject Name" required></div></td>
                                </tr>
                                <tr>
                                  <td>Sem:<select class="form-control" class="form-control" name="txtsem" width="10px">
                                                <option value="">Select Sem</option>
                                                <option value="I">I</option>
                                                <option value="II">II</option>
                                                <option value="III">III</option>
                                                <option value="IV">IV</option>
                                                 <option value="V">V</option>
                                                <option value="VI">VI</option>
                                                </select></td>
                                  <td>Edition:<select class="form-control" class="form-control" name="txtedition" width="10px">
                                                <option value="">Select Edition</option>
                                                <option value="New">New</option>
                                                <option value="Old">Old</option>
                                                </select></td>
                                </tr>
                                <tr>
                                  <td colspan="2"><input type="submit" name="btnsubmitsub" class="btn btn-primary"  value="Add Subject"></td>
                                </tr>
                                <tr>
                                  <td colspan="2"><?php include 'Includes/adddsubject.php'; ?></td>
                                </tr>
                               </table>
                        </div>

                        <div class="col-lg-12">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                    Subject Details
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                             
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
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['code'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['sem'];?></td>
                                            <td><?php echo $row['subject'];?></td>
                                            <td><?php echo $row['edition'];?></td>
                                            <!--<td><a href="delsubject.php?varname=<?php echo $row['id'];?>">Delete</a></td>-->
                                             <td><button class="btn btn-info notika-btn-info" onClick="window.location.href='updatesubject.php?varname=<?php echo $row['id'];?>';">Edit</button></td>
                                             <td><button class="btn btn-warning notika-btn-warning"  onClick="deleteme(<?php echo $row['id'];?>)">Delete</button></td>
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
