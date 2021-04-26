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
            <li><a href="notes.php">Notes</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Student's Remark</h1>
          <div class="page-header">
       <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Remark</h3>
            </div>
            <div class="panel-body">
                <form action="remark.php" method="post">
                <table  class="table table-striped">
          <tr>
              <td>Batch:<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <select name="txtbatchn" class="form-control" >
                      <?php
                                include 'Conn.php';
                                 $query1="select * from batch where active=1";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['id'];?>"><?php echo $grd['name'];?></option>
                                 <?php
                                 }
                                 ?>
                             </select>
              </div></td>
              <td >Batch Time:<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                     <select name="txtbatchtym" class="form-control" >
                      <?php
                                include 'Conn.php';
                                 $query1="select * from batchtime";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 <option value="<?php echo $grd['id'];?>"><?php echo $grd['name'];?></option>
                                 <?php
                                 }
                                 ?>
                             </select>
              </div></td>
            </tr>
            <tr>
              <!--<td>
                Receipt Mode:<select name="txtmode" class="form-control" id="mode" onchange="changetextbox1();">
                  <option value="fees">Regular</option>
                   <option value="installment">Installments</option>
                </select>
              </td>
            </tr>-->
            <tr>
              <td colspan="2"><input type = "submit" class="btn btn-primary"  value ="Search" name="txtsrchuser"></td>
              </form>
            </tr>
          </table>
          </div>
          </div>
          </div>
  <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Remark details</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    	<thead>
              <tr>
		          <tr>
                 <th>Sr.No</th>
                 <th>Account Head</th>
                 <th>Admission Date</th>
                 <th>Name</th>
                 <th>Batch Timing</th> 
                 <th>Remark</th>     
              </tr>
              </tr>
          </thead>
          	<tbody>
          		<tr>
          		<?php 
                
                  include 'Conn.php';
                  
                if(isset($_POST['txtsrchuser']))
                {
                   
                   
                   $batchn=$_POST['txtbatchn'];
                  $batchtym=$_POST['txtbatchtym'];
                    $sql="select * from receipt where batch='".$batchtym."' and year='".$batchn."' and active='1' order by id ASC";
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
                                             
                                             
                                             $cnsql="select * from coursesname where id='".$row['coursename']."'";
                                            $cnresult=$con->query($cnsql);
                                            $cnrow=$cnresult->fetch_assoc();
                                            
                                             $cmsql="select * from coursesmode where id='".$row['coursemode']."'";
                                            $cmresult=$con->query($cmsql);
                                            $cmrow=$cmresult->fetch_assoc();
                                             
                                             $bhsql="select * from batchtime where id='".$row['batch']."'";
                                            $bhresult=$con->query($bhsql);
                                            $bhrow=$bhresult->fetch_assoc();
                                            
                                            


                     ?>
                     <tr>
                        
                    <td><?php echo $no;?></td>
                     <td><?php   echo $cnrow['name'];?></td>
                     
                       
                      <td><?php echo   $date;?></td>
                    
                       <td><?php echo $row['fullname'];?></td>
                       <td><?php echo $bhrow['name'];?></td>
                      
                         <td>
                             <select name="txtmode" class="form-control">
                                 <option value=" ">Select Remark</option>
                              <?php
                                include 'Conn.php';
                                 $query1="select * from rate";
                                  $gradenameresult=mysqli_query($con,$query1) or die(mysqli_error($con));
                                 foreach($gradenameresult as $grd)
                                 {
                                 ?>
                                 
                                 <option value="<?php echo $grd['id'];?>"><?php echo $grd['name'];?></option>
                                 <?php
                                 }
                                 ?>
                            </select>
                         </td>
                                             </tr>
                     <?php
                   }
                 }
                  
}
                     ?>
              </tr>
          	</tbody>
                </table>
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
      
<script type="text/javascript" src="jquery-1.8.2.min.js"></script>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
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

</body></html>