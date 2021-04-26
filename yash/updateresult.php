<?php
include "session.php";
include 'Conn.php';
$msg="";
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


     <link href="md/styles/multiselect.css" rel="stylesheet"/>
  <script src="md/multiselect.min.js"></script>
</head>



  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:700px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
   margin-top:100px;
  }
  
  </style>
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
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
       width: 1002px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
  margin-top: 17px;
  height: 1000px;
  }
  .ex3 {
    background-color: white;
     width: 972px;

    height: 400px;
    overflow: auto;
}
  </style>
 </head>
 <body>
 <div class="container box">
   <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Backlog</a>
                            </li>
                           
                            
                        </ul>
                        <div class="tab-content">
                      <div class="tab-pane fade active in" id="home">
                          <h3>Backlog Form</h3>
                              <hr>
                               <?php
                         if(isset($_POST['subs']))
                        {
                            include 'Conn.php';
                            $name=$_POST['txtsname'];
                            $sql="select * from result where name like '%$name%'";
                            $result=$con->query($sql);
                            $row=$result->fetch_assoc();
                    }
                 ?>
                              <form action="updateresult.php" method="post">
                               Name:<input type="text" class="form-control" name="txtsname" required>
                   <input type = "submit" class="btn btn-primary"  value ="submit" name="subs">
                   <br/>
              </form> 
             
                 
                   
              </form> 
                               
               <form action="updateresult.php" method="post">
                    <br>
               <table class="table">
                                 <form action="updateresult.php" method="post">
                                   <br/>
                                <tbody>
                                    <tr>
                                        <td>PRN:<input type="text" class="form-control" name="txtblprn" value="<?php echo $row['prn'];?>" readonly></td>
                                        <td>Seat No:<input type="text" class="form-control" name="txtseat" required></td>
                                        <td>Name:<input type="text" class="form-control" name="txtblname" value="<?php echo $row['name'];?>" readonly></td>
                                        <td>Remark:<select class="form-control" name="remark"   width="10px">
                                <option value="">Select Remark Type</option>
                                <option value="Pass">Pass</option>
                                <option value="ATKT">ATKT</option>
                                </select></td>
                                    </tr>
                                    
                                    <tr>
                                        <td colspan="4">Subject:&nbsp;<select class="form-control" name="subject[]" id="subj" width="10px" multiple="multiple">
                                        <?php
                                        $conn = mysql_connect("localhost","root","");
                                          mysql_select_db("mags",$conn);
                                          $users_language = explode(",",$users["subject"]);
                                          $languages_result = mysql_query("SELECT * FROM subject");
                                          $i=0;
                                          while($languages_stack = mysql_fetch_array($languages_result)) {
                                          if(in_array($languages_stack["name"],$users_language)) $str_flag = "selected";
                                          else $str_flag="";
                                          ?>
                                          <option value="<?=$languages_stack["name"];?>" <?php echo $str_flag; ?>><?=$languages_stack["name"];?></option>
                                          <option value="Internal">Internal</option>
                                          <option value="External">External</option>
                                          <?php
                                          $i++;
                                          }
                                          ?>
                                      </select>
                                    </td>
                                     </tr>
                                    <tr>
                                        <td colspan="2"><input type = "submit" class="btn btn-primary"  value ="Update" name="backlog"></td>
                                        <td colspan="2"><input type = "submit" class="btn btn-primary"  value ="Delete" name="delete"></td>
                                    </tr>
                                    </table> 
                                    </form> 
                
                    
                 <?php
                                    include 'Conn.php';
                                   $msg=0;


                                  if(isset($_POST['backlog']))
                                    {
                                      $prn=$_POST['txtblprn'];
                                      $name=$_POST['txtblname'];
                                      $seat=$_POST['txtseat'];
                                      $remark=$_POST['remark'];
                                      $subject=implode('<br>', $_POST['subject']);
                                     
                                      $query="update result set name='".$name."',prn='".$prn."',seat='".$seat."',subject='".$subject."',Mode='".$remark."' where name like '%$name%' ORDER BY id DESC";
                                        mysqli_query($con,$query); 
                                        $msg=1;
                                    }
                                    else
                                    {
                                      $msg=0;
                                    }

                                    ?> 
                                  <?php
                                    include 'Conn.php';
                                   $msg=0;


                                  if(isset($_POST['delete']))
                                    {
                                      $prn=$_POST['txtblprn'];
                                      $name=$_POST['txtblname'];
                                      $seat=$_POST['txtseat'];
                                     
                                     
                                      $query="delete from result where seat like '%$seat%' ORDER BY id  DESC";
                                        mysqli_query($con,$query); 
                                        $msg=1;
                                    }
                                    else
                                    {
                                      $msg=0;
                                    }

                                    ?> 
                <div class="ex3">
                   <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        
                                         <th>PRN</th>
                                         <th>Name</th>
                                          <th>Seat No</th>
                                       
                                         <th>Subject</th>
                                        
                                        <th>Mode</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                    include 'Conn.php';
                                   
                                    $sql="select * from result ORDER BY id DESC ";
                                    $result=$con->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row=$result->fetch_assoc())
                                        {
                                            
                                            ?>
                                            <tr class="success">
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['prn'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                             <td><?php echo $row['seat'];?></td>
                                      
                                            <td><?php echo $row['subject'];?></td>
                                         
                                           
                                            <td><?php echo $row['Mode']?></td>
                                          
                                             
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                  </table>
                                
    </div>
                </div>
              </div>
                 <div class="tab-pane fade" id="profile">
                          <h3 align="center">Print</h3>
                        </div>
  <div>
    <script>
  document.multiselect('#');
</script>

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