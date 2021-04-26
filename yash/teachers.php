 <?php
 include "session.php";
include "Conn.php";
$msg=0;

                    if(isset($_POST['submit']))
                {
                     $name=$_POST['txttname'];
                     $lastname=$_POST['txtlname'];
                     $gender=$_POST['txtcont'];
                     $contact=$_POST['txtcontact'];
                     
                    $query="insert into techer(name,lastname,gender,contact) values('$name','$lastname','$gender','$contact')";
                    mysqli_query($con,$query); 
                    $msg=1;

                }
                else{
                    $msg=0;   
                }
                mysqli_close($con); 


 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>YashInfo Tech</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
<div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;Yash&nbsp;InfoTech</a>
                </div>
                <!--<div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                       
                        <li><a href="index3.php">Logout</a></li>
                    </ul>
                </div>-->
                
            </div>
            
        </div>
 <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="assets/img/find_user.png" class="img-responsive" />
                     
                    </li>


                     <li>
                        <a href="index.php"><i class="fa fa-desktop "></i>Dashboard</a>
                        <a href="Addadmin.php"><i class="fa fa-user "></i>Add Admin</a>
                        <a href="teachers.php"><i class="fa fa-user"></i>Teachers</a>
                        <a href="activeusers.php"><i class="fa fa-table "></i>Active Users</a>
                        <a href="importdata.php"><i class="fa fa-qrcode"></i>Import Data</a>
                        
                    </li>
                    
                      <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Bills<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="receipt.php">Receipt</a>
                            </li>
                           
                            <li>
                                <a href="#">Reports<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="reports.php">Receipt Reports</a>
                                    </li>
                                    <li>
                                        <a href="feedbackdisplay.php">Feedback</a>
                                    </li>
                                    <!--<li>
                                        <a href="#">Third Level Link</a>
                                    </li>-->

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                     <a href="assignment.php"><i class="fa fa-edit "></i>Assignment</a>
                    </li>
                     <li>
                     <a href="examtimetable.php"><i class="fa fa-edit "></i>Exam Time Table</a>
                    </li>
                    <li>
                     <a href="syllabus.php"><i class="fa fa-edit "></i>Syllabus</a>
                    </li>
                    <li>
                     <a href="courses.php"><i class="fa fa-edit "></i>Course Structure</a>
                    </li>
                   <li>
                     <a href="ebook.php"><i class="fa fa-edit "></i>E-Books</a>
                    </li>
                     <li>
                     <a href="studentq.php"><i class="fa fa-edit "></i>Student Query</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-edit "></i>Logout</a>
                    </li>
                   <!-- <li>
                        <a href="#"><i class="fa fa-edit "></i>UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Notifications</a>
                            </li>
                            <li>
                                <a href="#">Elements</a>
                            </li>
                            <li>
                                <a href="#">Free Link</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-table "></i>Table Examples</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Forms </a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-qrcode "></i>Tabs & Panels</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>Mettis Charts</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Last Link </a>
                    </li>
                    <li>
                        <a href="blank.html"><i class="fa fa-table "></i>Blank Page</a>
                    </li>-->
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo $_SESSION['login_user']?> </h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                 
            <hr />

            <h5>Teachers</h5>
                        <ul class="nav nav-tabs">
                             <li class="active"><a href="#faculty" data-toggle="tab">Faculty</a>
                            </li>
                             <li class=""><a href="#freport" data-toggle="tab">Faculty Reports</a>
                            </li>
                            <li ><a href="#home" data-toggle="tab">Add Teacher</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">Update Teacher</a>
                            </li>
                            <li class=""><a href="#messages" data-toggle="tab">Delete</a>
                            </li>
                           
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="freport">
                                <h3 align="center">Faculty Reports</h3>
                                  <form action="teachers.php" method="post">
                                <table class="table">
                                    <tr>
                                         <td colspan="4">Name:<input class="form-control" list="browsers" name="txttechname">
                    <datalist id="browsers">
                      <?php
                                include 'Conn.php';
                                 $query1="select name from techer";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['name'];?>"><?php echo $grd['name']?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist>
                                    </tr>
                                    <tr>
                                    <td><input type = "submit" class="btn btn-danger"  value ="Monthly" name="sal"></td>
                                    </tr>
                              </form>
                               <?php
                                   if(isset($_POST['sal']))
                                   {
                                    

                                     $ts=$_POST['txttechname'];
                                    $tssql="SELECT SUM(hrs) As Hours , subject, SUM(sal) As Monthly, name FROM salary WHERE name='$ts'";
                                    $tsresult=$con->query($tssql);
                                    $tsrow=$tsresult->fetch_assoc();
                                    
                                   }

                                   ?> 
                                    <form action="teachers.php" method="post">
                                    <tr>
                                        <td>Name:<input type="text" class="form-control" name="txtename" value="<?php echo $tsrow['name'];?>" readonly></td>
                                        <td>Hours:<input type="text" class="form-control" name="txtehrs" value="<?php echo $tsrow['Hours'];?>" readonly></td>
                                        <td>Subjects:<input type="text" class="form-control" name="txtesubject" value="<?php echo $tsrow['subject'];?>" readonly></td>
                                        <td>Monthly Remuneration:<input type="text" class="form-control" name="txtnmonth" value="<?php echo $tsrow['Monthly'];?>" readonly></td>
                                    </tr>
                                    <tr>
                                        <td><input type = "submit" class="btn btn-danger"  value ="For Excel Sheet" name="mon"></td>
                                    </form>
                                    <tr>
                                        <td colspan="4">
                                    <?php
                                         include 'Conn.php';
                $msg=0;
                    if(isset($_POST['mon']))
                {
                     $techname=$_POST['txtename'];
                     $hrs=$_POST['txtehrs'];
                     $esubject=$_POST['txtesubject'];
                   
                     $monthly=$_POST['txtnmonth'];
                     
                    $query="insert into salm(name,subject,hrs,monthly) values('$techname','$esubject','$hrs','$monthly')";
                    mysqli_query($con,$query); 
                   echo "Sucessfully inserted..!!!";
                }
                else{

                    $msg=0;   
                }



                                    ?>
                                    <td>
                                    </tr>
                                </table>
                                <hr>
                                 <form action="teachersdata.php" method="post">
                                Export to Excel:<input type = "submit" class="btn btn-danger"  value ="Export" name="export">
                            </form>
                                <hr>
                                 <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                       
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Hours</th>
                                        <th>Monthly</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include 'Conn.php';
                                    $sql="select * from salm ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                           
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['subject'];?></td>
                                            <td><?php echo $row['hrs'];?></td>
                                            <td><?php echo $row['monthly'];?></td>
                                            
                                            <!--<td><a href="Table.php?varname=<?php echo $row['id'];?>">Print</a></td>-->
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>      
                                    
                                                                 
                                </tbody>
                            </table>
                        </div>
                            </div>
                            <div class="tab-pane fade " id="home">
                                <div class="row">
                   <div class="table-responsive">
                <form action="teachers.php" method="post">
                    <br>

                <table class="table">
                                <tbody>
                                    <tr>
                  
                    <td>Name:<input type="text" class="form-control" name="txttname"  required></td>
                    <td>Last Name :<input type="text" class="form-control" name="txtlname"  required></td>
                     <td>Contact Number :<input type="text" class="form-control" name="txtlname"  required></td>
                    <td>Email:<input type="text" class="form-control" name="txtcont" required></td>
                  </tr>
                 
                    <tr>
                        <td colspan="5"><input type = "submit" class="btn btn-danger"  value ="submit" name="submit"></td>
                    </tr>
                   </tbody>
                </table>
                 <?php
                        if($msg==1)
                        {
                            echo "Added Into database..!!";
                        }
                        else
                        {
                            echo "Fail to add..!";
                        }
                     ?>
                     
                </form>
              </div>
              <div>
                 <form action="teacher.php" method="post">
                    <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                       
                                        <th>Name</th>
                                        <th>Last Name</th>
                                        <th>Contact Number</th>
                                        <th>Email</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include 'Conn.php';
                                    $sql="select * from techer ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                           
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['lastname'];?></td>
                                            <td><?php echo $row['gender'];?></td>
                                            <td><?php echo $row['contact'];?></td>
                                            
                                            <!--<td><a href="Table.php?varname=<?php echo $row['id'];?>">Print</a></td>-->
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>      
                                    
                                                                 
                                </tbody>
                            </table>
                      </form>
                        
                </div>
                            </div>
                        </div>
                    </div>
                            <div class="tab-pane fade" id="profile">
                                <br>
                             <form action="teachers.php" method="post">
                           
                             <div class="row">
                   <div class="table-responsive">
                <form action="teachers.php" method="post">
                    <br>
                     <h5>&nbsp;&nbsp;Daily Time Table</h5>
                    
                <table class="table">
                                <tbody>
                                    <tr>
                            <td colspan="5">Teacher Name:<select class="form-control" name="techers"  width="10px">
                                <?php
                                include 'Conn.php';
                                $sql="select name from techer";
                                 $result=$con->query($sql);
                                 if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            echo '<option value="'.$row["name"].'">'.$row["name"].'</option>';
                                            
                                            }
                                        }


                                ?>
                                </select>
                  </tr>          </td>
                  <tr>
                    <td>Time:<input type="text" class="form-control" name="txttime" value="<?php echo $row['time'];?>" requried></td>
                    <td>Subject :<input type="text" class="form-control" name="txtssubject" requried></td>
                     <td>Year:<select class="form-control" name="years"  width="10px">
                                <?php
                                include 'Conn.php';
                                $sql="select DISTINCT year from studentdt";
                                 $result=$con->query($sql);
                                 if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            echo '<option value="'.$row["year"].'">'.$row["year"].'</option>';
                                            
                                            
                                        }
                                    }


                                ?>
                                </select>
                     </td>
                    <td>Sem:<select class="form-control" name="ssem"  width="10px">
                                <?php
                                include 'Conn.php';
                                $sql="select *  from sem";
                                 $result=$con->query($sql);
                                 if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            echo '<option value="'.$row["name"].'">'.$row["name"].'</option>';
                                            
                                            
                                        }
                                    }


                                ?>
                                </select>
                    </td>
                    <td>Status:<select class="form-control" name="status"  width="10px">
                               <option value="Today leacture">Today leacture</option>
                               <option value="No leacture">No leacture</option>
                                </select></td>
                  </tr>
                 
                    <tr>
                        <td colspan="5"><input type = "submit" class="btn btn-danger"  value ="submit" name="tsubmit"></td>
                    </tr>
                   </tbody>
                   
                <?php
                    include 'Conn.php';
                $msg=0;
                    if(isset($_POST['tsubmit']))
                {
                     $techname=$_POST['techers'];
                     $time=$_POST['txttime'];
                     $subject=$_POST['txtssubject'];
                     $year=$_POST['years'];
                     $sem=$_POST['ssem'];
                     $status=$_POST['status'];
                     
                    $query="insert into timetable(teachernm,subject,year,sem,time,status) values('$techname','$subject','$year','$sem','$time','$status')";
                    mysqli_query($con,$query); 
                    $msg=1;
                }
                else{

                    $msg=0;   
                }
                mysqli_close($con); 

                ?>
                    <tr>
                    <td>
                         <?php
                        if($msg==1)
                        {
                            echo "Added Into database..!!";
                        }
                        else
                        {
                            echo "Fail to add..!";
                        }
                     ?>
                 </td>
                   </tr>
                </table>
                </form>
                <div>
                 <form action="teachers.php" method="post">
                    <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                       
                                        <th>Teacher Name</th>
                                        <th>Subject</th>
                                        <th>Year</th>
                                        <th>Sem</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include 'Conn.php';
                                    $sql="select * from timetable ORDER BY id DESC";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                           
                                            <td><?php echo $row['teachernm'];?></td>
                                            <td><?php echo $row['subject'];?></td>
                                            <td><?php echo $row['year'];?></td>
                                            <td><?php echo $row['sem'];?></td>
                                             <td><?php echo $row['time'];?></td>
                                            <td><?php echo $row['status'];?></td>
                                            
                                            <!--<td><a href="Table.php?varname=<?php echo $row['id'];?>">Print</a></td>-->
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>      
                                    
                                                                 
                                </tbody>
                            </table>
                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="tab-pane fade" id="messages">
                                <form action="teachers.php" method="post">
                                    <br/>
                                 Name:<input type="text" class="form-control" name="txttech" required>
                                <input type = "submit" class="btn btn-primary"  value ="submit" name="tname">
              
                               </form>
                   
                                      <?php
                                if(isset($_POST['tname']))
                            {
                                    include 'Conn.php';
                                    $prn=$_POST['txttech'];
                                    $query="Delete from techer where name=$prn";
                                    mysqli_query($con,$query); 
                                    $msg=1;
                                }
                                else{
                                    $msg=0;   
                                }
                                //mysqli_close($con); 
                                ?>                            
                                
                 
                        
                </div>

                <div class="tab-pane fade active in" id="faculty">
                    <h3 align="center">Faculty</h3><br/>
                     <form action="teachers.php" method="post">
                        <td>Name:<input class="form-control" list="browsers" name="txttechname">
                    <datalist id="browsers">
                      <?php
                                include 'Conn.php';
                                 $query1="select name from techer";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['name'];?>"><?php echo $grd['name']?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist>
                </td>
                            <td>Hours:<select class="form-control" name="hrs"   width="10px">
                                 <option value="1">1 Hour</option>
                                 <option value="1.5">1.5 Hour</option>
                                 <option value="2">2 Hour</option>
                                 <option value="2.5">2.5 Hour</option>
                                 <option value="3">3 Hour</option>
                                 <option value="3.5">3.5 Hour</option>
                                 <option value="4">4 Hour</option>
                                 <option value="4.5">4.5 Hour</option>
                                 <option value="5">5 Hour</option> 
                              </select><br/>
                               
                              <input type = "submit" class="btn btn-danger"  value ="Get Salary" name="sals">
                              </form>
                               <?php
                                   if(isset($_POST['sals']))
                                   {
                                     $tn=$_POST['hrs'];
                                     $hrs=$tn;
                                     include 'Conn.php';
                                    $ssql="select * from mde where name='salary'";
                                    $sresult=$con->query($ssql);
                                    $srow=$sresult->fetch_assoc();
                                     $tol=$srow['fees']*$tn;

                                     $ts=$_POST['txttechname'];
                                    $tssql="select name from techer where name='$ts'";
                                    $tsresult=$con->query($tssql);
                                    $tsrow=$tsresult->fetch_assoc();
                                    
                                   }

                                   ?> 
                              <br/>
                    <table class="table">
                                <tbody>
                        <form action="teachers.php" method="post">
                            <tr>
                                <td colspan="3">Hours<input class="form-control" value="<?php echo $tn;?>" name="hrs" readonly></td>
                            </tr>
                        <tr>
                              <td>Name<input class="form-control" value="<?php echo $tsrow['name'];?>" name="txttechername" readonly></td>
                            <td>Topic:<input type="text" class="form-control" name="txttropic" required></td>
                            <td>Subject:<input class="form-control" list="browsers1" name="txtsubname">
                    <datalist id="browsers1">
                      <?php
                                include 'Conn.php';
                                 $sql1="select * from subject";
                                  $gradenameresult=mysqli_query($con,$sql1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['name'];?>"><?php echo $grd['name']?></option>
                                 <?php
                                 }
                                 ?>
                    </datalist></td>
                        </tr>
                        <tr>
                         
                         
                            <td>Time:<input type="text" class="form-control" name="txttime" required></td>
                            <td>Date:<input type="text" class="form-control" value="<?php echo date("d/m/Y") ?>" name="txtdate" readonly></td>
                            <td>Remuneration:<input type="text" class="form-control" value="<?php echo $tol;?>" name="txtsal" readonly></td>
                        </tr>
                            <tr>
                                     
                                             
                                  
                                    </tr>
                                    <tr>
                                        <td colspan="3"><input type = "submit" class="btn btn-danger"  value ="submit" name="techsub"></td>
                                    </tr>
                                </tbody>
                            
                    </table>
                </form>
                <hr>

                <hr>
                    <?php
                    include 'Conn.php';
                    if(isset($_POST['techsub']))
                    {
                        $nm=$_POST['txttechername'];
                        $tp=$_POST['txttropic'];
                        $sub=$_POST['txtsubname'];
                        $hr=$_POST['hrs'];
                        $tm=$_POST['txttime'];
                        $date=$_POST['txtdate'];
                        $sal=$_POST['txtsal'];

                        $qrl="insert into salary(name,topic,subject,hrs,tm,date,sal) values('$nm','$tp','$sub','$hr','$tm','$date','$sal')";
                        mysqli_query($con,$qrl); 
                        $msg=1;
                        echo "Record Saved..!!";
                         $name = $nm;
                            $sql="select * from techer where name like '%$name%'";
                            $result=$con->query($sql);
                            $row=$result->fetch_assoc();
                            
                       
                        $email =  "admin@bcaedu.in";
                        $message="Topic:".$tp."\nSubject:".$sub."\nHours:".$hr."\nToday Remuneration:".$sal;
                        $to =$row['contact'];
                        $subject = "Today Information: $name";
                        $headers = "From: $email";
                        
                        mail($to, $subject, $message, $headers);
                        echo "Record Saved..!!";
                    }
                    else
                    {
                        $msg=0;
                        echo "Fail Save..!!";
                    }
                    ?>
                    <div class="ex3">
                     <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Topic</th>
                            <th>Subject</th>
                            <th>Hours</th>
                            <th>Time</th>
                            <th>Date</th>
                            <th>Remuneration</th>
                        </thead>
                                <tbody>
                                   <?php
                                    include 'Conn.php';
                                   
                                    $sql="select * from salary ORDER BY id DESC ";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['topic'];?></td>
                                            
                                      
                                            <td><?php echo $row['subject'];?></td>
                                          <td><?php echo $row['hrs'];?></td>
                                           
                                            <td><?php echo $row['tm']?></td>
                                           <td><?php echo $row['date'];?></td>
                                              <td><?php echo $row['sal'];?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                <div>
                             </div>

                            </div>

                        </div>
                    </div>
                


    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>