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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Staff Attendence</a></li>
                    </ol>
                </div>
            </div>
         
        <!-- Container Fluid-->
          <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Staff Attendence</h4>
                   <form  action="staffattendence.php" method="post" autocomplete="off">
            <table class="table table-striped table-bordered">
               <td><input type="text" name="txtdname" class="form-control" list="browsers" placeholder="Name" required></td>
                <datalist id="browsers">
                      <?php
                                include 'Includes/Conn.php';
                                 $query1="select name,lastname from staff";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['name']?>"><?php echo $grd['name']." ".$grd['lastname']?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist>
             </tr>
             <tr>
              <td><input type = "submit" class="btn btn-info"  value ="submit" name="staffdet"></td>
                </form>
             </tr>
           </table>
            <?php
                                   if(isset($_POST['staffdet']))
                                   {
                                    
                                    $ts=$_POST['txtdname'];
                                    $tssql="select * from staff where name='$ts'";
                                    $tsresult=$con->query($tssql);
                                    $tsrow=$tsresult->fetch_assoc();
                                    
                                     /*$subjectnam=$tsrow['subject'];
                                    $tsisql="select id from subject where subject='$subjectnam' and active='1' ORDER BY id DESC";
                                    $tsiresult=$con->query($tsisql);
                                    $tsirow=$tsiresult->fetch_assoc();
                                    
                                        $nm=explode(" ",$ts);
                                        //echo $nm[0];
                                     $ctssql="select * from staff where name like '%$nm[0]%' and active='1' ORDER BY id DESC";
                                    $ctsresult=$con->query($ctssql);
                                    $ctsrow=$ctsresult->fetch_assoc();*/
                                   }

                                   ?>
                                    <form  action="staffattendence.php" method="post" autocomplete="off">
                                    <table class="table table-sc-ex table-bordered">
                <tr>
              <td colspan="4"><input type="hidden"class="form-control" name="txtstaffid" value="<?php echo $tsrow['id'];?>" placeholder="Name" required></td>
              
            </tr>
            <tr>
              <td colspan="4"><input type="hidden"class="form-control" name="txtphno" value="<?php echo $tsrow['contact'];?>" placeholder="Name" required></td>
            </tr>
            <tr>
              <td colspan="4">Name:<input type="text"class="form-control" name="txtdname" value="<?php echo $tsrow['name']." ".$tsrow['lastname']?>" placeholder="Name" required></td>
            </tr>
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
                    </datalist>
                </td>
              </td>
           
               <td>Topic:<input type="text" name="txttropic"class="form-control" placeholder="Topic:" required></td>
            
              <td>Date:<input type="text"class="form-control" name="txtdate" value="<?php 
                 
                $to=date('Y-m-d');
              
              echo $to?>" required></td>
              <td>Year:<select name="year"class="form-control">
                  <option name="FYBCA">FYBCA</option>
                  <option name="SYBCA">SYBCA</option>
                  <option name="TYBCA">TYBCA</option>
                </select></td>
             </tr>
              <tr>
                 <td colspan="2">Start Lecture Time:<select name="starttime"class="form-control">
                  <option name="2:00">2:00</option>
                  <option name="3:00">3:00</option>
                  <option name="4:00">4:00</option>
                </select></td>
              </td>
              <td colspan="2">End Lecture Time:<select name="starttime"class="form-control">
                  <option name="5:00">5:00</option>
                  <option name="4:00">4:00</option>
                  <option name="3:00">3:00</option>
                </select></td>
            
              </td>

              </tr>
              <tr>
                <td colspan="5"><input type="submit" class="btn btn-primary" value="Save" name="btnsubmit"></td>
              </tr>
               <tr>
        <td colspan="5"><?php include "Includes/addattend.php"?></td>
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
                                <h4 class="card-title">Staff Attendence Details</h4>
                                <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration table-hover">
                         
                           <thead>
                                    <tr>
                                        <th>Id</th>
                                         <th>Staff Id</th>
                                        <th>Name</th>
                                        <th>Tropic</th>
                                        <th>Subject</th>
                                        <th>Class</th>
                                        <th>Start Lecture Time</th>
                                        <th>End Lecture Time</th>
                                        <th>Duration</th>
                                        <th>Date</th>
                                        <th>Salary</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                          <tbody>
                                    <?php
                                    include 'Includes/Conn.php';
                                    $sql="select * from salary where active='1' order by sessiondate desc";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="table-success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['staffid'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['topic'];?></td>
                                            <td><?php 
                                            
                                            
                                            $sub=$row['subjectId'];
                                            $tsisql="select * from subject where id='$sub' and active='1' ORDER BY id DESC";
                                            $tsiresult=$con->query($tsisql);
                                            $tsirow=$tsiresult->fetch_assoc();
                                            echo $tsirow['name'];
                                            
                                            
                                            ?></td>
                                            <td><?php echo $row['class'];?></td>
                                            <td><?php echo $row['starttime'];?></td>
                                            <td><?php echo $row['endtime'];?></td>
                                            <td><?php echo $row['duration'];?></td>
                                            <td>
                                            <?php $date= $row['sessiondate'];
                                                    $date=strtotime($date);
                                                    $date=date('d-m-Y',$date); 
                                                    echo $date;
                                                   ?></td>
                                            <td><?php echo $row['sal'];?></td>
                                             <td><button class="btn btn-info" onClick="window.location.href='updatesaldetails.php?varname=<?php echo $row['id'];?>';">Edit</button></td>
                                             <!--<td><a href="delattend.php?varname=<?php //echo $row['id'];?>">Delete</a></td>-->
                                            <td><button class="btn btn-danger" onClick="deleteme(<?php echo $row['id']; ?>)">Delete</button></td>
                                             </tr>
                                             <!-- Javascript function for deleting data -->
                                             <script language="javascript">
                                             function deleteme(delid)
                                             {
                                             if(confirm("Are You Sure you want to delete.!!")){
                                             window.location.href='delattend.php?varname=' +delid+'';
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