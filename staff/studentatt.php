<?php
include 'session.php';
?>
<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com/docs/3.3/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/3.3/favicon.ico">

    <title>Yash Infotech</title>

    <!-- Bootstrap core CSS -->
    <link href="./Dashboard Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./Dashboard Template for Bootstrap_files/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Dashboard Template for Bootstrap_files/ie-emulation-modes-warning.js.download"></script>
<link rel="stylesheet" href="css/scorllbar.css" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index3.php">Yash Infotech</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           <li><a href="index3.php">Dashboard</a></li>
            <li><a href="studentatt.php">Attendence</a></li>
            <li><a href="#">Remarks</a></li>
            <li><a href="#">Profile</a></li>
           
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          <li class="active"><a href="enquiry.php">Add enquiry <span class="sr-only">(current)</span></a></li>
            <li><a href="receipt.php">Fees Receipt</a></li>
            <li><a href="installments.php">Balance Fees</a></li>
            <li><a href="#">My Incentive's</a></li>
            <li><a href="#">Report Hardware Issue's</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="#">My Attendance</a></li>
            <li><a href="#">Student Reports</a></li>
            <li><a href="#">Student Feedbacks</a></li>
            <li><a href="users.php">Users</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Student's Attendence</h1>
          <div class="page-header">
     
  <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Today's Attendence details</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    	<thead>
              <tr>
		          <tr>
                 <th>Sr.No</th>
                 <th>StudentId</th>
                 <th>Fullname</th>
                 <th>Username</th>
                 <th>Staff ID</th> 
                 <th>Rate</th>
                 <th>Date</th> 
                  
              </tr>
          </thead>
          	<tbody>
          		<tr>
          		<?php 
                
                  include 'Conn.php';
                    $date=date('Y-m-d');
               
                    $sql="SELECT * FROM `studentatt` where date='".$date."'";
                    $result=$con->query($sql);
                   if($result->num_rows>0)
                   {
                     $no=0;
                      while($row=$result->fetch_assoc())
                      {
                        $no++;
                                              $date=$row['date'];
                                              $date=strtotime($date);
                                              $date=date('d-m-Y',$date);
                                             
                                             
                                            $bhsql="select * from staff where Staffid='".$row['task']."'";
                                            $bhresult=$con->query($bhsql);
                                            $bhrow=$bhresult->fetch_assoc();
                                            
                                             $rasql="select * from rate where id='".$row['rate']."'";
                                             $raresult=$con->query($rasql);
                                             $rarow=$raresult->fetch_assoc();
                                            
                                            


                     ?>
                     <tr>
                        
                    <td><?php echo $no;?></td>
                    <td><?php echo $row['studentid'];?></td>
                    <td><?php echo $row['fullname'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $bhrow['fullname'];?></td>
                    <td><?php echo $rarow['name'];?></td>
                    <td><?php echo $date;?></td>
                  
                     </tr>
                     <?php
                   }
                 }
                  

                     ?>
              </tr>
          	</tbody>
                </table>
                </div>
                </div>
                 <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"></h3>Export In Excel</h3>
            </div>
            <div class="panel-body">
                <form action="exportatt.php" method="post">
                <table class="table table-striped">
                        <tr>
                            <td>To:<input type="date" class="form-control" name="txtdateto"></td>
                            <td>Form:<input type="date" class="form-control" name="txtdateform"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="export" value="Export" class="btn btn-danger"></td>
                            </form>
                        </tr>
                </table>
             </div>
            </div>
                <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Search For Attendence details</h3>
            </div>
            <div class="panel-body">
                <form action="studentatt.php" method="post">
                 <table class="table table-striped">
                    	<thead>
		          <tr>
		              <td>Date:<input type="date" name="txtdate" class="form-control" ></td>
		              </tr>
		              <tr>
		                  <td><input type="submit" class="btn btn-primary" name="submit" value="Search"></td>
		                  </form>
		              </tr>
		              </thead>
		              </table>
                 <table class="table table-striped">
                    	<thead>
             
		          <tr>
                 <th>Sr.No</th>
                 <th>StudentId</th>
                 <th>Fullname</th>
                 <th>Username</th>
                 <th>Staff ID</th> 
                 <th>Rate</th>
                 <th>Date</th> 
                  
              </tr>
          </thead>
          	<tbody>
          		<tr>
          		<?php 
                
                  include 'Conn.php';
                  if(isset($_POST['submit']))
                  {
                    $date=$_POST['txtdate'];
                                              $date=strtotime($date);
                                              $date=date('Y-m-d',$date);
                    $sql="SELECT * FROM `studentatt` where date='".$date."'";  
                  }
                  else
                  {
                    $sql="SELECT * FROM `studentatt` order by id desc";    
                  }
                    
                    $result=$con->query($sql);
                   if($result->num_rows>0)
                   {
                     $no=0;
                      while($row=$result->fetch_assoc())
                      {
                        $no++;
                                              $date=$row['date'];
                                              $date=strtotime($date);
                                              $date=date('d-m-Y',$date);
                                             
                                             
                                            $bhsql="select * from staff where Staffid='".$row['task']."'";
                                            $bhresult=$con->query($bhsql);
                                            $bhrow=$bhresult->fetch_assoc();
                                            
                                             $rasql="select * from rate where id='".$row['rate']."'";
                                             $raresult=$con->query($rasql);
                                             $rarow=$raresult->fetch_assoc();
                                            
                                            


                     ?>
                     <tr>
                        
                    <td><?php echo $no;?></td>
                    <td><?php echo $row['studentid'];?></td>
                    <td><?php echo $row['fullname'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $bhrow['fullname'];?></td>
                    <td><?php echo $rarow['name'];?></td>
                    <td><?php echo $date;?></td>
                  
                     </tr>
                     <?php
                   }
                 }
                  

                     ?>
              </tr>
          	</tbody>
                </table>
                </div>
                </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Dashboard Template for Bootstrap_files/jquery.min.js.download"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./Dashboard Template for Bootstrap_files/bootstrap.min.js.download"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./Dashboard Template for Bootstrap_files/holder.min.js.download"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Dashboard Template for Bootstrap_files/ie10-viewport-bug-workaround.js.download"></script>
      


</body></html>