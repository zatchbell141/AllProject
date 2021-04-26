<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'Includes/header.php';?>
        <style>
 .box
  {
       width: 1002px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
  margin-top: 17px;
  height: 1000px;
  }
  .ex4 {
    background-color: white;
     width: 100%;

    height: 223px;

    overflow: auto;
}

</style>
    </head>
    <body>

        <div id="wrapper">
 		<?php include 'Includes/menu.php';?>
           
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Backlog Receipt</h1>
                        </div>
                        <div class="col-lg-12">
                            <form action="backlogreceipt.php" method="post" autocomplete="off">
                            <table class="table table-striped table-bordered">
                                <tr>
                                     <td>Fullname:<input type="text" list="browsers" name="txtstudent" class="form-control"></td>
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
                                    <td><input type="submit" name="btnsubmit" value="Search" class="btn btn-info"></td>
                                </tr>
                            </table>
                        </div>
                        <?php
                            if(isset($_POST['btnsubmit']))
                            {
                                $name=$_POST['txtstudent'];
                                $sql="select * from studentdt where fullname='$name'";
                                $result=$con->query($sql);
                                $row=$result->fetch_assoc();
                            }
                        ?>
                        <div class="col-lg-12">
                             <input type="hidden" name="txtstudentid" value="<?php echo $row['studentid']?>">
                              <table class="table table-striped table-bordered">
                                <tr>
                                <td>Date:<input type="text" class="form-control" name="txtdate" value="<?php echo date('Y-m-d')?>" readonly></td>
                                <td>PRN:<input type="text" name="txtprn" class="form-control"  value="<?php echo $row['prn']?>" readonly></td>
                                <td>FullName:<input type="text" class="form-control" name="txtfullname" value="<?php echo $row['fullname']?>" readonly></td>
                                <td>Seat No:<input type="text" class="form-control" name="txtseat" ></td>
                                </tr>
                                 <td>
                                    Exam Mode:
                                    <select name="type" class="form-control">
                                <option value="Internal">Internal</option>
                                <option value="External">External</option>
                                <option value="Pratical">Pratical</option>
                                <option value="BOT">Both INT & EXT</option>
                            </select>
                                  </td>
                                   <td>Mode:<select name="paytype"  class="form-control">
                                <option value="Regular">Regular</option>
                                <option value="Late">Late</option>
                            </select>
                            </td>
                               <td colspan="2">
                                   Exam Year:<select name="txtexamyrs" class="form-control">
                                                            <option value="">Select Exam Year </option>
                                                             <?php
                                                            include 'Includes/Conn.php';
                                                             $query1="select * from examyear";
                                                              $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                                             foreach($gradenameresult as $grd)
                                                             {
                                                             ?>
                                                             <option value="<?php echo $grd['name'];?>"><?php echo $grd['name']?></option>
                                                             <?php
                                                             }
                                                             ?>
                                                        </select>
                               </td>        
                                     
                                    </tr>
                                 </tr>  
                                 
                                    </table>
                                    <div class="ex4">
                                     <?php
                        
                                                            
                                                            $sql="select * from subject where active='1'";
                                                            $result=$con->query($sql);
                                                            if($result->num_rows>0)
                                                            {
                                                                while($row=$result->fetch_assoc())
                                                                {                              
                        
                            ?>
                            
                                
                         <input type="checkbox" class="i-checks" name="check_list[]" value="<?php echo $row['id'];?>"><i></i><?php echo $row['subject'];?><br>
                          
                        <?php
                        
                        }
                        }
                        ?>
                        
                        </div>
                            </table>
                            <table class="table table-bordered  table-hover">
                          <tr>
                              <td><input type="submit" class="btn btn-primary" name="btnsub" value="Submit">

                          </tr>
                          <tr>
                            <td><?php include 'Includes/addbacklogsubject.php';?></td>
                          </tr>
                        </table>
                        </div>



                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Backlog Details
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                             <tr>
                                                <th>Sr.No</th>
                                                <th>PRN</th>
                                                <th>Seat No</th>
                                                <th>Fullname</th>
                                                <th>Backlog</th>
                                                <th>Subject</th>
                                                <th>External</th>
                                                <th>Internal</th>
                                                <th>Pratical</th>
                                                <th>Pay</th>
                                                <th>Print Receipt</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                   <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from backlog ORDER BY id desc";
                                    $result=$con->query($sql);
                                    $no=0;
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            $no++;
                                            ?>
                                            <tr class="success">
                                                <td><?php echo $no?></td>
                                                <td><?php echo $row['prn']?></td>
                                                <td><?php echo $row['seat']?></td>
                                                <td><?php echo $row['fullname']?></td>
                                              
                                                <td><?php echo $row['subcode']?></td>
                                                <td><?php echo $row['subname']?></td>
                                                <td><?php echo $row['exter']?></td>
                                                <td><?php echo $row['inter']?></td>
                                                <td><?php echo $row['pract']?></td>
                                                <td><a href='backlogfees.php?varname=<?php echo $row['fullname']?>&prnno=<?php echo $row['prn']?>&seat=<?php echo $row['seat']?>&sid=<?php echo $row['studentid']?>&date=<?php echo $row['date']?>&examyrs=<?php echo $row['examyrs']?>' class="btn btn-primary">Pay</a></td>
                                                <td><a href='backlogreceiptprint.php?varname=<?php echo $row['studentid']?>&seat=<?php echo $row['seat']?>' class="btn btn-info">Print</a></td>
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
