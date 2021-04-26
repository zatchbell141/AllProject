<?php
$key=md5('india');
$salt=md5('india');
function encrypt($string,$key)
{
    $string=rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $string, MCRYPT_MODE_ECB)));
    return $string;
}
function decrypt($string,$key)
{
    $string=rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($string), MCRYPT_MODE_ECB));
    return $string;
}
function hashword($string,$salt)
{
    $string=crypt($string,'$1$'.$salt.'$1$');
    return $string;
}

function protect($string)
{
    $string=mysql_real_escape_string(trim(strip_tags(addslashes($string))));
    return $string;
}
?>
<?php
 include "session.php";
 include 'Conn.php';
 $msg=0;
if(isset($_POST['submit']))
{
    $Name=$_POST['txtname'];
    $lastname=$_POST['txtlastname'];
    $username=$_POST['txtusername'];
    $passwd=$_POST['txtpasswd'];
    $pswd=encrypt($passwd,$key);
    $gender=$_POST['gender'];
    $contact=$_POST['txtcontact'];
    $query="insert into admin(name,lastname,username,passwd,gender,contact) values('$Name','$lastname','$username', '$pswd','$gender','$contact')";
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
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;YashInfoTech</a>
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
                     <a href="Subject.php"><i class="fa fa-edit "></i>Subject</a>
                    </li>
                    <li>
                     <a href="assignment.php"><i class="fa fa-edit "></i>Assignment</a>
                    </li>
                     <li>
                     <a href="examtimetable.php"><i class="fa fa-edit "></i>Exam Time Table</a>
                    </li>
                     <li>
                     <a href="feesupdate.php"><i class="fa fa-edit "></i>Fees Update</a>
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
            <h5>Admin</h5>
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Add Admin</a>
                            </li>
                            <li class=""><a href="#profile" data-toggle="tab">Update Admin</a>
                            </li>
                            <li class=""><a href="#messages" data-toggle="tab">Delete Admin</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="home">
                          
                 <div class="row">
                   <div class="table-responsive">
                <form action="Addadmin.php" method="post">
                    <br>
                <table class="table">
                                <tbody>
                                    <tr>
                   
                    <td>Name:<input type="text" class="form-control" name="txtname" placeholder="Name" required></td>
                    <td>Lastname:<input type="text" class="form-control" name="txtlastname" placeholder="Lastname" required></td>
                    <td>Username:<input type="text" class="form-control" name="txtusername" placeholder="Username" required></td>
                    <td>Password:<input type="Password" class="form-control" name="txtpasswd" placeholder="Password" required></td>
                  </tr>
                  <tr>
                    <td>
                        Gender: <select class="form-control" name="gender" id="gender" width="10px">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                </select>
                    </td>
                   <td colspan="3">Contact: <input type="text" class="form-control" name="txtcontact" placeholder="Contact" required></td>        
                    </tr>
                    <tr>
                        
                        <td colspan="5"><input type = "submit" class="btn btn-primary"  value ="submit" name="submit"></td>
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
                 <form action="Addadmin.php" method="post">
                   <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Gender</th>
                                        <th>Contact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include 'Conn.php';
                                    $sql="select * from admin";
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
                                            <td><?php echo decrypt($row['passwd'],$key);?></td>
                                            <td><?php echo $row['gender'];?></td>
                                            <td><?php echo $row['contact'];?></td>
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
                            <div class="tab-pane fade" id="profile">
                                <br>
                                <form action="Addadmin.php" method="post">
                            Username:<input type="text" class="form-control" name="txtname" required>
                           <input type = "submit" class="btn btn-primary"  value ="submit" name="sutname">
                            </form>
                           <?php
                            if(isset($_POST['sutname']))
                            {
                                    include 'Conn.php';
                                    $name=$_POST['txtname'];
                                    $sql="select * from admin  where username='".$name."'ORDER BY id DESC ";
                                    $result=$con->query($sql);
                                    $row=$result->fetch_assoc();
                            }

                           ?>
                             <div class="table-responsive">
                                <br>
                               
                             <table class="table">
                                <tbody>
                                    <tr>
                    <form action="Addadmin.php" method="post">
                    <td>Name:<input type="text" class="form-control" name="txtuname" value="<?php echo $row['name'];?>" required></td>
                    <td>Lastname:<input type="text" class="form-control" name="txtsulname" value="<?php echo $row['lastname'];?>" required></td>
                    <td>Username:<input type="text" class="form-control" name="txtsuser" value="<?php echo $row['username'];?>"required></td>
                     <td>Gender:<input type="text" class="form-control" name="txtugender" value="<?php echo $row['gender'];?>" required></td>
                   
                  </tr>
                  <tr>
                   
                     <td colspan="2">Password:<input type="text" class="form-control" value="<?php echo decrypt($row['passwd'],$key);?>" name="txtupasswd"  required></td>
                         <td colspan="3">Contact:<input type="text" class="form-control" value="<?php echo $row['contact'];?>" name="txtucontact"  required></td>        
                    </tr>
                    <tr>
                        
                        <td colspan="5"><input type = "submit" class="btn btn-danger"  value ="Update" name="supsubmit"></td>
                    </tr>
                   </tbody>
                </table>
                 <?php
                        if($msg==1)
                        {
                            echo "updated database..!!";
                        }
                        else
                        {
                            echo "Fail to updated..!";
                        }
                     ?>
                        </form>
                                <?php
                                if(isset($_POST['supsubmit']))
                            {
                                    $Name=$_POST['txtuname'];
                                    $lastname=$_POST['txtsulname'];
                                    $username=$_POST['txtsuser'];
                                    $passwd=$_POST['txtupasswd'];
                                    $pswd=encrypt($passwd,$key);
                                    $gender=$_POST['txtugender'];
                                    $contact=$_POST['txtucontact'];
                                    $query="update admin set name='".$Name."',lastname='".$lastname."',username='".$username."',passwd='".$pswd."',contact='".$contact."',gender='".$gender."' where username='".$username."'";
                                    mysqli_query($con,$query); 
                                    $msg=1;
                                }
                                else{
                                    $msg=0;   
                                }
                                mysqli_close($con); 
                                ?>
                            </div>
                        </div>
                            <div class="tab-pane fade" id="messages">
                                <form action="Addadmin.php" method="post">
                                    <br/>
                                 Userame:<input type="text" class="form-control" name="txtdname" required>
                                <input type = "submit" class="btn btn-primary"  value ="submit" name="sdname">
              
                               </form>
                               <?php
                            if(isset($_POST['sdname']))
                            {
                                    include 'Conn.php';
                                    $name=$_POST['txtdname'];
                                    $sql="select * from admin  where username='".$name."'";
                                    $result=$con->query($sql);
                                    $row=$result->fetch_assoc();
                            }

                           ?>
                   <div class="table-responsive">
                                <br>
                               
                             <table class="table">
                                <tbody>
                                    <tr>
                    <form action="Addadmin.php" method="post">
                   <td>Name:<input type="text" class="form-control" name="txtuname" value="<?php echo $row['name'];?>" readonly></td>
                    <td>Lastname:<input type="text" class="form-control" name="txtsulname" value="<?php echo $row['lastname'];?>" readonly></td>
                    <td>Username:<input type="text" class="form-control" name="txtsdser" value="<?php echo $row['username'];?>"readonly></td>
                     <td>Gender:<input type="text" class="form-control" name="txtugender" value="<?php echo $row['gender'];?>" readonly></td>
                   
                  </tr>
                  <tr>
                   
                     <td colspan="2">Password:<input type="text" class="form-control" value="<?php echo decrypt($row['passwd'],$key);?>" name="txtupasswd"  readonly></td>
                         <td colspan="3">Contact:<input type="text" class="form-control" value="<?php echo $row['contact'];?>" name="txtucontact"  readonly></td>        
                    </tr>
                    <tr>
                        
                        <td colspan="5"><input type = "submit" class="btn btn-danger"  value ="Delete" name="sdsubmit"></td>
                    </tr>
                   </tbody>
                </table>
                          </form>   
                              <?php
                                if(isset($_POST['sdsubmit']))
                            {
                                    include 'Conn.php';
                                    $prn=$_POST['txtsdser'];
                                    $query="Delete from admin where username='".$prn."'";
                                    mysqli_query($con,$query); 
                                    $msg=1;
                                }
                                else{
                                    $msg=0;   
                                }
                                //mysqli_close($con); 
                                ?>
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