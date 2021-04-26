<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>&nbsp;Yash&nbsp;Infotech</title>
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
<?php
include 'Conn.php';
include 'session.php';
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
<div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;Yash&nbsp;Infotech</a>
                </div>
                <!--<div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                       
                        <li><a href="logout.php">Logout</a></li>
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
                       
                    </li>
                       <li>
                        <a href="#"><i class="fa fa-user"></i>Staff<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addtechers.php">Add Teachers</a>
                            </li>
                           <li>
                                 <a href="schedules.php">Schedules</a>
                            </li>
                             <li>
                                <a href="attendence.php">Attendence</a>
                            </li>
                           <li>
                                <a href="staffreports.php">Techers Reports</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-qrcode"></i>Student Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="receipt.php">Add Students</a>
                            </li>
                           <li>
                                <a href="receipt.php">Import Data</a>
                            </li>
                           <li>
                                <a href="receipt.php">Enquiry Reports</a>
                            </li>
                        </ul>
                    </li>
                      <li>
                        <a href="#"><i class="fa fa-user "></i>Enquiry<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="receipt.php">Add Enquiry</a>
                            </li>
                           <li>
                                <a href="receipt.php">Follow Up</a>
                            </li>
                           <li>
                                <a href="receipt.php">Enquiry Reports</a>
                            </li>
                        </ul>
                    </li>
                      <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Receipt<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="receipt.php">Receipt</a>
                            </li>
                           <li>
                                <a href="receipt.php">Backlog</a>
                            </li>
                           <li>
                                <a href="receipt.php">Convocation</a>
                            </li>
                        </ul>
                    </li>
                       <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Subject<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="receipt.php">Add Subjects</a>
                            </li>
                           <li>
                                <a href="receipt.php">Update Subject</a>
                            </li>
                           <li>
                                 <a href="receipt.php">Subject Reports</a>
                            </li>
                        </ul>
                    </li>
                   <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Reports<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                             <li>
                               <a href="receipt.php">All Reports</a>
                            </li>
                            <li>
                               <a href="receipt.php">Techers Reports</a>
                            </li>
                           <li>
                                 <a href="receipt.php">Subject Reports</a>
                            </li>
                           <li>
                                <a href="receipt.php">Enquiry Reports</a>
                            </li>
                            <li>
                               <a href="receipt.php">Receipt Reports</a>
                            </li>
                           <li>
                                 <a href="receipt.php">Backlog Reports</a>
                            </li>
                           <li>
                                <a href="receipt.php">Convocation Reports</a>
                            </li>
                        </ul>
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
                    </li>
                </ul>

            </div>-->
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo $_SESSION['login_user']?></h2>
                    </div>
                </div>
                <!-- /. ROW  -->
				 
            <hr />
            <h5 align="center">Schedules</h5>
          
                <div class="table-responsive">
              <form action="schedules.php" method="POST">
            <table class="table">
                <tr>
                <td>Name:<input type="text" name="txtdname"  class="form-control" list="browsers" placeholder="Name" required></td>
                <datalist id="browsers">
                      <?php
                                include 'Conn.php';
                                 $query1="select name from staff";
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
                <td><input type = "submit" class="btn btn-danger"  value ="submit" name="staffdet"></td>
              </tr>
            </form>
            </table>
            <?php
                                   if(isset($_POST['staffdet']))
                                   {
                                     
                                   

                                     $ts=$_POST['txtdname'];
                                    $tssql="select * from staff where name='$ts'";
                                    $tsresult=$con->query($tssql);
                                    $tsrow=$tsresult->fetch_assoc();
                                    
                                   }

                                   ?> 
                                    <form id="addform" action="addsch.php" method="POST">
            <table  class="table">
              
              <tr>
                <td>Name:<input type="text" name="txtstaffname"  class="form-control" value="<?php echo $tsrow['name']?>"  readonly></td>
                <td>Staff Id:<input type="text" name="txtstaffid"  class="form-control" value="<?php echo $tsrow['id']?>"  readonly></td>
                <td>Username:<input type="text" name="txtstaffusername"  class="form-control" value="<?php echo $tsrow['username']?>"  readonly></td>
              </tr>
              <tr>
                <td>Date:<input type="date" name="txtschdate"  class="form-control" required></td>
                <td>Subject:<input type="text" list="subject" class="form-control" name="txtsubject"  required>
                     <datalist id="subject">
                      <?php
                                include 'Conn.php';
                                 $query1="select name from subject";
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
                <td>Time:<input type="text" name="txttym"  class="form-control" placeholder="Name" required></td>
              </tr>
               <tr>
                <td colspan="3"><select name="year"  class="form-control">
                  <option name="FYBCA">FYBCA</option>
                  <option name="SYBCA">SYBCA</option>
                  <option name="TYBCA">TYBCA</option>
                </select></td>
              </tr>
                <tr>
                <td colspan="3"><button class="btn btn-primary" id="submit" >Submit</button></td>
                </form>
              </tr>
              <tr>
                <td colspan="3"><div id="msg"></div></td>
              </tr>
            </table>
          

       
          <table  class="table">
            <tr>
              <th>Id</td>
                <th>Date</td>
                <th>Subject</td>
                <th>Time</td>
               
                <th>Username</td>
                <th>Staff Name</td>
                <th>Staff Id</td>
                <th>Year</td>
                <th>Delete</td>
            </tr>
            <tr>
              <?php
                                    include 'Conn.php';
                                    $sql="select * from sch";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['schdate'];?></td>
                                            <td><?php echo $row['subject'];?></td>
                                            <td><?php echo $row['schtym'];?></td>
                                            <td><?php echo $row['username'];?></td>
                                            <td><?php echo $row['staffname'];?></td>
                                            <td><?php echo $row['staffid'];?></td>
                                            <td><?php echo $row['year'];?></td>
                                            <td><a href="delsch.php?varname=<?php echo $row['id'];?>">Delete</a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                            ?>      
            </tr>
          </table>
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
<script type="text/javascript" src="jquery-1.8.2.min.js"></script>
<script>
  $("#submit").click(function() {
  $.post($("#addform").attr("action"),
    $("#addform :input").serializeArray(), function(info){
      $("#msg").html(info);
    });
  clearinput();
});

$("#addform").submit( function(){
  return false;
});

function clearinput(){
  $("#addform :input").each( function() {
    $(this).val('');
  });
}


</script>

</body>
</html>