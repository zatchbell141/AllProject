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
                            <h1 class="page-header">Upload Videos</h1>
                        </div>
                        <div class=" col-lg-12">
                            <!--Table content-->
                            <form  action="uploadvideos.php" method="post"  enctype="multipart/form-data">
      <table class="table table-striped table-bordered">
        <tbody>
          <tr>
            <td colspan="2">File Name:<input type="text" class="form-control" name="txtdesp" required></td>
          </tr>
          <tr>
            <td>
            Please Upload Video:<input type="file" name="txtvideos" class="form-control" multiple="multiple"  accept=".pdf" />
          </td>
          <td>
            Please Upload Thumbnail:<input type="file" name="txtpic" class="form-control " multiple="multiple"  accept=".pdf" />
          </td>
        </tr>
          <tr>
          
       
          <td>You Are sending this file to this year:<select name="txtcatagy" class="form-control" id="ddl" onchange="configureDropDownLists(this,document.getElementById('ddl2'))">
              <option value="">Please Select Year</option>
               <option value="1">FYBCA</option>
                <option value="2">SYBCA</option>
                <option value="3">TYBCA</option>
                  
         </select></td>
         <td>
             Duration:<input type="text" name="txttime" class="form-control" placeholder="Duration">
         </td>
        </tr>
        <tr>
            <td>Lecture Date:<input type="date" name="txtdate" class="form-control" required></td>
          </tr>
        <tr>
          <td colspan="2"><input type="submit" name="import" class="button button1" value="Upload Video" /></td>
           </form>
         </tr>
         <tr colspan="2"><?php include 'Includes/addvideos.php';?></tr>
         </tbody>
         </table>


                        </div>





                        <div class="col-lg-12">
                            <!--Table details-->
                             <div class="panel panel-default">
                                <div class="panel-heading">
                                    Videos Details
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                            <table id="data-table-basic" class="table table-bordered  table-hover">
                                <thead>
                                    <tr>
                                         <th>Sr.No</th>
                                          <th>Name</th>
                                          <th>File</th>
                                          <th>Videos</th>
                                          <th>Years</th>
                                          <th>Duration</th>
                                          <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
             
                                    include 'VidConn.php';
                                    $sql="select * from videos ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        $no=0;
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            $catid=$row['catalogid'];
                                            $catsql="SELECT * FROM `catagy` where id='$catid'";
                                            $catresult=$con->query($catsql);
                                            $catrow=$catresult->fetch_assoc();
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $row['desp'];?></td>
                                             <td><img src="<?php echo $row['pic'];?>" width="200px" hieght="100px"></td>
                                             <td><video width="200px" hieght="100px" controls   controlsList="nodownload">
                                                  <source src="<?php echo $row['videos'];?>" type="video/mp4" >
                                                  <!-- <source src="videos/Laptopbuy.mp4" type="video/ogg"> -->
                                                 
                                                </video></td>
                                            <td><?php echo $catrow['name'];?></td>
                                           
                                             <td><?php echo $row['duration'];?></td>
                                            <td><?php
                                            $date=$row['uploaddate'];
                                            $date=strtotime($date);
                                            $date=date('d-m-Y',$date); 
                                            echo $date?></td>
                                            
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
